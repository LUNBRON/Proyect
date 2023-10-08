<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="imagenes/website.png">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<!-- CSS -->
	<link rel="stylesheet" href="CSS/styles.css">



	<title>Gamer Store</title>


</head>



<body>
	<!-- MENU NAVBAR -->
	<div class="container-logo">
		<img src="imagenes\logo-1.png" class="img-logo-t" alt="logo">
		<div class="search">
			<input type="search" name="search" id="search" placeholder="Busque el producto deseado"
				onkeydown="searchOnEnter(event)">
			<div class="button">
				<button type="submit" id="btn" class="btn">Search</button>
			</div> <br><br>
		</div>
	</div>
	<nav>
		<div class="perfil">
			<center>
				<?php
				session_start();

				if (isset($_SESSION["usuario"])) {
					echo $_SESSION["usuario"];
				} else {
					echo "Bienvenido, Usuario";
				}
				?>
			</center>
		</div>

		<ul>
			<li><a href="#">
					<center><img class="identificador" src="imagenes/hogar.png" alt="Inicio"></center>
					Inicio
				</a></li>
			<li><a href="#">
					<center><img class="identificador" src="imagenes/grupo.png" alt="Nosotros"></center>
					Sobre nosotros
				</a></li>
			<li><a href="inicio de sesion/login.php">
					<center><img class="identificador" src="imagenes/perfil.png" alt="Login"></center>
					Acceder
				</a></li>
			<li><a href="Sentings/Sentings.php">
					<center><img class="identificador" src="imagenes/configuraciones.png" alt="configuracines"></center>
					Configuraciones
				</a></li>
		</ul>
		<center>
			<a class="nav-link" href="controlador/salir.php">Salir</a>
		</center>

	</nav>
	<!-- FIN DEL MENU NAVBAR -->

	<!--  ################################################################################################################################################################################## -->

	</header>

	</header>
	<!--Carrousel para presentar ofertas entre otras-->
	<div class="carrito">
		<div class="container-icon">
			<div class="container-cart-icon">
				<img class="icon-cart" src="imagenes/cart-icon.png" alt="icon-cart">
				<div class="count-products">
					<span id="contador-productos">0</span>
				</div>
			</div>

			<div class="container-cart-products hidden-cart">
				<div class="row-product hidden">
					<div class="cart-product">
						<div class="info-cart-product">
							<span class="cantidad-producto-carrito"></span>
							<p class="titulo-producto-carrito"></p>
							<span class="precio-producto-carrito"></span>
						</div>
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
							stroke="currentColor" class="icon-close">
							<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
						</svg>
					</div>
				</div>

				<div class="cart-total hidden">
					<h3>Total:</h3>
					<span class="total-pagar"></span>
				</div>
				<a href="Opciones.php"><button class="Pagar">Pagar Cantidad</button></a>
				<p class="cart-empty"></p>
			</div>
		</div>
	</div>
	<!-- Estos son los productos que se tiene en la tienda-->
	<br><br><br>
	<div id="panel" class="panel">
		<div id="search-results">
			<div class="categorias">
				<label for="text">Filtrar por:</label>
				<div class="selet">
					<button class="Filtrar" type="submit" onclick="redirigirPorCategoria()">Filtrar</button>
					<select name="Text" id="text">
						<option disabled selected value="">
							Escoge una categoria
						</option>
						<option value="Memorias-ram"><a href="../incio de sesion/Login.php">◦ Memorias Ram</a></option>
						<option value="Teclados">◦ Teclados</option>
						<option value="Audifonos">◦ Audifonos</option>
						<option value="Juegos">◦ Juegos de consola</option>
						<option value="Escritorios">◦ Escritorios</option>
						<option value="Monitores">◦ Monitores</option>
						<option value="Mouse">◦ Mouse</option>
						<option value="Controles">◦ Controles de consolas</option>
						<option value="Sillas">◦ Sillas Gamer</option>
						<option value="Tarjetas">◦ Tarjetas Graficas</option>
					</select>
				</div>
				<br><br><br>
			</div>

			<div class="container-items">
				<div class="item">
					<a class="View-info" href="informacion de los productos/informacion.php">
						<img src="imagenes/c-1.jpg" alt="producto" />
					</a>
					<br>
					<div class="info-product">
						<h6>DualShock 4 Controlador inalámbrico para PlayStation 4 <br> Jet Negro</h6>
						<p class="price">$45</p>
						<br>
						<button class="add-cart">Añadir al carrito</button>
					</div>
				</div>
				<div class="item">
					<a href="informacion de los productos/informacion-2.php">
						<figure>
							<img src="imagenes/c4-2.png" alt="producto" />
						</figure>
					</a>
					<br>
					<div class="info-product">
						<h6>Control inalámbrico DualSense</h6>
						<p class="price">$50</p>
						<br>
						<button class="add-cart">Añadir al carrito</button>
					</div>
				</div>


				<div class="item">
					<a href="informacion de los productos/informacion-3.php">
						<figure>
							<img src="imagenes/T.M-1.png" alt="producto" />
						</figure>
					</a>
					<br>
					<div class="info-product">
						<h6>Poseidon Gaming Keyboard Mecánico</h6>
						<p class="price">$59</p>
						<br>
						<button class="add-cart">Añadir al carrito</button>
					</div>
				</div>
				<div class="item">
					<a href="informacion de los productos/informacion-4.php">
						<figure>
							<img src="imagenes/k1.png" alt="producto" />
						</figure>
					</a>
					<br>
					<div class="info-product">
						<h6>Combo de PC Gamer</h6>
						<p class="price">$899</p>
						<br>
						<button class="add-cart">Añadir al carrito</button>
					</div>
				</div>
				<div class="item">
					<a href="informacion de los productos/informacion-5.php">
						<figure>
							<img src="imagenes/ET-1.png" alt="producto" />
						</figure>
					</a>
					<div class="info-product">
						<h6>Escritorio-Living desks thanatos</h6>
						<p class="price">$99</p>
						<br><br>
						<button class="add-cart">Añadir al carrito</button>
					</div>
				</div>
				<div class="item">
					<a href="informacion de los productos/informacion-6.php">
						<figure>
							<img src="imagenes/ET-2.jpg" alt="producto" />
						</figure>
					</a>
					<div class="info-product">
						<h6>Desk-Top modelo W Escritorio gamer Ambientika</h6>
						<p class="price">$150</p>
						<button class="add-cart">Añadir al carrito</button>
					</div>
				</div>
				<div class="item">
					<a href="informacion de los productos/informacion-7.php">
						<figure>
							<img src="imagenes/ET-3.webp" alt="producto" />
						</figure>
					</a>
					<div class="info-product">
						<h6>Maderkit escritorio gamer max wengue</h6>
						<p class="price">$100</p>
						<button class="add-cart">Añadir al carrito</button>
					</div>
				</div>
				<div class="item">
					<a href="informacion de los productos/informacion-8.php">
						<figure>
							<img src="imagenes/T.M-3.png" alt="producto" />
						</figure>
					</a>
					<div class="info-product">
						<h6>Razer BlackWidow X Chroma</h6>
						<p class="price">$70</p>
						<button class="add-cart">Añadir al carrito</button>
					</div>
				</div>
				<div class="item">
					<a href="informacion de los productos/informacion-9.php">
						<figure>
							<img src="imagenes/LC-3.jpg" alt="producto" />
						</figure>
					</a>
					<div class="info-product">
						<h6>Luces Led</h6>
						<p class="price">$45</p>
						<button class="add-cart">Añadir al carrito</button>
					</div>
				</div>
				<div class="item">
					<a href="informacion de los productos/informacion-10.php">
						<figure>
							<img src="imagenes/JG-1.webp" alt="producto" />
						</figure>
					</a>
					<div class="info-product">
						<h6>Zelda Breath of the wild</h6>
						<p class="price">$79</p>
						<button class="add-cart">Añadir al carrito</button>
					</div>
				</div>

				<div class="item">
					<a href="informacion de los productos/informacion-11.php">
						<figure>
							<img src="imagenes/JG-2.jpg" alt="producto" />
						</figure>
					</a>
					<div class="info-product">
						<h6>Mario Kar 8 deluxe </h6>
						<p class="price">$79</p>
						<button class="add-cart">Añadir al carrito</button>
					</div>
				</div>

				<div class="item">
					<a href="informacion de los productos/informacion-12.php">
						<figure>
							<img src="imagenes/T.M-2.png" alt="producto" />
						</figure>
					</a>
					<div class="info-product">
						<h6>Teclado Mecanico GK-701</h6>
						<p class="price">$49</p>
						<button class="add-cart">Añadir al carrito</button>
					</div>
				</div>

				<div class="item">
					<a href="informacion de los productos/informacion-13.php">
						<figure>
							<img src="imagenes/Halo-disco.jpg" alt="producto" />
						</figure>
					</a>
					<br>
					<div class="info-product">
						<h6>HALO 5</h6>
						<p class="price">$40</p>
						<br>
						<button class="add-cart">Añadir al carrito</button>
					</div>
				</div>
				<div class="item">
					<a href="informacion de los productos/informacion-14.php">
						<figure>
							<img src="imagenes/TLOU--disco.jpg" alt="producto" />
						</figure>
					</a>
					<br>
					<div class="info-product">
						<h6>The Last of Us Part I </h6>
						<p class="price">$69.99</p>
						<br>
						<button class="add-cart">Añadir al carrito</button>
					</div>
				</div>
				<div class="item">
					<a href="informacion de los productos/informacion-15.php">
						<figure>
							<img src="imagenes/xbox-controller.jpg" alt="producto" />
						</figure>
					</a>
					<br>
					<div class="info-product">
						<h6>XBOX wireless controller</h6>
						<p class="price">$44.99</p>
						<br>
						<button class="add-cart">Añadir al carrito</button>
					</div>
				</div>
			</div>
			<!-- Contenido de los resultados -->
			<div class="resultados" style="display: none;">
				<center>
					<h3>No se ha encontrado ningún producto con ese nombre.</h3>
				</center>
				<br>
				<br>
				<br>
				<br>
				<br>
			</div>
		</div>


	</div>
	</div>
	</div>
	</div>

	<br>
	<br>
	<br>
	<!--  ################################################################################################################################################################################## -->
	<nav>
		<footer>
			<p class="derechos">&#169 Los contenidos de esta página web están sujetos a derechos de autor de la empresa
				<b>Tecno Code.</b></p>
			<div class="redes-sociales">
				<a href="https://www.facebook.com/profile.php?id=61550128828540" class="Icon-fb">
					<img class="red" src="imagenes/FB.png" alt="icon">
				</a>
				<a href="#" class="Icon-ig">
					<img class="red" src="imagenes/ig.png" alt="icon">
				</a>
				<a href="#" class="Icon-tw">
					<img class="red-X" src="imagenes/X.png" alt="icon">
				</a>
			</div>
		</footer>
	</nav>

	<script src="index.js"></script>
</body>

</html>