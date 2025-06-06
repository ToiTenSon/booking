<h2>Vui lòng xác minh email</h2>
<p>Chúng tôi đã gửi link xác minh tới email của bạn.</p>

<form method="POST" action="{{ route('verification.send') }}">
    @csrf
    <button type="submit">Gửi lại email xác minh</button>
</form>

@if (session('message'))
    <p style="color:green;">{{ session('message') }}</p>
@endif
