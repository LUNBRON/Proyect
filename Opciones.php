<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagenes/Golden.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/option.css">
    <title>Gamer Store</title>
</head>
<body>
    <div class="Info-target">
        <div class="tarjet">
            <div class="metodos-de-pago">
                <h2 class="target">Pago con Tarjeta</h2>
                <p class="target">Tarjeta de Crédito</p>
                <img src="imagenes/Tj-md.png" alt="tarjetas"> 
                <br> <br>
                <form>
                    <label for="nombre">
                        Nombre: <input class="retro-input" type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre" title="Por favor, ingrese su nombre" required>
                    </label>
                    <label for="tarjeta">
                        N° Tarjeta: <input class="retro-input" type="text" id="tarjeta" name="tarjeta" placeholder="N° Tarjeta" title="Por favor, ingrese su número de tarjeta" required>
                    </label> 
                    <label for="expiracion">
                        Fecha de expiración: 
                        <input class="retro-input" type="date" id="expiracion" name="expiracion" title="Por favor, ingrese la fecha de expiración" required>
                    </label>
                    <label for="codigo">
                        Código de seguridad: 
                        <input class="retro-input" type="text" id="codigo" name="codigo" placeholder="3 dígitos" title="Por favor, ingrese el código de seguridad de 3 dígitos" required>
                    </label> <br>
                    <button type="button" onclick="validarYMostrarAlerta()">Pagar</button>
                </form>
        </div>
        
        <div class="details">
            <center><h2>Detalles del Producto</h2></center>
            <br> <br> <br>
    
            <h4>Cliente:</h4>
            <p>Walter Josué Martinez Gomez</p>
            <p>Walter216@gmail.com</p>
            <br> <br> <br>
    
            <h4>Cantidad:</h4>
            <p>Cantidad aplicada desde la terminal virutal es: <br>
                $45.00 dolares
            </p>
            <br> <br> <br>
    
            <h3>Cargo Total:</h3>
            <p class="price">$45.00</p>
        </div>
    </div>

    <script src="pago.js"></script>
</body>
</html>