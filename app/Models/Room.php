<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    // Nếu bạn dùng fillable, có thể thêm:
    // protected $fillable = ['name', 'city', 'price', 'image_path', 'describe'];

    public function images()
    {
        return $this->hasMany(RoomImage::class);
    }
}
