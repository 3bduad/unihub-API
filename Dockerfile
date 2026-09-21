# استخدام PHP 8.3 مع Apache
FROM php:8.3-apache

# تثبيت التبعيات الأساسية
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libpq-dev \
    zip \
    unzip \
    libzip-dev \
    postgresql-client \
    && docker-php-ext-install pdo_pgsql pgsql mbstring exif pcntl bcmath gd zip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# تثبيت Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# تفعيل Apache modules
RUN a2enmod rewrite headers

# تعيين مجلد العمل
WORKDIR /var/www/html

# نسخ ملفات المشروع
COPY . /var/www/html

# تثبيت تبعيات PHP
RUN composer install --no-dev --optimize-autoloader --no-interaction

# إنشاء مجلدات التخزين
RUN mkdir -p storage/framework/{sessions,views,cache} \
    && mkdir -p storage/logs \
    && mkdir -p bootstrap/cache

# ضبط الصلاحيات
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage \
    && chmod -R 775 /var/www/html/bootstrap/cache

# تعديل Apache DocumentRoot
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

# السماح بـ .htaccess overrides
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# نسخ سكريبت البدء
COPY render-start.sh /usr/local/bin/start.sh
RUN chmod +x /usr/local/bin/start.sh

# فتح المنفذ (Render يستخدم 10000 افتراضياً)
EXPOSE 80

# نقطة الدخول
ENTRYPOINT ["/usr/local/bin/start.sh"]