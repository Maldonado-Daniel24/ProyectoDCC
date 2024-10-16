const cerrar = document.querySelector('.cerrar-sesion');

cerrar.addEventListener('mouseover', function() {
    cerrar.classList.add('active'); 
});

cerrar.addEventListener('mouseout', function() {
    cerrar.classList.remove('active'); 
});