/* Este codigo es para realizar una busqueda en el index */

// Espera a que el documento esté completamente cargado
document.addEventListener('DOMContentLoaded', function () {
	const searchInput = document.getElementById("search");
	const resultadosMessage = document.querySelector(".resultados");
	const btn = document.getElementById("btn");

	// Agrega un evento de clic al botón de búsqueda
	btn.addEventListener("click", function () {
		realizarBusqueda();
	});

	// Agrega un evento de cambio de valor al campo de búsqueda
	searchInput.addEventListener("input", function () {
		if (searchInput.value === "") {
			location.reload(); // Recarga la página cuando el campo de búsqueda está vacío
		}
	});

	function realizarBusqueda() {
		// Obtiene el término de búsqueda
		var searchTerm = searchInput.value.toLowerCase();

		// Itera a través de todos los elementos con la clase "item"
		const items = document.querySelectorAll(".item");
		let found = false; // Variable para rastrear si se encuentra al menos un elemento

		items.forEach(function (item) {
			const productName = item.querySelector("h6").textContent.toLowerCase();

			// Compara si el nombre del producto contiene el término de búsqueda
			if (productName.includes(searchTerm)) {
				// Muestra el elemento que coincide con la búsqueda
				item.style.display = "block";
				found = true;
			} else {
				// Oculta los elementos que no coinciden con la búsqueda
				item.style.display = "none";
			}
		});

		// Muestra el mensaje de resultados fuera del bucle
		if (!found) {
			resultadosMessage.style.display = "block";
		} else {
			resultadosMessage.style.display = "none"; // Oculta el mensaje si se encontraron resultados
		}
	}
});





/* Este codigo a continuacion es para el carrito de compras */

const btnCart = document.querySelector('.container-cart-icon');
const containerCartProducts = document.querySelector(
	'.container-cart-products'
);

btnCart.addEventListener('click', () => {
	containerCartProducts.classList.toggle('hidden-cart');
});

/* ========================= */
const cartInfo = document.querySelector('.cart-product');
const rowProduct = document.querySelector('.row-product');

// Lista de todos los contenedores de productos
const productsList = document.querySelector('.container-items');

// Variable de arreglos de Productos
let allProducts = [];

const valorTotal = document.querySelector('.total-pagar');

const countProducts = document.querySelector('#contador-productos');

const cartEmpty = document.querySelector('.cart-empty');
const cartTotal = document.querySelector('.cart-total');

productsList.addEventListener('click', e => {
	if (e.target.classList.contains('add-cart')) {
		const product = e.target.parentElement;

		const infoProduct = {
			quantity: 1,
			title: product.querySelector('h6').textContent,
			price: product.querySelector('p').textContent,
		};

		const exits = allProducts.some(
			product => product.title === infoProduct.title
		);

		if (exits) {
			const products = allProducts.map(product => {
				if (product.title === infoProduct.title) {
					product.quantity++;
					return product;
				} else {
					return product;
				}
			});
			allProducts = [...products];
		} else {
			allProducts = [...allProducts, infoProduct];
		}

		showHTML();
	}
});

rowProduct.addEventListener('click', e => {
	if (e.target.classList.contains('icon-close')) {
		const product = e.target.parentElement;
		const title = product.querySelector('p').textContent;

		allProducts = allProducts.filter(
			product => product.title !== title
		);

		console.log(allProducts);

		showHTML();
	}
});

// Funcion para mostrar  HTML
const showHTML = () => {
	if (!allProducts.length) {
		cartEmpty.classList.remove('hidden');
		rowProduct.classList.add('hidden');
		cartTotal.classList.add('hidden');
	} else {
		cartEmpty.classList.add('hidden');
		rowProduct.classList.remove('hidden');
		cartTotal.classList.remove('hidden');
	}

	// Limpiar HTML
	rowProduct.innerHTML = '';

	let total = 0;
	let totalOfProducts = 0;

	allProducts.forEach(product => {
		const containerProduct = document.createElement('div');
		containerProduct.classList.add('cart-product');

		containerProduct.innerHTML = `
            <div class="info-cart-product">
                <span class="cantidad-producto-carrito">${product.quantity}</span>
                <p class="titulo-producto-carrito">${product.title}</p>
                <span class="precio-producto-carrito">${product.price}</span>
            </div>
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="icon-close"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M6 18L18 6M6 6l12 12"
                />
            </svg>
        `;

		rowProduct.append(containerProduct);

		total =
			total + parseInt(product.quantity * product.price.slice(1));
		totalOfProducts = totalOfProducts + product.quantity;
	});

	valorTotal.innerText = `$${total}`;
	countProducts.innerText = totalOfProducts;
};






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
				url = "Categorias/Memorias.php";
				break;
			case "Teclados":
				url = "Categorias/Teclados.php"; // Reemplaza con la URL para teclados
				break;
			case "Audifonos":
				url = "Categorias/Audifonos.php"; // Reemplaza con la URL para audífonos
				break;
			case "Juegos":
				url = "Categorias/Juegos.php";
				break;
			case "Escritorios":
				url = "Categorias/Escritorios.php";
				break;
			case "Monitores":
				url = "Categorias/Monitores.php";
				break;
			case "Mouse":
				url = "Categorias/Mouse.php";
				break;
			case "Controles":
				url = "Categorias/Controles.php";
				break;
			case "Sillas":
				url = "Categorias/Sillas.php";
				break;
			case "Tarjetas":
				url = "Categorias/Tarjetas.php";
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