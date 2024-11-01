//Acción

document.addEventListener("DOMContentLoaded", () => {
    const loadMoreButton = document.getElementById("load-more-2");
    let isShowingMore = false; // Variable para rastrear el estado del botón
    let lastOffset = 4; // Último offset para la lógica de mostrar más
    let totalLoaded = 4; // Total de películas cargadas inicialmente

    loadMoreButton.addEventListener("click", function () {
        const category = "1"; // Cambia esto según tu lógica de categorías

        if (!isShowingMore) {
            // Mostrar más películas
            fetch(`../Controlador/load_more.php?category=${category}&offset=${lastOffset}`)
                .then((response) => response.text())
                .then((data) => {
                    const movieTable = document.querySelector(`.tbl_Accion`);
                    movieTable.innerHTML += data; // Añadir películas

                    lastOffset += 4; // Actualizar el offset
                    totalLoaded += 4; // Incrementar total cargado
                    this.textContent = "Mostrar menos"; // Cambiar el texto del botón
                    isShowingMore = true; // Cambiar el estado a mostrar más
                })
                .catch((error) => console.error("Error al cargar más:", error));
        } else {
            // Ocultar las últimas 4 películas añadidas
            const movieTable = document.querySelector(`.tbl_Accion`);
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

//Fantasia

document.addEventListener("DOMContentLoaded", () => {
    const loadMoreButton2 = document.getElementById("load-more-9");
    let isShowingMore2 = false; // Variable para rastrear el estado del botón
    let lastOffset2 = 4; // Último offset para la lógica de mostrar más
    let totalLoaded2 = 4; // Total de películas cargadas inicialmente

    loadMoreButton2.addEventListener("click", function () {
        const category = "8"; // Cambia esto según tu lógica de categorías

        if (!isShowingMore2) {
            // Mostrar más películas
            fetch(`../Controlador/load_more.php?category=${category}&offset=${lastOffset2}`)
                .then((response) => response.text())
                .then((data) => {
                    const movieTable2 = document.querySelector(`.tbl_Fantasia`);
                    movieTable2.innerHTML += data; // Añadir películas

                    lastOffset2 += 4; // Actualizar el offset
                    totalLoaded2 += 4; // Incrementar total cargado
                    this.textContent = "Mostrar menos"; // Cambiar el texto del botón
                    isShowingMore2 = true; // Cambiar el estado a mostrar más
                })
                .catch((error) => console.error("Error al cargar más:", error));
        } else {
            // Ocultar las últimas 4 películas añadidas
            const movieTable2 = document.querySelector(`.tbl_Fantasia`);
            const allMovies2 = movieTable2.querySelectorAll("td"); // Seleccionar todas las celdas

            // Obtener las últimas 4 celdas añadidas
            const moviesToHide2 = Array.from(allMovies2).slice(-4); // Obtener las últimas 4 películas

            moviesToHide2.forEach(movie => movie.parentElement.remove()); // Eliminar esas celdas (filas completas)

            totalLoaded2 -= 4; // Decrementar total cargado
            lastOffset2 -= 4; // Decrementar el offset para las próximas cargas

            // Comprobar si ya no hay más películas
            if (totalLoaded2 <= 4) {
                this.textContent = "Mostrar más"; // Cambiar el texto de nuevo
                isShowingMore2 = false; // Cambiar el estado a no mostrar más
            } else {
                this.textContent = "Mostrar más"; // Cambiar el texto a "Cargar más"
            }
        }
    });
});


//Catastrofe

document.addEventListener("DOMContentLoaded", () => {
    const loadMoreButton3 = document.getElementById("load-more-1");
    let isShowingMore3 = false; // Variable para rastrear el estado del botón
    let lastOffset3 = 4; // Último offset para la lógica de mostrar más
    let totalLoaded3 = 4; // Total de películas cargadas inicialmente

    loadMoreButton3.addEventListener("click", function () {
        const category = "3"; // Cambia esto según tu lógica de categorías

        if (!isShowingMore3) {
            // Mostrar más películas
            fetch(`../Controlador/load_more.php?category=${category}&offset=${lastOffset3}`)
                .then((response) => response.text())
                .then((data) => {
                    const movieTable3 = document.querySelector(`.tbl_Catastrofes`);
                    movieTable3.innerHTML += data; // Añadir películas

                    lastOffset3 += 4; // Actualizar el offset
                    totalLoaded3 += 4; // Incrementar total cargado
                    this.textContent = "Mostrar menos"; // Cambiar el texto del botón
                    isShowingMore3 = true; // Cambiar el estado a mostrar más
                })
                .catch((error) => console.error("Error al cargar más:", error));
        } else {
            // Ocultar las últimas 4 películas añadidas
            const movieTable3 = document.querySelector(`.tbl_Catastrofes`);
            const allMovies3 = movieTable3.querySelectorAll("td"); // Seleccionar todas las celdas

            // Obtener las últimas 4 celdas añadidas
            const moviesToHide3 = Array.from(allMovies3).slice(-4); // Obtener las últimas 4 películas

            moviesToHide3.forEach(movie => movie.parentElement.remove()); // Eliminar esas celdas (filas completas)

            totalLoaded3 -= 4; // Decrementar total cargado
            lastOffset3 -= 4; // Decrementar el offset para las próximas cargas

            // Comprobar si ya no hay más películas
            if (totalLoaded3 <= 4) {
                this.textContent = "Mostrar más"; // Cambiar el texto de nuevo
                isShowingMore3 = false; // Cambiar el estado a no mostrar más
            } else {
                this.textContent = "Mostrar más"; // Cambiar el texto a "Cargar más"
            }
        }
    });
});


//Anime

document.addEventListener("DOMContentLoaded", () => {
    const loadMoreButton4 = document.getElementById("load-more-3");
    let isShowingMore4 = false; // Variable para rastrear el estado del botón
    let lastOffset4 = 4; // Último offset para la lógica de mostrar más
    let totalLoaded4 = 4; // Total de películas cargadas inicialmente

    loadMoreButton4.addEventListener("click", function () {
        const category = "11"; // Cambia esto según tu lógica de categorías

        if (!isShowingMore4) {
            // Mostrar más películas
            fetch(`../Controlador/load_more.php?category=${category}&offset=${lastOffset4}`)
                .then((response) => response.text())
                .then((data) => {
                    const movieTable4 = document.querySelector(`.tbl_Anime`);
                    movieTable4.innerHTML += data; // Añadir películas

                    lastOffset4 += 4; // Actualizar el offset
                    totalLoaded4 += 4; // Incrementar total cargado
                    this.textContent = "Mostrar menos"; // Cambiar el texto del botón
                    isShowingMore4 = true; // Cambiar el estado a mostrar más
                })
                .catch((error) => console.error("Error al cargar más:", error));
        } else {
            // Ocultar las últimas 4 películas añadidas
            const movieTable4 = document.querySelector(`.tbl_Anime`);
            const allMovies4 = movieTable4.querySelectorAll("td"); // Seleccionar todas las celdas

            // Obtener las últimas 4 celdas añadidas
            const moviesToHide4 = Array.from(allMovies4).slice(-4); // Obtener las últimas 4 películas

            moviesToHide4.forEach(movie => movie.parentElement.remove()); // Eliminar esas celdas (filas completas)

            totalLoaded4 -= 4; // Decrementar total cargado
            lastOffset4 -= 4; // Decrementar el offset para las próximas cargas

            // Comprobar si ya no hay más películas
            if (totalLoaded4 <= 4) {
                this.textContent = "Mostrar más"; // Cambiar el texto de nuevo
                isShowingMore4 = false; // Cambiar el estado a no mostrar más
            } else {
                this.textContent = "Mostrar más"; // Cambiar el texto a "Cargar más"
            }
        }
    });
});


//Terror

document.addEventListener("DOMContentLoaded", () => {
    const loadMoreButton5 = document.getElementById("load-more-4");
    let isShowingMore5 = false; // Variable para rastrear el estado del botón
    let lastOffset5 = 4; // Último offset para la lógica de mostrar más
    let totalLoaded5 = 4; // Total de películas cargadas inicialmente

    loadMoreButton5.addEventListener("click", function () {
        const category = "9"; // Cambia esto según tu lógica de categorías

        if (!isShowingMore5) {
            // Mostrar más películas
            fetch(`../Controlador/load_more.php?category=${category}&offset=${lastOffset5}`)
                .then((response) => response.text())
                .then((data) => {
                    const movieTable5 = document.querySelector(`.tbl_Terror`);
                    movieTable5.innerHTML += data; // Añadir películas

                    lastOffset5 += 4; // Actualizar el offset
                    totalLoaded5 += 4; // Incrementar total cargado
                    this.textContent = "Mostrar menos"; // Cambiar el texto del botón
                    isShowingMore5 = true; // Cambiar el estado a mostrar más
                })
                .catch((error) => console.error("Error al cargar más:", error));
        } else {
            // Ocultar las últimas 4 películas añadidas
            const movieTable5 = document.querySelector(`.tbl_Terror`);
            const allMovies5 = movieTable5.querySelectorAll("td"); // Seleccionar todas las celdas

            // Obtener las últimas 4 celdas añadidas
            const moviesToHide5 = Array.from(allMovies5).slice(-4); // Obtener las últimas 4 películas

            moviesToHide5.forEach(movie => movie.parentElement.remove()); // Eliminar esas celdas (filas completas)

            totalLoaded5 -= 4; // Decrementar total cargado
            lastOffset5 -= 4; // Decrementar el offset para las próximas cargas

            // Comprobar si ya no hay más películas
            if (totalLoaded5 <= 4) {
                this.textContent = "Mostrar más"; // Cambiar el texto de nuevo
                isShowingMore5 = false; // Cambiar el estado a no mostrar más
            } else {
                this.textContent = "Mostrar más"; // Cambiar el texto a "Cargar más"
            }
        }
    });
});


//Ciencia Ficción

document.addEventListener("DOMContentLoaded", () => {
    const loadMoreButton6 = document.getElementById("load-more-5");
    let isShowingMore6 = false; // Variable para rastrear el estado del botón
    let lastOffset6 = 4; // Último offset para la lógica de mostrar más
    let totalLoaded6 = 4; // Total de películas cargadas inicialmente

    loadMoreButton6.addEventListener("click", function () {
        const category = "4"; // Cambia esto según tu lógica de categorías

        if (!isShowingMore6) {
            // Mostrar más películas
            fetch(`../Controlador/load_more.php?category=${category}&offset=${lastOffset6}`)
                .then((response) => response.text())
                .then((data) => {
                    const movieTable6 = document.querySelector(`.tbl_Ficcion`);
                    movieTable6.innerHTML += data; // Añadir películas

                    lastOffset6 += 4; // Actualizar el offset
                    totalLoaded6 += 4; // Incrementar total cargado
                    this.textContent = "Mostrar menos"; // Cambiar el texto del botón
                    isShowingMore6 = true; // Cambiar el estado a mostrar más
                })
                .catch((error) => console.error("Error al cargar más:", error));
        } else {
            // Ocultar las últimas 4 películas añadidas
            const movieTable6 = document.querySelector(`.tbl_Ficcion`);
            const allMovies6 = movieTable6.querySelectorAll("td"); // Seleccionar todas las celdas

            // Obtener las últimas 4 celdas añadidas
            const moviesToHide6 = Array.from(allMovies6).slice(-4); // Obtener las últimas 4 películas

            moviesToHide6.forEach(movie => movie.parentElement.remove()); // Eliminar esas celdas (filas completas)

            totalLoaded6 -= 4; // Decrementar total cargado
            lastOffset6 -= 4; // Decrementar el offset para las próximas cargas

            // Comprobar si ya no hay más películas
            if (totalLoaded6 <= 4) {
                this.textContent = "Mostrar más"; // Cambiar el texto de nuevo
                isShowingMore6 = false; // Cambiar el estado a no mostrar más
            } else {
                this.textContent = "Mostrar más"; // Cambiar el texto a "Cargar más"
            }
        }
    });
});

