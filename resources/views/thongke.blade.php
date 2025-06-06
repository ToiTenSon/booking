@extends('admin')

@section('content')
    <h1 class="mb-4">📊 Trang thống kê</h1>

    <div class="row">
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Tổng số phòng</div>
                <div class="card-body">
                    <h5 class="card-title">120</h5>
                    <p class="card-text">Phòng đang có trong hệ thống.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Đặt phòng hôm nay</div>
                <div class="card-body">
                    <h5 class="card-title">35</h5>
                    <p class="card-text">Số lượt đặt phòng trong ngày.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-warning mb-3">
                <div class="card-header">Khách hiện tại</div>
                <div class="card-body">
                    <h5 class="card-title">87</h5>
                    <p class="card-text">Khách đang lưu trú tại khách sạn.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
