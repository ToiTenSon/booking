<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomDescribeSeeder extends Seeder
{
    public function run()
    {
        // Cập nhật mô tả cho các phòng cụ thể, ví dụ phòng có id = 1, 2, 3
        $roomsData = [
            1 => 'Phòng thoáng mát, gần trung tâm, đầy đủ tiện nghi.',
            2 => 'Phòng rộng rãi, có ban công view thành phố.',
            3 => 'Phòng sạch sẽ, yên tĩnh, thích hợp cho học tập và làm việc.'
        ];

        foreach ($roomsData as $id => $describe) {
            $room = Room::find($id);
            if ($room) {
                $room->describe = $describe;
                $room->save();
            }
        }
    }
}
