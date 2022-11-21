<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <link href="Estilo/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

    <form action="login.php" method="post" id="frm_login">
        <div id="dPadre" class="form-group">
            <div id="hTop" class="dHijo"></div>

            <div class="header-logo">
                <a href="#" class="logo">
                    <img src="img/logo.jpg" alt="" width="350 px">
                </a>
            </div>

            <h1 style="font-family:Sans-serif; ">Inicio de sesión</h1>
            <label for="email" style="font-family:Sans-serif; ">Correo Electrónico:</label>
            <input type="text" id="email" name="email" placeholder="Escriba su correo">
            <label for="password" style="font-family:Sans-serif; ">Clave de usuario:</label>
            <input type="password" id="password" name="password" placeholder="Password ">
            <br>
            <input type="button " id="botonLogin" name="botonLogin" value="Ingresar " class="btn btn-primary ">

            <br />
            <a href="registrar.php" class="btn btn-success ">Registrarse</a>
        </div>
        <div id="hLow " class="dHijo ">
            <div id="hLowh " class="dHijo "></div>
        </div>
        </div>
    </form>

</body>

</html>