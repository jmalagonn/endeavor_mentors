function featured_allies(){
    let swipwer = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: true,
        breakpoints: {
            425: {
                slidesPerView: 2,
            },
            650: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 5,
                spaceBetween: 48,
            },
            1440: {
                slidesPerView: 6
            }
        },
        autoplay: {
            delay: 5000,
        }
    });
};

featured_allies();
