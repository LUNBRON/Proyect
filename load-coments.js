$(document).ready(function () {
    // Cargar comentarios al cargar la página
    loadComments();

    // Función para cargar comentarios
    function loadComments() {
        $.ajax({
            type: "GET",
            url: "../controlador/obtenercomentarios.php",
            success: function (response) {
                $("#comment-section").html(response);
            }
        });
    }
});
