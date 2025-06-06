<?php

namespace App\Http\Controllers;

use App\Models\Room;  // nhớ import model Room
use Illuminate\Http\Request;

class RoomController extends Controller
{
    // Hiển thị danh sách tất cả phòng
    public function index()
    {
        $rooms = Room::all();  // Lấy tất cả phòng

        return view('home', compact('rooms'));  // Truyền dữ liệu sang view home.blade.php
    }

    // Hiển thị chi tiết phòng theo id
    public function show($id)
    {
        $room = Room::findOrFail($id);  // Tìm phòng theo id hoặc báo lỗi 404 nếu không có

        return view('rooms.detail', compact('room'));  // Truyền phòng sang view rooms/detail.blade.php
    }
}
