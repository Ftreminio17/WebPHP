<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../style.css">
    <title>Deportes - Admin</title>
    <?php
        session_start();
        if (!isset($_SESSION["login"])) {
            header("location: loginN.php?error=1");
            exit();
        }
    ?>
</head>

<body>
    <header>
        <h1>Deportes Administración</h1>
    </header>

    <div class="nav_bg">
        <nav class="nav_principal contenedor">
            <a href="admin.php">Usuarios</a>
            <a href="php/logout.php">Cerrar Sesión</a>
        </nav>
    </div>

    <section class="contenedor contenido">
        <h2>Usuarios</h2>

    </section>

    <footer class="contenedor">
        <div class="derechos">
            <p>Usuario: <span class="text-primary">
                <?php
                echo $_SESSION["usuario"];
                ?>
            </span> Todos los derechos reservados. DeportesCR</p>
        </div>
    </footer>
</body>

</html>