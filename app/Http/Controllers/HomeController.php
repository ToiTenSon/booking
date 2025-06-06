<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Trang chủ - hiển thị các phòng chia theo thành phố
    public function index()
    {
        // Lấy tất cả phòng có đầy đủ dữ liệu (image_path không null)
        $rooms = Room::whereNotNull('image_path')->get();

        // Truyền dữ liệu sang view
        return view('home', compact('rooms'));
    }

    // Trang chi tiết 1 phòng cụ thể theo ID


    public function show($id)
    {
        // Lấy phòng theo id, kèm ảnh
        $room = Room::with('images')->findOrFail($id);

        return view('rooms.detail', compact('room'));
    }
}
