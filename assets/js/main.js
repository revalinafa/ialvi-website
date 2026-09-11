document.addEventListener("DOMContentLoaded", function () {
  var toggle = document.getElementById("navToggle");
  var menu = document.getElementById("navMenu");

  if (toggle && menu) {
    toggle.addEventListener("click", function () {
      menu.classList.toggle("is-open");
    });
  }
});
/* ---------- Hero Image Slider (Home) ---------- */
document.addEventListener("DOMContentLoaded", function () {
  var slider = document.getElementById("heroSlider");
  if (!slider) return; // slider hanya ada di index.php, aman untuk halaman lain

  var track = document.getElementById("heroSliderTrack");
  var slides = track.querySelectorAll(".hero-slider__slide");
  var dotsWrap = document.getElementById("heroSliderDots");
  var prevBtn = document.getElementById("heroSliderPrev");
  var nextBtn = document.getElementById("heroSliderNext");

  var current = 0;
  var total = slides.length;

  // Buat dot navigasi sesuai jumlah slide
  slides.forEach(function (_, index) {
    var dot = document.createElement("button");
    dot.className = "hero-slider__dot" + (index === 0 ? " is-active" : "");
    dot.setAttribute("aria-label", "Go to slide " + (index + 1));
    dot.addEventListener("click", function () {
      goToSlide(index);
    });
    dotsWrap.appendChild(dot);
  });

  var dots = dotsWrap.querySelectorAll(".hero-slider__dot");

  function goToSlide(index) {
    current = (index + total) % total;
    track.style.transform = "translateX(-" + current * 100 + "%)";
    dots.forEach(function (dot, i) {
      dot.classList.toggle("is-active", i === current);
    });
  }

  prevBtn.addEventListener("click", function () {
    goToSlide(current - 1);
  });
  nextBtn.addEventListener("click", function () {
    goToSlide(current + 1);
  });

  // Auto-play setiap 6 detik
  var autoplay = setInterval(function () {
    goToSlide(current + 1);
  }, 6000);

  // Pause autoplay saat pengunjung interaksi manual
  [prevBtn, nextBtn].forEach(function (btn) {
    btn.addEventListener("click", function () {
      clearInterval(autoplay);
      autoplay = setInterval(function () {
        goToSlide(current + 1);
      }, 6000);
    });
  });
});
