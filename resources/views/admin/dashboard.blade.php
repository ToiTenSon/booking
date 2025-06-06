<!-- resources/views/admin/dashboard.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Trang quản trị</title>
</head>
<body>
    <h1>Chào quản trị viên {{ Auth::user()->name }}!</h1>
    <p>Đây là khu vực quản lý dành riêng cho admin.</p>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Đăng xuất</button>
    </form>
</body>
</html>
