
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
document.addEventListener("keyup", e=>{

    if(e.target.matches("#Barra_Buscar")){


    
    document.querySelectorAll(".cuadro0").forEach(nombre =>{

        nombre.textContent.toLowerCase().includes(e.target.value.toLowerCase())
        ?nombre.classList.classList.renove("filtro")
        :nombre.classList.add("filtro")
    })
}
})

