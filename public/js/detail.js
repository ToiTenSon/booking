window.addEventListener('DOMContentLoaded', () => {
    const checkinInput = document.getElementById('checkin-date');
    const checkoutInput = document.getElementById('checkout-date');
    const confirmCheckin = document.getElementById('confirm-checkin');
    const confirmCheckout = document.getElementById('confirm-checkout');

    // Khởi tạo flatpickr cho ngày đến
    const fpCheckin = flatpickr(checkinInput, {
        minDate: "today",
        dateFormat: "Y-m-d",
        onChange: function(selectedDates, dateStr, instance) {
            confirmCheckin.style.display = "inline-block";
        }
    });

    // Khởi tạo flatpickr cho ngày đi
    const fpCheckout = flatpickr(checkoutInput, {
        minDate: new Date().fp_incr(1), // ngày mai
        dateFormat: "Y-m-d",
        onChange: function(selectedDates, dateStr, instance) {
            confirmCheckout.style.display = "inline-block";
        }
    });

    // Khi nhấn nút xác nhận ngày đến
    confirmCheckin.addEventListener('click', () => {
        const selectedDate = checkinInput.value;
        if (!selectedDate) return alert("Vui lòng chọn ngày đến!");
        // Cập nhật min ngày đi = ngày đến + 1
        const nextDay = new Date(selectedDate);
        nextDay.setDate(nextDay.getDate() + 1);
        fpCheckout.set('minDate', nextDay);
        // Ẩn nút chọn
        confirmCheckin.style.display = "none";
    });

    // Khi nhấn nút xác nhận ngày đi
    confirmCheckout.addEventListener('click', () => {
        const selectedDate = checkoutInput.value;
        if (!selectedDate) return alert("Vui lòng chọn ngày đi!");
        confirmCheckout.style.display = "none";

    });
});