const swiper = new Swiper('.swiper', {
  slidesPerView: 4, // Número de slides visibles
  spaceBetween: 10, // Espacio entre slides
  navigation: {
    nextEl: '.swiper-button-next',  // Flecha derecha
    prevEl: '.swiper-button-prev',  // Flecha izquierda
  },
  loop: false, // Desactivar el bucle para no volver al final desde el inicio
  allowSlidePrev: true,  // Permitir movimiento hacia la izquierda
});

