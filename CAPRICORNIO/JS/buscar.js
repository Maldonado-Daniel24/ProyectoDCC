function reiniciarPagina() {
    location.reload();  // Esto recarga la página actual
}

document.addEventListener('keydown', function(event) {
    // Verificar si la tecla presionada es "Enter"
    if (event.key === 'Enter' || event.keyCode === 13) {
        // Recargar la página
        location.reload();
    }
});

document.addEventListener("keyup", e => {
    if (e.target.matches("#Barra_Buscar")) {
        // Seleccionamos todos los elementos con la clase .cuadro0
        document.querySelectorAll(".cuadro0").forEach(nombre => {
            // Comprobamos si el texto del elemento incluye lo que el usuario escribe en la barra de búsqueda
            if (nombre.textContent.toLowerCase().includes(e.target.value.toLowerCase())) {
                // Si es así, eliminamos la clase 'filtro' si está presente
                nombre.classList.remove("filtro");
            } else {
                // Si no incluye, agregamos la clase 'filtro'
                nombre.classList.add("filtro");
            }
        });
    }
});
