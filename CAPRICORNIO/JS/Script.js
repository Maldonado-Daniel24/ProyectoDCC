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


//Catastrofes

document.addEventListener("DOMContentLoaded", () => {
    const loadMoreButton7 = document.getElementById("load-more-1");
    let isShowingMore7 = false; // Variable para rastrear el estado del botón
    let lastOffset7 = 4; // Último offset para la lógica de mostrar más
    let totalLoaded7 = 4; // Total de películas cargadas inicialmente

    loadMoreButton7.addEventListener("click", function () {
        const category = "3"; // Cambia esto según tu lógica de categorías

        if (!isShowingMore7) {
            // Mostrar más películas
            fetch(`../Controlador/load_more.php?category=${category}&offset=${lastOffset7}`)
                .then((response) => response.text())
                .then((data) => {
                    const movieTable7 = document.querySelector(`.tbl_Catastrofes`);
                    movieTable7.innerHTML += data; // Añadir películas

                    lastOffset7 += 4; // Actualizar el offset
                    totalLoaded7 += 4; // Incrementar total cargado
                    this.textContent = "Mostrar menos"; // Cambiar el texto del botón
                    isShowingMore7 = true; // Cambiar el estado a mostrar más
                })
                .catch((error) => console.error("Error al cargar más:", error));
        } else {
            // Ocultar las últimas 4 películas añadidas
            const movieTable7 = document.querySelector(`.tbl_Catastrofes`);
            const allMovies7 = movieTable7.querySelectorAll("td"); // Seleccionar todas las celdas

            // Obtener las últimas 4 celdas añadidas
            const moviesToHide7 = Array.from(allMovies7).slice(-4); // Obtener las últimas 4 películas

            moviesToHide7.forEach(movie => movie.parentElement.remove()); // Eliminar esas celdas (filas completas)

            totalLoaded7 -= 4; // Decrementar total cargado
            lastOffset7 -= 4; // Decrementar el offset para las próximas cargas

            // Comprobar si ya no hay más películas
            if (totalLoaded7 <= 4) {
                this.textContent = "Mostrar más"; // Cambiar el texto de nuevo
                isShowingMore7 = false; // Cambiar el estado a no mostrar más
            } else {
                this.textContent = "Mostrar más"; // Cambiar el texto a "Cargar más"
            }
        }
    });
});


//Comedia

document.addEventListener("DOMContentLoaded", () => {
    const loadMoreButton8 = document.getElementById("load-more-6");
    let isShowingMore8 = false; // Variable para rastrear el estado del botón
    let lastOffset8 = 4; // Último offset para la lógica de mostrar más
    let totalLoaded8 = 4; // Total de películas cargadas inicialmente

    loadMoreButton8.addEventListener("click", function () {
        const category = "5"; // Cambia esto según tu lógica de categorías

        if (!isShowingMore8) {
            // Mostrar más películas
            fetch(`../Controlador/load_more.php?category=${category}&offset=${lastOffset8}`)
                .then((response) => response.text())
                .then((data) => {
                    const movieTable8 = document.querySelector(`.tbl_Comedia`);
                    movieTable8.innerHTML += data; // Añadir películas

                    lastOffset8 += 4; // Actualizar el offset
                    totalLoaded8 += 4; // Incrementar total cargado
                    this.textContent = "Mostrar menos"; // Cambiar el texto del botón
                    isShowingMore8 = true; // Cambiar el estado a mostrar más
                })
                .catch((error) => console.error("Error al cargar más:", error));
        } else {
            // Ocultar las últimas 4 películas añadidas
            const movieTable8 = document.querySelector(`.tbl_Comedia`);
            const allMovies8 = movieTable8.querySelectorAll("td"); // Seleccionar todas las celdas

            // Obtener las últimas 4 celdas añadidas
            const moviesToHide8 = Array.from(allMovies8).slice(-4); // Obtener las últimas 4 películas

            moviesToHide8.forEach(movie => movie.parentElement.remove()); // Eliminar esas celdas (filas completas)

            totalLoaded8 -= 4; // Decrementar total cargado
            lastOffset8 -= 4; // Decrementar el offset para las próximas cargas

            // Comprobar si ya no hay más películas
            if (totalLoaded8 <= 4) {
                this.textContent = "Mostrar más"; // Cambiar el texto de nuevo
                isShowingMore8 = false; // Cambiar el estado a no mostrar más
            } else {
                this.textContent = "Mostrar más"; // Cambiar el texto a "Cargar más"
            }
        }
    });
});


