// script.js
$(document).ready(function() {
    // Simulamos una carga de contenido con un retraso
    setTimeout(function() {
        // Ocultamos el loader
        $('#loader').hide();
        // Mostramos el contenido
        $('#content').show();
    }, 3000); // 3 segundos de retraso para simular la carga
});
