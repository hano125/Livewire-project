<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::updateOrInsert(["email" => "test@test.com"], [
            "name" => "Default Name",
            "address" => "123 Default St, City, Country",
            "phone" => "+1234567890",
            "facebook" => "https://facebook.com/default",
            "twitter" => "https://twitter.com/default",
            "linkedin" => "https://linkedin.com/default",
            "instagram" => "https://instagram.com/default",
        ]);
    }
}
