document.addEventListener("DOMContentLoaded", function() {
    const imagenes = document.querySelectorAll("#album img");
    let indice = 0;

    function mostrarImagen(index) {
        imagenes.forEach((imagen, i) => {
            if (i === index) {
                imagen.classList.add("active");
            } else {
                imagen.classList.remove("active");
            }
        });
    }

    function cambiarImagen() {
        indice = (indice + 1) % imagenes.length;
        mostrarImagen(indice);
    }

    // Mostrar la primera imagen al cargar la página
    mostrarImagen(indice);

    // Cambiar velocidad
    setInterval(cambiarImagen, 2000);
});
