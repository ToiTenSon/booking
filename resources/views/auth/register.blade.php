<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy - Register</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f2f2f2;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .register-box {
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .logo-name {
            font-family: 'Georgia', serif;
            font-size: 48px;
            color: #007bff;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="register-box">
    <h1 class="logo-name">Happy</h1>
    <h3>Chào mừng bạn đến với Happy</h3>
    <p>Hãy tạo tài khoản để bắt đầu hành trình mới.</p>

    @if ($errors->any())
        <div class="alert alert-danger text-start">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mb-3 text-start">
            <input type="text" name="name" class="form-control" placeholder="Full Name" value="{{ old('name') }}" required autofocus>
        </div>

        <div class="mb-3 text-start">
            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required>
        </div>

        <div class="mb-3 text-start">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>

        <div class="mb-3 text-start">
            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
        </div>

        <button type="submit" class="btn btn-primary w-100 mb-3">Register</button>

        <p class="text-muted">Already have an account?</p>
        <a href="{{ route('login') }}" class="btn btn-outline-primary w-100">Login</a>
    </form>
</div>

</body>
</html>
