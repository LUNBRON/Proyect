

/* ESTE CODIGO ES PARA BUSCADOR UN CONTENEDOR QUE COINCIDA CON LA ETIQUETA SELECT Y OPTION SI COINCIDE CON EL BOTON 
DE TIPO SUBMIT LO MANDARA AL INDEX QUE FUE ELEGIDO POR EL USUARIO */

function redirigirPorCategoria() {
	// Obtener el valor seleccionado en el select
	var select = document.getElementById("text");
	var selectedOption = select.options[select.selectedIndex];

	// Verificar si se ha seleccionado una categoría
	if (selectedOption.value) {
		// Obtener la URL correspondiente a la categoría seleccionada
		var categoria = selectedOption.value;
		var url = "";
		switch (categoria) {
			case "Memorias-ram":
				url = "../../Categorias/Memorias.php";
				break;
			case "Teclados":
				url = "../../Categorias/Teclados.php"; // Reemplaza con la URL para teclados
				break;
			case "Audifonos":
				url = "../../Categorias/Audifonos.php"; // Reemplaza con la URL para audífonos
				break;
			case "Juegos":
				url = "../../Categorias/Juegos.php";
				break;
			case "Escritorios":
				url = "../../Categorias/Escritorios.php";
				break;
			case "Monitores":
				url = "../../Categorias/Monitores.php";
				break;
			case "Mouse":
				url = "../../Categorias/Mouse.php";
				break;
			case "Controles":
				url = "../../Categorias/Controles.php";
				break;
			case "Sillas":
				url = "../../Categorias/Sillas.php";
				break;
			case "Tarjetas":
				url = "../../Categorias/Tarjetas.php";
				break;
			// Agrega más casos para otras categorías si es necesario
			default:
				// Si la categoría no tiene una URL específica, puedes redirigir a una página predeterminada.
				url = "index.php";
		}

		// Redirigir a la URL correspondiente
		window.location.href = url;
	} else {
		// Si no se ha seleccionado una categoría, puedes mostrar un mensaje de error o realizar otra acción.
		alert("Por favor, selecciona una categoría.");
	}
}