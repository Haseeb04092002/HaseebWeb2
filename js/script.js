document.addEventListener("DOMContentLoaded", function () {
  const swiper = new Swiper('.slider-wrapper-projects', {
    loop: true,
    grabCursor: true,
    spaceBetween: 30,
    autoplay: {
      delay: 1500,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination-projects',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next-projects',
      prevEl: '.swiper-button-prev-projects',
    },
    breakpoints: {
      0: {
        slidesPerView: 1
      },
      768: {
        slidesPerView: 2
      },
      1024: {
        slidesPerView: 3
      }
    }
  });
});
