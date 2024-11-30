document.addEventListener('DOMContentLoaded', function() {
    var swiper = new Swiper('.swiper-container', {
        loop: true,
        autoplay: {
            delay: 3000, // Auto slide every 3 seconds
            disableOnInteraction: false, // Continue auto-sliding after user interaction
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            // when window width is >= 640px
            640: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            // when window width is >= 768px
            768: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            // when window width is >= 1024px
            1024: {
                slidesPerView: 1,
                spaceBetween: 30
            }
        }
    });
});