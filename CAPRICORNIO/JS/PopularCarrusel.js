var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 10,  
    grabCursor: true,
    loop: true,
    breakpoints: {
        768: {  
            slidesPerView: 2,
            spaceBetween: 15 
        },
        1024: {  
            slidesPerView: 4,
            spaceBetween: 10 
        }
    }
});