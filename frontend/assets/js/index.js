


/*Testominal Swipper */
var swiperWrapper = document.querySelector('#swaper-wrapper-testominals');
for (let testominal of testominalData) {
    swiperWrapper.innerHTML += `<div class="swiper-slide">
    <div class="testominalBox">
        <div class="content-container">
            <div class="quote">
                <img src="./frontend/assets/images/testominals-images/quote.svg" alt="quote-svg">
            </div>
            <div class="content">
                ${testominal.content}
            </div>
        </div>
        <div class="profile">
            <div class="profile-img">
                <img src="${testominal.img}"
                    alt="prfole.img">
            </div>
            <div class="profile-info">
                <span class="name">${testominal.name}</span>
                <span class="stars">
                    <img src="./frontend/assets/images/testominals-images/star.svg" alt="">
                    <img src="./frontend/assets/images/testominals-images/star.svg" alt="">
                    <img src="./frontend/assets/images/testominals-images/star.svg" alt="">
                    <img src="./frontend/assets/images/testominals-images/star.svg" alt="">
                    <img src="./frontend/assets/images/testominals-images/star.svg" alt="">
                </span>
            </div>
        </div>
    </div>
</div>`
}
var swiperTestominals = new Swiper("#testominalSwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 2,
        slideShadows: true,
    },
    pagination: {
        el: "#swiper-testominal-pagination",
    },
    loop: true
});

var swiperImage = new Swiper("#swiper-image", {
    pagination: {
        el: "#swiper-pagination-image",
        dynamicBullets: true,
    },
});
var swiperAutoparts = new Swiper('#autoparts-swipper', {
    slidesPerView: 1,
    spaceBetween: 30,

    pagination: {
        el: '.swiper-pagination',
        type: 'fraction',
    },

    navigation: {
        nextEl: '#swipper-button-next-autoparts',
        prevEl: '#swipper-button-prev-autoparts',
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 50,
        },
    },

});
var swiperAutoborsa = new Swiper('#autoborsa-swipper', {
    slidesPerView: 1,
    spaceBetween: 30,
    autoplay: {
        delay: 1700,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        type: 'fraction',
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 50,
        },
    },

});





