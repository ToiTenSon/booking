<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    public function run(): void
    {
        // Tạm tắt ràng buộc khóa ngoại (nếu có)
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Xóa toàn bộ dữ liệu bảng rooms
        DB::table('rooms')->truncate();

        // Bật lại ràng buộc
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Thêm dữ liệu mới
        DB::table('rooms')->insert([
            ['name' => 'DELUXE SKY', 'city' => 'Hanoi', 'price' => 500000, 'image_path' => 'images/home1.jpg'],
            ['name' => 'FAMILY', 'city' => 'Hanoi', 'price' => 400000, 'image_path' => 'images/home2.jpg'],
            ['name' => 'SWEET', 'city' => 'Hanoi', 'price' => 800000, 'image_path' => 'images/home3.jpg'],
            ['name' => 'FAMILY DELUXE', 'city' => 'HCM', 'price' => 600000, 'image_path' => 'images/home4.jpg'],
            ['name' => 'FAMILY OCEAN', 'city' => 'HCM', 'price' => 750000, 'image_path' => 'images/home5.jpg'],
            ['name' => 'DELUXE', 'city' => 'HCM', 'price' => 550000, 'image_path' => 'images/home6.jpg'],
            ['name' => 'DELUXE CITY', 'city' => 'DaNang', 'price' => 470000, 'image_path' => 'images/home7.jpg'],
            ['name' => 'FAMILY GARDEN', 'city' => 'DaNang', 'price' => 580000, 'image_path' => 'images/home8.jpg'],
            ['name' => 'GOLD SKY', 'city' => 'DaNang', 'price' => 520000, 'image_path' => 'images/home9.jpg'],
            ['name' => 'GOLD', 'city' => 'NhaTrang', 'price' => 500000, 'image_path' => 'images/home10.jpg'],
            ['name' => 'GOLD FAMILY', 'city' => 'NhaTrang', 'price' => 650000, 'image_path' => 'images/home11.jpg'],
            ['name' => 'GOLD DELUXE', 'city' => 'NhaTrang', 'price' => 700000, 'image_path' => 'images/home12.jpg'],
            ['name' => 'GOLD GARDEN', 'city' => 'DaLat', 'price' => 560000, 'image_path' => 'images/home13.jpg'],
            ['name' => 'GOLD OCEAN', 'city' => 'DaLat', 'price' => 720000, 'image_path' => 'images/home14.jpg'],
            ['name' => 'GOLD SWEET', 'city' => 'DaLat', 'price' => 800000, 'image_path' => 'images/home15.jpg'],
        ]);
    }
}
