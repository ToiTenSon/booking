<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('rooms', function (Blueprint $table) {
        $table->id();
        $table->string('name');           // Tên phòng, ví dụ "DELUXE SKY"
        $table->string('city');           // Thành phố, ví dụ "Hanoi"
        $table->integer('price');         // Giá phòng (đơn vị: VNĐ)
        $table->string('image_path');     // Đường dẫn ảnh (ví dụ 'images/home1.jpg')
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
