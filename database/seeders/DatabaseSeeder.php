<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use App\Models\User;
use App\Models\UserType;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. إعادة ملء البيانات الأساسية
        $this->call([
            PermissionsSeeder::class,
            UserTypesSeeder::class,
            SettingsSeeder::class,
            DaysSeeder::class,
        ]);

        // 2. إنشاء عميل Passport
        Artisan::call('passport:client', [
            '--personal' => true,
            '--name' => 'UniHub API Personal Access Client'
        ]);

        // 3. إنشاء المستخدم المشرف العام
        $adminType = UserType::where('user_type_code', 'admin')->first();
        if ($adminType) {
            User::updateOrCreate(
                ['academic_number' => 'ADM0001'],
                [
                    'full_name' => ' عبدالله الهاشمي ',
                    'email' => 'ala.hussein002@gmail.com',
                    'phone' => '734637112',
                    'password' => Hash::make('Admin@12345'),
                    'gender' => 0,
                    'user_type_id' => $adminType->user_type_id,
                    'college_id' => null,
                ]
            );
        }

        // 4. إنشاء الكلية الأولى وربط كل الصلاحيات بالمستخدم الإداري
        $this->call(InitialCollegeSeeder::class);
    }
}