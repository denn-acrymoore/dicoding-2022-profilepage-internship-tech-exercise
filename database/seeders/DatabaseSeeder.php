<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        UserProfile::create([
            'email' => 'denn.sebastian.e@gmail.com',
            'nama' => 'Denn Sebastian',
            'username' => 'acrymoore',
            'headline' => 'Dicoding Tech Engineer Intern',
            'tentang_saya' => 'Suka programming dan belajar hal baru.',
            'image_path' => "/database-images/profile-images/fbTxVJ0WXqsGOaxbkNja2KEqUor1ZlF0HFHUnXWD.jpg"
        ]);

        UserProfile::create([
            'email' => 'tono.subakti@gmail.com',
            'nama' => 'Tono Subakti',
            'username' => 'tono24',
            'headline' => 'Product Manager at Tokopedia',
            'tentang_saya' => 'Sehat dan Kuat.',
            'image_path' => "/database-images/profile-images/gbBsTCll27ocT5NsZ6UoLwLaoAxBnCMO8g3kJWWl.jpg"
        ]);

        UserProfile::create([
            'email' => 'susi.margono@gmail.com',
            'nama' => 'Susi Margono',
            'username' => 'susi313',
            'headline' => 'Sales Representative at KitaBisa',
            'tentang_saya' => 'Saya anak yang rajin bekerja.',
            'image_path' => "/database-images/profile-images/c5gC4h7Sq2c9zIKKPVOZMLKnwFbX3wkj6LQjVA7e.jpg"
        ]);
    }
}
