//Fantasia
document.addEventListener("DOMContentLoaded", () => {
    const loadMoreButton = document.getElementById("load-more-9");
    let isShowingMore = false; // Variable para rastrear el estado del botón
    let lastOffset = 4; // Último offset para la lógica de mostrar más
    let totalLoaded = 4; // Total de películas cargadas inicialmente

    loadMoreButton.addEventListener("click", function () {
        const category = "8"; // Cambia esto según tu lógica de categorías

        if (!isShowingMore) {
            // Mostrar más películas
            fetch(`../Controlador/load_more.php?category=${category}&offset=${lastOffset}`)
                .then((response) => response.text())
                .then((data) => {
                    const movieTable = document.querySelector(`.tbl_Fantasia`);
                    movieTable.innerHTML += data; // Añadir películas

                    lastOffset += 4; // Actualizar el offset
                    totalLoaded += 4; // Incrementar total cargado
                    this.textContent = "Mostrar menos"; // Cambiar el texto del botón
                    isShowingMore = true; // Cambiar el estado a mostrar más
                })
                .catch((error) => console.error("Error al cargar más:", error));
        } else {
            // Ocultar las últimas 4 películas añadidas
            const movieTable = document.querySelector(`.tbl_Fantasia`);
            const allMovies = movieTable.querySelectorAll("td"); // Seleccionar todas las celdas

            // Obtener las últimas 4 celdas añadidas
            const moviesToHide = Array.from(allMovies).slice(-4); // Obtener las últimas 4 películas

            moviesToHide.forEach(movie => movie.parentElement.remove()); // Eliminar esas celdas (filas completas)

            totalLoaded -= 4; // Decrementar total cargado
            lastOffset -= 4; // Decrementar el offset para las próximas cargas

            // Comprobar si ya no hay más películas
            if (totalLoaded <= 4) {
                this.textContent = "Mostrar más"; // Cambiar el texto de nuevo
                isShowingMore = false; // Cambiar el estado a no mostrar más
            } else {
                this.textContent = "Mostrar más"; // Cambiar el texto a "Cargar más"
            }
        }
    });
});



