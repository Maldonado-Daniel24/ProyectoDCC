// Seleccionamos el contenedor principal donde se añadirán las nuevas cajas 
const mainContainer = document.querySelector('.main-container');

// Verificar si el contenedor principal existe
if (!mainContainer) {
    console.error("El contenedor principal '.main-container' no se encontró en el DOM.");
} else {
    console.log("Contenedor principal encontrado:", mainContainer);
}

window.addEventListener('scroll', () => {
    const { clientHeight, scrollHeight, scrollTop } = document.documentElement;

    // Verificar si hemos alcanzado el final de la página
    if (scrollTop + clientHeight >= scrollHeight - 4) {
        console.log("Se llegó al final de la página, añadiendo nuevo contenedor...");
        setTimeout(() => {
            newBoxContainer();
        }, 1000);
    }
});

const newBoxContainer = () => {
    // Seleccionamos la caja original de películas (asegúrate de que existe en tu HTML)
    const originalBox = document.querySelector('.box-container-1');

    // Verificar si existe el contenedor original de películas
    if (!originalBox) {
        console.error("No se encontró el contenedor '.box-container-1' en el DOM.");
        return; // Salir de la función si no se encuentra
    }

    console.log("Contenedor original encontrado:", originalBox);

    // Creamos un nuevo contenedor clonando el original
    const newBox = originalBox.cloneNode(true); // Clon profundo para copiar todo el contenido

    // Cambiar el ID o clase del nuevo contenedor si es necesario
    newBox.id = `box-container-${document.querySelectorAll('.box-container-1').length + 1}`; // Asigna un nuevo ID único

    // Añadimos el nuevo contenedor al contenedor principal
    mainContainer.appendChild(newBox);
    console.log("Nuevo contenedor añadido.");
};