//Misterio

document.addEventListener("DOMContentLoaded", () => {
    const loadMoreButton9 = document.getElementById("load-more-7");
    let isShowingMore9 = false; // Variable para rastrear el estado del botón
    let lastOffset9 = 4; // Último offset para la lógica de mostrar más
    let totalLoaded9 = 4; // Total de películas cargadas inicialmente

    loadMoreButton9.addEventListener("click", function () {
        const category = "12"; // Cambia esto según tu lógica de categorías

        if (!isShowingMore9) {
            // Mostrar más películas
            fetch(`../Controlador/load_more.php?category=${category}&offset=${lastOffset9}`)
                .then((response) => response.text())
                .then((data) => {
                    const movieTable9 = document.querySelector(`.tbl_Misterio`);
                    movieTable9.innerHTML += data; // Añadir películas

                    lastOffset9 += 4; // Actualizar el offset
                    totalLoaded9 += 4; // Incrementar total cargado
                    this.textContent = "Mostrar menos"; // Cambiar el texto del botón
                    isShowingMore9 = true; // Cambiar el estado a mostrar más
                })
                .catch((error) => console.error("Error al cargar más:", error));
        } else {
            // Ocultar las últimas 4 películas añadidas
            const movieTable9 = document.querySelector(`.tbl_Misterio`);
            const allMovies9 = movieTable9.querySelectorAll("td"); // Seleccionar todas las celdas

            // Obtener las últimas 4 celdas añadidas
            const moviesToHide9 = Array.from(allMovies9).slice(-4); // Obtener las últimas 4 películas

            moviesToHide9.forEach(movie => movie.parentElement.remove()); // Eliminar esas celdas (filas completas)

            totalLoaded9 -= 4; // Decrementar total cargado
            lastOffset9 -= 4; // Decrementar el offset para las próximas cargas

            // Comprobar si ya no hay más películas
            if (totalLoaded9 <= 4) {
                this.textContent = "Mostrar más"; // Cambiar el texto de nuevo
                isShowingMore9 = false; // Cambiar el estado a no mostrar más
            } else {
                this.textContent = "Mostrar más"; // Cambiar el texto a "Cargar más"
            }
        }
    });
});


//Drama

document.addEventListener("DOMContentLoaded", () => {
    const loadMoreButton10 = document.getElementById("load-more-8");
    let isShowingMore10 = false; // Variable para rastrear el estado del botón
    let lastOffset10 = 4; // Último offset para la lógica de mostrar más
    let totalLoaded10 = 4; // Total de películas cargadas inicialmente

    loadMoreButton10.addEventListener("click", function () {
        const category = "7"; // Cambia esto según tu lógica de categorías

        if (!isShowingMore10) {
            // Mostrar más películas
            fetch(`../Controlador/load_more.php?category=${category}&offset=${lastOffset10}`)
                .then((response) => response.text())
                .then((data) => {
                    const movieTable10 = document.querySelector(`.tbl_Drama`);
                    movieTable10.innerHTML += data; // Añadir películas

                    lastOffset10 += 4; // Actualizar el offset
                    totalLoaded10 += 4; // Incrementar total cargado
                    this.textContent = "Mostrar menos"; // Cambiar el texto del botón
                    isShowingMore10 = true; // Cambiar el estado a mostrar más
                })
                .catch((error) => console.error("Error al cargar más:", error));
        } else {
            // Ocultar las últimas 4 películas añadidas
            const movieTable10 = document.querySelector(`.tbl_Drama`);
            const allMovies10 = movieTable10.querySelectorAll("td"); // Seleccionar todas las celdas

            // Obtener las últimas 4 celdas añadidas
            const moviesToHide10 = Array.from(allMovies10).slice(-4); // Obtener las últimas 4 películas

            moviesToHide10.forEach(movie => movie.parentElement.remove()); // Eliminar esas celdas (filas completas)

            totalLoaded10 -= 4; // Decrementar total cargado
            lastOffset10 -= 4; // Decrementar el offset para las próximas cargas

            // Comprobar si ya no hay más películas
            if (totalLoaded10 <= 4) {
                this.textContent = "Mostrar más"; // Cambiar el texto de nuevo
                isShowingMore10 = false; // Cambiar el estado a no mostrar más
            } else {
                this.textContent = "Mostrar más"; // Cambiar el texto a "Cargar más"
            }
        }
    });
});



