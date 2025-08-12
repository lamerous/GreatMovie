document.addEventListener('DOMContentLoaded', function() {
    new Swiper('.promo-slider', {
        autoplay: {
            delay: 5000,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        centeredSlides: true,
        slidesPerView: 1.7,
        loop: true,
        loopedSlides: 2,
        loopAdditionalSlides: 1,
        speed: 600,
    });
});