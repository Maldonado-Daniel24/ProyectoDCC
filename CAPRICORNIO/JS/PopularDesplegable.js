const dropdowns = document.querySelectorAll('.dropdown');
dropdowns.forEach(dropdown => {
    const select = dropdown.querySelector('.select');
    const caret = dropdown.querySelector('.caret');
    const menu = dropdown.querySelector('.seleccion-desplegable');
    const options = dropdown.querySelectorAll('.seleccion-desplegable li'); 
    const selected = dropdown.querySelector('.selected');

    // Abre y cierra el menú al hacer clic en el 'select'
    select.addEventListener('click', () => {
        select.classList.toggle('-clicked');
        caret.classList.toggle('caret-rotate');
        menu.classList.toggle('-open');
    });

    // Cambia el texto seleccionado al hacer clic en una opción
    options.forEach(option => {
        option.addEventListener('click', () => {
            selected.innerText = option.innerText; 

            // Cerrar el menú y remover clases
            select.classList.remove('-clicked');
            caret.classList.remove('caret-rotate');
            menu.classList.remove('-open');

            // Remover la clase 'active' de todas las opciones y añadirla solo a la opción seleccionada
            options.forEach(option => {
                option.classList.remove('active');
            });

            option.classList.add('active');
        });
    });
});


