<!DOCTYPE html>
<html>

<head>
    <title>Chi tiết phòng {{ $room->name }}</title>
    <link rel="stylesheet" href="{{ asset('css/room.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="{{ asset('js/detail.js') }}" defer></script>
</head>

<body>

    <div class="flex-container">
        <!-- THÔNG TIN PHÒNG -->
        <div class="room-info">
            <h1>{{ $room->name }}</h1>
            <p>Thành phố: {{ $room->city }}</p>
            <p>Giá: {{ number_format($room->price, 0, ',', '.') }} đ / ngày</p>

            <h3>Ảnh phòng:</h3>
            <div class="image-gallery">
                @foreach ($room->images as $image)
                    <img src="{{ asset($image->image_path) }}" alt="Ảnh phòng {{ $room->name }}">
                @endforeach
            </div>

            <h3>Giới thiệu chi tiết:</h3>
            <p>{{ $room->describe ?? 'Chưa có mô tả chi tiết' }}</p>
        </div>

        <!-- ĐẶT PHÒNG -->
        <div class="booking-box">
            <h3>{{ number_format($room->price, 0, ',', '.') }}đ / NGÀY</h3>
            <div class="booking-field">
                <label>NGÀY ĐẾN</label>
                <input type="text" id="checkin-date" placeholder="Chọn ngày đến" readonly>
            </div>

            <div class="booking-field">
                <label>NGÀY ĐI</label>
                <input type="text" id="checkout-date" placeholder="Chọn ngày đi" readonly>
            </div>

            <div id="nights">
                
            </div>
            <form action="{{ route('booking.store') }}" method="POST">
    @csrf
    <input type="hidden" name="room_id" value="{{ $room->id }}">
    <input type="hidden" name="checkin" id="checkin-input">
    <input type="hidden" name="checkout" id="checkout-input">

    <button type="submit" class="booking-btn">Đặt phòng</button>
</form>

        </div>
    </div>

</body>


</html>
