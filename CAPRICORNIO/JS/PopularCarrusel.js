const swiper = new Swiper('.swiper', {
  slidesPerView: 4, // Número de slides visibles
  spaceBetween: 10, // Espacio entre slides
  navigation: {
    nextEl: '.custom-next',  // Flecha derecha
    prevEl: '.custom-prev',  // Flecha izquierda
  },
  loop: false, // Desactivar el bucle para no volver al final desde el inicio
  allowSlidePrev: true,  // Permitir movimiento hacia la izquierda
  on: {
    slideChange: function () {
      // Verificar si hay más posters a la derecha
      if (this.isEnd) {
        // Oscurecer la flecha derecha
        const nextButton = document.querySelector('.custom-next');
        nextButton.classList.add('disabled'); // Clase para oscurecer
      } else {
        // Restaurar la flecha derecha
        const nextButton = document.querySelector('.custom-next');
        nextButton.classList.remove('disabled');
      }

      // Verificar si hay más posters a la izquierda
      if (this.isBeginning) {
        // Oscurecer la flecha izquierda
        const prevButton = document.querySelector('.custom-prev');
        prevButton.classList.add('disabled'); // Clase para oscurecer
      } else {
        // Restaurar la flecha izquierda
        const prevButton = document.querySelector('.custom-prev');
        prevButton.classList.remove('disabled');
      }
    },
  },
});

