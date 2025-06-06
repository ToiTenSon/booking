<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomImageSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];

        for ($roomId = 1; $roomId <= 15; $roomId++) {
            for ($i = 1; $i <= 3; $i++) {
                $data[] = [
                    'room_id' => $roomId,
                    'image_path' => "images/phong{$roomId}_{$i}.jpg",
                ];
            }
        }

        DB::table('room_images')->insert($data);
    }
}
