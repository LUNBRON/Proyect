// Declaración de la variable global para el contador de productos
var itemCount = 0;

document.addEventListener('DOMContentLoaded', function () {
    const btnAddToCart = document.querySelector('.btn-add-to-cart');
    const inputQuantity = document.querySelector('.input-quantity');
    const contadorProductos = document.getElementById('contador-productos');
    const totalPagarElement = document.querySelector('.total-pagar');
    const cartContainer = document.querySelector('.container-cart-products');
    const cartProductList = document.querySelector('.cart-product-list');
    const productImage = document.querySelector('.previo');
    const infoCartProduct = document.querySelector('.info-cart-product');
    const rowProduct = document.querySelector('.row-product');
    const productTitle = document.querySelector('.container-title').textContent;
    const productPrice = parseFloat(document.querySelector('.container-price span').textContent.substring(1));
    const btnCleanCart = document.querySelector('.btn-clean');
    const iconoCarrito = document.querySelector('.icon-cart');

    let totalPagar = 0;

    btnAddToCart.addEventListener('click', function () {
        const quantity = parseInt(inputQuantity.value);

        if (!isNaN(quantity) && quantity > 0) {
            itemCount += quantity;
            totalPagar += productPrice * quantity;

            contadorProductos.innerText = itemCount;

            totalPagarElement.innerText = `$${totalPagar.toFixed(2)}`;

            // Mostrar el contenedor del carrito
            cartContainer.classList.remove('hidden-cart');

            agregarProductoAlCarrito(productTitle, productPrice, quantity);
        } else {
            alert('Por favor, ingrese una cantidad válida.');
        }
    });

    btnCleanCart.addEventListener('click', function () {
        itemCount = 0;
        totalPagar = 0;
        contadorProductos.innerText = itemCount;
        totalPagarElement.innerText = `$${totalPagar.toFixed(2)}`;
        cartContainer.classList.add('hidden-cart');
        cartProductList.innerHTML = '';
    });

    function agregarProductoAlCarrito(productTitle, productPrice, quantity) {
        const cartItem = document.createElement('div');
        cartItem.classList.add('cart-product');

        cartItem.innerHTML = `
            <div class="titulo-producto-carrito">${productTitle}</div>
            <div class="info-cart-product">
                <span class="cantidad-producto-carrito">${quantity}</span>
                <span class="nombre-producto-carrito">${productTitle}</span>
                <span class="precio-producto-carrito">$${(productPrice * quantity).toFixed(2)}</span>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="icon-close" style="cursor: pointer;">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        `;

        cartProductList.appendChild(cartItem);

        // Mostrar el contenedor de productos del carrito cuando se agrega un producto
        cartProductList.classList.remove('hidden');

        // Mostrar el contenedor de información del producto
        infoCartProduct.style.display = 'block';

        // Mostrar el contenedor row-product
        rowProduct.style.display = 'block';
    }

    // Agregar evento de clic a la imagen para mostrar el contenedor de información del producto
    productImage.addEventListener('click', function () {
        infoCartProduct.style.display = 'block';
    });

    // Agrega un evento de clic al icono del carrito para mostrar/ocultar el carrito
    iconoCarrito.addEventListener('click', function () {
        if (cartContainer.classList.contains('hidden-cart')) {
            cartContainer.classList.remove('hidden-cart');
        } else {
            cartContainer.classList.add('hidden-cart');
        }
    });
});