//Fantasia

document.addEventListener("DOMContentLoaded", () => {
    const loadMoreButton11 = document.getElementById("load-more-9");
    let isShowingMore11 = false; // Variable para rastrear el estado del botón
    let lastOffset11 = 4; // Último offset para la lógica de mostrar más
    let totalLoaded11 = 4; // Total de películas cargadas inicialmente

    loadMoreButton11.addEventListener("click", function () {
        const category = "8"; // Cambia esto según tu lógica de categorías

        if (!isShowingMore11) {
            // Mostrar más películas
            fetch(`../Controlador/load_more.php?category=${category}&offset=${lastOffset11}`)
                .then((response) => response.text())
                .then((data) => {
                    const movieTable11 = document.querySelector(`.tbl_Fantasia`);
                    movieTable11.innerHTML += data; // Añadir películas

                    lastOffset11 += 4; // Actualizar el offset
                    totalLoaded11 += 4; // Incrementar total cargado
                    this.textContent = "Mostrar menos"; // Cambiar el texto del botón
                    isShowingMore11 = true; // Cambiar el estado a mostrar más
                })
                .catch((error) => console.error("Error al cargar más:", error));
        } else {
            // Ocultar las últimas 4 películas añadidas
            const movieTable11 = document.querySelector(`.tbl_Fantasia`);
            const allMovies11 = movieTable11.querySelectorAll("td"); // Seleccionar todas las celdas

            // Obtener las últimas 4 celdas añadidas
            const moviesToHide11 = Array.from(allMovies11).slice(-4); // Obtener las últimas 4 películas

            moviesToHide11.forEach(movie => movie.parentElement.remove()); // Eliminar esas celdas (filas completas)

            totalLoaded11 -= 4; // Decrementar total cargado
            lastOffset11 -= 4; // Decrementar el offset para las próximas cargas

            // Comprobar si ya no hay más películas
            if (totalLoaded11 <= 4) {
                this.textContent = "Mostrar más"; // Cambiar el texto de nuevo
                isShowingMore11 = false; // Cambiar el estado a no mostrar más
            } else {
                this.textContent = "Mostrar más"; // Cambiar el texto a "Cargar más"
            }
        }
    });
});


//Documentales

document.addEventListener("DOMContentLoaded", () => {
    const loadMoreButton12 = document.getElementById("load-more-10");
    let isShowingMore12 = false; // Variable para rastrear el estado del botón
    let lastOffset12 = 4; // Último offset para la lógica de mostrar más
    let totalLoaded12 = 4; // Total de películas cargadas inicialmente

    loadMoreButton12.addEventListener("click", function () {
        const category = "6"; // Cambia esto según tu lógica de categorías

        if (!isShowingMore12) {
            // Mostrar más películas
            fetch(`../Controlador/load_more.php?category=${category}&offset=${lastOffset12}`)
                .then((response) => response.text())
                .then((data) => {
                    const movieTable12 = document.querySelector(`.tbl_Documental`);
                    movieTable12.innerHTML += data; // Añadir películas

                    lastOffset12 += 4; // Actualizar el offset
                    totalLoaded12 += 4; // Incrementar total cargado
                    this.textContent = "Mostrar menos"; // Cambiar el texto del botón
                    isShowingMore12 = true; // Cambiar el estado a mostrar más
                })
                .catch((error) => console.error("Error al cargar más:", error));
        } else {
            // Ocultar las últimas 4 películas añadidas
            const movieTable12 = document.querySelector(`.tbl_Documental`);
            const allMovies12 = movieTable12.querySelectorAll("td"); // Seleccionar todas las celdas

            // Obtener las últimas 4 celdas añadidas
            const moviesToHide12 = Array.from(allMovies12).slice(-4); // Obtener las últimas 4 películas

            moviesToHide12.forEach(movie => movie.parentElement.remove()); // Eliminar esas celdas (filas completas)

            totalLoaded12 -= 4; // Decrementar total cargado
            lastOffset12 -= 4; // Decrementar el offset para las próximas cargas

            // Comprobar si ya no hay más películas
            if (totalLoaded12 <= 4) {
                this.textContent = "Mostrar más"; // Cambiar el texto de nuevo
                isShowingMore12 = false; // Cambiar el estado a no mostrar más
            } else {
                this.textContent = "Mostrar más"; // Cambiar el texto a "Cargar más"
            }
        }
    });
});