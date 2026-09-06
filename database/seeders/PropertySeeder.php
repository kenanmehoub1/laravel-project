<?php

namespace Database\Seeders;

use App\Models\Property;
use App\Models\User;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    public function run(): void
    {
        // نأخذ أول مستخدم من قاعدة البيانات لنربطه بالعقارات
        $user = User::first();

        // عقار 1
        Property::create([
            'title' => 'شقة فاخرة في وسط البلد',
            'description' => 'شقة 3 غرف نوم، 2 حمام، مطبخ متكامل، إطلالة رائعة',
            'price' => 550000,
            'bedrooms' => 3,
            'bathrooms' => 2,
            'area' => 150.5,
            'city' => 'دمشق',
            'address' => 'شارع الثورة، بناء رقم 10',
            'images' => json_encode(['img1.jpg', 'img2.jpg']),
            'is_available' => true,
            'user_id' => $user->id,
        ]);

        // عقار 2
        Property::create([
            'title' => 'فيلا مع حديقة',
            'description' => 'فيلا مساحة 300 متر مع حديقة خاصة وموقف سيارات',
            'price' => 1200000,
            'bedrooms' => 5,
            'bathrooms' => 4,
            'area' => 300,
            'city' => 'الرياض',
            'address' => 'حي النخيل، شارع الأمير سلطان',
            'images' => json_encode(['villa1.jpg', 'villa2.jpg']),
            'is_available' => false,
            'user_id' => $user->id,
        ]);

        // إنشاء 10 عقارات عشوائية باستخدام Factory (إذا أعددته)
        // Property::factory()->count(10)->create();
    }
}