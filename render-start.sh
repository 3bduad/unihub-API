#!/bin/bash
set -e

echo "🚀 Starting University System Backend on Render..."

# ==========================================
# انتظار قاعدة البيانات PostgreSQL
# ==========================================
if [ -n "$DATABASE_URL" ]; then
    echo "⏳ Waiting for database..."
    
    # استخراج معلومات الاتصال من DATABASE_URL
    # Format: postgresql://user:pass@host:port/dbname
    DB_USER=$(echo $DATABASE_URL | sed -n 's/.*:\/\/\([^:]*\):.*/\1/p')
    DB_PASS=$(echo $DATABASE_URL | sed -n 's/.*:\/\/[^:]*:\([^@]*\)@.*/\1/p')
    DB_HOST=$(echo $DATABASE_URL | sed -n 's/.*@\([^:\/]*\).*/\1/p')
    DB_PORT=$(echo $DATABASE_URL | sed -n 's/.*:\([0-9]*\)\/.*/\1/p')
    DB_NAME=$(echo $DATABASE_URL | sed -n 's/.*\/\([^?]*\).*/\1/p')
    
    # استخدام القيم الافتراضية إذا لم يتم العثور عليها
    DB_PORT=${DB_PORT:-5432}
    
    # انتظار PostgreSQL
    until PGPASSWORD=$DB_PASS psql -h "$DB_HOST" -p "$DB_PORT" -U "$DB_USER" -d "$DB_NAME" -c '\q' 2>/dev/null; do
        echo "Waiting for PostgreSQL..."
        sleep 2
    done
    
    echo "✅ Database connected!"
else
    echo "⚠️  DATABASE_URL not set, using individual variables"
    DB_HOST=${DB_HOST:-localhost}
    DB_PORT=${DB_PORT:-5432}
    DB_DATABASE=${DB_DATABASE:-neondb}
    DB_USERNAME=${DB_USERNAME:-neondb_owner}
    DB_PASSWORD=${DB_PASSWORD}
fi

# ==========================================
# إنشاء ملف .env من المتغيرات البيئية
# ==========================================
cat > .env <<EOF
APP_NAME="${APP_NAME:-UniHub}"
APP_ENV=production
APP_KEY=${APP_KEY}
APP_DEBUG=${APP_DEBUG:-false}
APP_URL=${APP_URL}

FRONTEND_URL=${FRONTEND_URL:-https://unihub-react.vercel.app}

DB_CONNECTION=pgsql
DB_HOST=${DB_HOST}
DB_PORT=${DB_PORT:-5432}
DB_DATABASE=${DB_DATABASE}
DB_USERNAME=${DB_USERNAME}
DB_PASSWORD=${DB_PASSWORD}
DB_SSLMODE=require

CACHE_STORE=database
SESSION_DRIVER=database
SESSION_LIFETIME=480
SESSION_ENCRYPT=false
SESSION_PATH=/
SESSION_DOMAIN=null

QUEUE_CONNECTION=database

MAIL_MAILER=${MAIL_MAILER:-smtp}
MAIL_HOST=${MAIL_HOST:-smtp.resend.com}
MAIL_PORT=${MAIL_PORT:-587}
MAIL_USERNAME=${MAIL_USERNAME:-resend}
MAIL_PASSWORD=${MAIL_PASSWORD}
MAIL_ENCRYPTION=${MAIL_ENCRYPTION:-tls}
MAIL_FROM_ADDRESS=${MAIL_FROM_ADDRESS}
MAIL_FROM_NAME="${APP_NAME:-UniHub}"

PASSPORT_CLIENT_ID=${PASSPORT_CLIENT_ID}
PASSPORT_CLIENT_SECRET=${PASSPORT_CLIENT_SECRET}

LOG_CHANNEL=errorlog
LOG_LEVEL=${LOG_LEVEL:-error}

BCRYPT_ROUNDS=12
FILESYSTEM_DISK=local
EOF

echo "✅ .env file created"

# ==========================================
# تشغيل Migrations وإنشاء الجداول
# ==========================================
echo "📊 Running database migrations..."
php artisan migrate --force || {
    echo "❌ Migration failed. Checking database connection..."
    php artisan tinker --execute="DB::connection()->getPdo();"
    exit 1
}

# ==========================================
# تشغيل Seeders (البيانات الأولية)
# ==========================================
echo "🌱 Seeding database..."
php artisan db:seed --force --class=UserTypesSeeder || echo "⚠️  UserTypesSeeder already run or not found"
php artisan db:seed --force --class=PermissionsSeeder || echo "⚠️  PermissionsSeeder already run or not found"
php artisan db:seed --force --class=DaysSeeder || echo "⚠️  DaysSeeder already run or not found"
php artisan db:seed --force --class=SettingsSeeder || echo "⚠️  SettingsSeeder already run or not found"

# ==========================================
# توليد مفاتيح Passport
# ==========================================
if [ ! -f storage/oauth-private.key ]; then
    echo "🔑 Generating Passport keys..."
    php artisan passport:keys --force
fi

# ==========================================
# إنشاء Passport Client إذا لم يكن موجوداً
# ==========================================
if [ -z "$PASSPORT_CLIENT_ID" ] || [ -z "$PASSPORT_CLIENT_SECRET" ]; then
    echo "🔐 Creating Passport client..."
    php artisan passport:client --password --name="UniHub Mobile Client" --no-interaction > /tmp/passport.txt 2>&1 || true
    
    if [ -f /tmp/passport.txt ]; then
        CLIENT_ID=$(grep -oP 'Client ID: \K.*' /tmp/passport.txt | head -1)
        CLIENT_SECRET=$(grep -oP 'Client secret: \K.*' /tmp/passport.txt | head -1)
        
        if [ -n "$CLIENT_ID" ] && [ -n "$CLIENT_SECRET" ]; then
            echo ""
            echo "========================================="
            echo "⚠️  IMPORTANT - Save these credentials:"
            echo "========================================="
            echo "PASSPORT_CLIENT_ID=$CLIENT_ID"
            echo "PASSPORT_CLIENT_SECRET=$CLIENT_SECRET"
            echo "========================================="
            echo ""
            echo "⚠️  Add them to Render environment variables and redeploy!"
        fi
    fi
fi

# ==========================================
# Storage link
# ==========================================
echo "🔗 Creating storage link..."
php artisan storage:link --force || echo "⚠️  Storage link already exists"

# ==========================================
# تحسين الأداء
# ==========================================
echo "⚡ Optimizing application..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo ""
echo "✅ Backend is ready!"
echo "🌐 Application URL: ${APP_URL}"
echo "🎯 Frontend URL: ${FRONTEND_URL}"
echo ""
echo "Starting Apache server..."

# تشغيل Apache
exec apache2-foreground