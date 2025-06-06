<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Quản trị khách sạn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/Admin.css') }}">
</head>

<body>
    <div class="d-flex" style="min-height: 100vh;">

        <!-- MENU TRÁI -->
        <div class="bg-dark text-white p-3" style="min-width: 220px;">
            <!-- Thông tin người dùng -->
         <!-- Thông tin người dùng -->
<div class="d-flex align-items-center mb-3 user-info">
    <img src="{{ asset('images/beach.jpg') }}" class="avatar me-2">
    <div>
        <div class="fw-bold">Welcome,</div>
        <div>{{ Auth::user()->name ?? 'Admin' }}</div>
    </div>
</div>

            <h5 class="text-center">Khách sạn</h5>
            <hr>
            <ul class="nav flex-column">
            <a href="{{ route('thongke') }}" class="nav-link text-white">📊 Thống kê</a>

                <li class="nav-item"><a href="{{ route('booking.index') }}" class="nav-link text-white">🛏️ Đặt phòng</a></li>
                <li class="nav-item"><a href="{{ route('posts.index') }}" class="nav-link text-white">📰 Bài viết</a></li>
                <li class="nav-item"><a href="{{ route('rooms.index') }}" class="nav-link text-white">🏨 Quản lý phòng</a></li>
                <li class="nav-item"><a href="{{ route('settings') }}" class="nav-link text-white">⚙️ Cài đặt</a></li>
                <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link text-white">🚪 Đăng xuất</a></li>
            </ul>
        </div>


        <!-- NỘI DUNG BÊN PHẢI -->
        <div class="flex-grow-1 p-4">
            @yield('content')
        </div>

    </div>
</body>

</html>