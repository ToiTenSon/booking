<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Happy - Login với 3 cột ảnh</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/stylelogin.css') }}">

</head>
<body>

    <div class="left-panel">
    <!-- Cột 1 - trên xuống -->
        <div class="swiper-container" id="swiper1">
            <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="img/1.avif" alt="1" /></div>
            <div class="swiper-slide"><img src="img/2.avif" alt="2" /></div>
            <div class="swiper-slide"><img src="img/3.avif" alt="3" /></div>
            <div class="swiper-slide"><img src="img/4.avif" alt="4" /></div>
            <div class="swiper-slide"><img src="img/5.avif" alt="5" /></div>
            <div class="swiper-slide"><img src="img/6.avif" alt="6" /></div>
            <div class="swiper-slide"><img src="img/7.avif" alt="7" /></div>
            <div class="swiper-slide"><img src="img/8.avif" alt="8" /></div>
        </div>
    </div>

    <!-- Cột 2 - dưới lên -->
    <div class="swiper-container reverse" id="swiper2">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="img/a.avif" alt="a" /></div>
            <div class="swiper-slide"><img src="img/b.avif" alt="b" /></div>
            <div class="swiper-slide"><img src="img/c.avif" alt="c" /></div>
            <div class="swiper-slide"><img src="img/d.avif" alt="d" /></div>
            <div class="swiper-slide"><img src="img/e.avif" alt="e" /></div>
            <div class="swiper-slide"><img src="img/f.avif" alt="f" /></div>
            <div class="swiper-slide"><img src="img/g.avif" alt="g" /></div>
            <div class="swiper-slide"><img src="img/h.avif" alt="h" /></div>

        </div>
    </div>

    <!-- Cột 3 - trên xuống -->
    <div class="swiper-container" id="swiper3">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="img/11.avif" alt="11" /></div>
            <div class="swiper-slide"><img src="img/12.avif" alt="12" /></div>
            <div class="swiper-slide"><img src="img/13.avif" alt="13" /></div>
            <div class="swiper-slide"><img src="img/14.avif" alt="14" /></div>
            <div class="swiper-slide"><img src="img/15.avif" alt="15" /></div>
            <div class="swiper-slide"><img src="img/16.avif" alt="16" /></div>
            <div class="swiper-slide"><img src="img/17.avif" alt="17" /></div>
            <div class="swiper-slide"><img src="img/18.avif" alt="18" /></div>

        </div>
    </div>
  </div>

  <div class="right-panel">
    <div class="login-box">
        <h1 class="logo-name" style="font-family: 'Georgia', serif; font-size: 48px; color: #007bff;">Happy</h1>
        <h3>Chào mừng đến với Happy</h3>
        <p>Mỗi hành trình là một câu chuyện<br>Hãy bắt đầu với chốn dừng chân tuyệt vời.</p>
<form id="loginForm" method="POST" action="{{ route('login') }}">
  @csrf
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

  <div class="mb-3">
    <input
      type="email"
      id="email"
      name="email"
      class="form-control @error('email') is-invalid @enderror"
      placeholder="Username"
      value="{{ old('email') }}"
    />
    @error('email')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>

  <div class="mb-3">
    <input
      type="password"
      id="password"
      name="password"
      class="form-control @error('password') is-invalid @enderror"
      placeholder="Password"
    />
    @error('password')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>

  <button type="submit" class="btn btn-primary w-100 mb-3">Login</button>

<a href="{{ route('password.request') }}"><small>Forgot password?</small></a>

  <p class="text-muted mt-3"><small>Do not have an account?</small></p>

<a class="btn btn-sm btn-outline-primary w-100" href="{{ route('register') }}">Create an account</a>
</form>

{{-- Nếu có lỗi chung (ví dụ lỗi xác thực sai) --}}
@if ($errors->has('login'))
  <div class="alert alert-danger mt-2">
    {{ $errors->first('login') }}
  </div>
@endif

    </div>
  </div>

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Bootstrap JS (nếu cần) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    const commonConfig = {
      direction: 'vertical',
      slidesPerView: 3,
      spaceBetween: 10,
      loop: true,
      autoplay: {
        delay: 0,
        disableOnInteraction: false,
      },
      speed: 5000,
      allowTouchMove: false ,
    };

    new Swiper('#swiper1', commonConfig);
    new Swiper('#swiper2', commonConfig);
    new Swiper('#swiper3', commonConfig);
  </script>

<script>
document.getElementById('loginForm').addEventListener('submit', function(e) {
  const email = document.getElementById('email').value.trim();
  const password = document.getElementById('password').value.trim();
  const errorBox = document.getElementById('formErrors');

  let errors = [];

  if (!email) {
    errors.push("Vui lòng nhập email.");
  }

  if (!password) {
    errors.push("Vui lòng nhập mật khẩu.");
  }

  if (errors.length > 0) {
    e.preventDefault(); // Ngăn form gửi đi
    errorBox.innerHTML = errors.join("<br>");
    errorBox.style.display = "block";
  } else {
    errorBox.style.display = "none"; // Ẩn nếu không có lỗi
  }
});
</script>

</body>
</html>
