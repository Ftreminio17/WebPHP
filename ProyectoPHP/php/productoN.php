<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
    <title>  - Login</title>
    <?php
        session_start();
        if (isset($_SESSION["login"])) {
            header("location: admin.php");
            exit();
        }
    ?>
</head>

<body class="login">
    <div class="nav_bg">
        <nav class="nav_principal contenedor">
            <a href="../index.html">Servicios</a>
            <a href="../nosotros.html">Nosotros</a>
            <a href="../productos.html">Productos</a>
            <a href="../contacto.html">Contacto</a>
            <a href="../php/productoN.php">Agregar Producto</a>
            <a href="../php/loginN.php">Login</a>
        </nav>
    </div>
    <section class="contenedor contenido">
        <form class="form" action="../php/productosP.php" method="post">
            <legend>Inicio de sección</legend>
            <div>
                <div class="form_campo">
                    <label for="tipo_deporte">Tipo de deporte</label>
                    <select class="form_text" name="tipo_deporte" id="tipo_deporte">
                        <option value="0">--- Seleccione un tipo de dispositivo ---</option>
                        <option value="1">Futbol</option>
                        <option value="2">Tenis</option>
                        <option value="3">Bascket</option>
                        <option value="4">Natación</option>
                    </select>
                </div>

                <div class="form_campo">
                    <label for="nombre">Tipo mercadería:</label>
                    <input id="nombre" name="nombre" class="form_text" 
                    placeholder="Ingrese el tipo de mercadería">
                </div>

                <div class="form_campo">
                    <label for="precio">Precio:</label>
                    <input id="precio" name="precio" class="form_text" 
                    placeholder="Ingrese el precio">
                </div>

                <div class="form_campo">
                    <label for="stock">En stock</label>
                    <select class="form_text" name="stock" id="stock">
                        <option value="2">--- Hay en Stock? ---</option>
                        <option value="1">Si</option>
                        <option value="0">No</option>
                    </select>
                </div>

                <div class="form_campo">
                    <label for="desc">Descripción:</label>
                    <input id="desc" name="desc" class="form_text" type="text" 
                    placeholder="Ingrese la descripción">
                </div>

                <div class="form_campo">
                    <label for="img">Imagen:</label>
                    <input id="img" name="img" class="form_text" type="text" 
                    placeholder="Ingrese la imagen">
                </div>
            </div>
            <div>
                <button class="boton enviar" type="submit">Ingresar</button>
            </div>
        </form>

    </section>
</body>
</html>