<!DOCTYPE html>
<html xmlns:th="http://www.thymeleaf.org" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">

    <link href="../Estilo/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">

</head>

<body class="login">

    <header>
        <h1>DeportesCR <span id="textoSpan"></span></h1>
    </header>

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

    <section class="vh-100" style="background-color:aqua">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5  d-none d-md-block">
                                <img src="../img/logo.png" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem ; margin-top: 100px;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form method="form" action="login.php" method="post">

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="bi bi-arrow-through-heart" style="color: #FF0000;"></i>
                                            <span class="h1 fw-bold mb-0">Inicio de Sesión</span>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="usuario" name="usuario" class="form-control form-control-lg" />
                                            <label class="form-label" for="usuario">Nombre de Usuario</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="contrasena" name="contrasena" class="form-control form-control-lg" />
                                            <label class="form-label" for="contrasena">Contraseña</label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                                        </div>

                                    </form>

                                    <?php
                                    if (isset($_GET["error"])) {
                                        switch ($_GET["error"]) {
                                            case '1':
                                                echo "<p class='text-tertiary'>* No autorizado</p>";
                                                break;
                                            case '2':
                                                echo "<p class='text-tertiary'>* Se requiere usuario y contraseña</p>";
                                                break;
                                            case '3':
                                                echo "<p class='text-tertiary'>* Credenciales invalidos</p>";
                                                break;
                                        }
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>

</html>