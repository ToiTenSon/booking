
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

window.addEventListener('scroll', function () {
    const header = document.querySelector('.main-nav');
    if (window.scrollY > 100) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
});
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
window.addEventListener('DOMContentLoaded', () => {
    let currentSlide = 0;
    const slides = document.querySelectorAll('.testimonial-slide');
    const dots = document.querySelectorAll('.dot');

    function showSlide(index) {
      slides.forEach((slide, i) => {
        slide.classList.remove('active');
        dots[i].classList.remove('active');
      });

      slides[index].classList.add('active');
      dots[index].classList.add('active');
      currentSlide = index;
    }

    // Bắt sự kiện click vào dot
    dots.forEach((dot, index) => {
      dot.addEventListener('click', () => showSlide(index));
    });

    // Tự động chuyển slide mỗi 5 giây
    setInterval(() => {
      let nextSlide = (currentSlide + 1) % slides.length;
      showSlide(nextSlide);
    }, 5000);
  });

  window.addEventListener('DOMContentLoaded', () => {
    const ratings = document.querySelectorAll('.testimonial-rating');

    ratings.forEach(el => {
      const rating = parseFloat(el.getAttribute('data-rating'));
      let full = Math.floor(rating);
      let half = rating % 1 >= 0.5 ? 1 : 0;
      let empty = 5 - full - half;

      let stars = '';
      for (let i = 0; i < full; i++) stars += '<i class="fas fa-star"></i>';
      if (half) stars += '<i class="fas fa-star-half-alt"></i>';
      for (let i = 0; i < empty; i++) stars += '<i class="far fa-star"></i>';

      el.innerHTML = stars;
    });
  });

   // Biến toàn cục
   let currentSlide = 0;
   let slides, dots;
 
   // Hàm show slide theo index
   function showSlide(index) {
     slides.forEach((slide, i) => {
       slide.classList.remove('active');
       dots[i].classList.remove('active');
     });
 
     slides[index].classList.add('active');
     dots[index].classList.add('active');
     currentSlide = index;
   }
 
   // Hàm lùi slide
   function prevSlide() {
     let prev = (currentSlide - 1 + slides.length) % slides.length;
     showSlide(prev);
   }
 
   // Hàm tiến slide
   function nextSlide() {
     let next = (currentSlide + 1) % slides.length;
     showSlide(next);
   }
 
   // Khởi tạo sau khi DOM sẵn sàng
   window.addEventListener('DOMContentLoaded', () => {
     slides = document.querySelectorAll('.testimonial-slide');
     dots = document.querySelectorAll('.dot');
 
     // Gắn sự kiện cho các dot (nếu không dùng onclick trong HTML)
     dots.forEach((dot, index) => {
       dot.addEventListener('click', () => showSlide(index));
     });
 
     // Tự động chuyển slide sau mỗi 5 giây
     setInterval(() => {
       let next = (currentSlide + 1) % slides.length;
       showSlide(next);
     }, 5000);
   });
 
   // Gắn vào window để onclick trong HTML gọi được
   window.showSlide = showSlide;
   window.prevSlide = prevSlide;
   window.nextSlide = nextSlide;