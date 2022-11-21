<!DOCTYPE html>
<html lang="en">

<head>
    <title style="font-size">DeportesCR</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="css/simple-sidebar.css" rel="stylesheet">
</head>

<body>


    <div class="jumbotron text-center" style="margin-bottom:0; background-color:#fff;">
        <img src="img/logo.jpg" alt="" width="250px" height="250px" class="float-left">
        <h1 style="font-size:105px; font-family:Sans-serif; text-align:left;">DeportesCR...</h1>
        <p style="color:black; font-family:Sans-serif; font-size: 65px; text-align:center;">¡Tu Mejor Aliado En Implementos Deportivos!
        </p>
    </div>

    <div class="container">


        <h1>Registrar Usuario</h1>
        <br />
        <form action="registrar.php" method="post" id="frm_registro">
            <div class="row">
                <div class="col-sm-12">
                    <label for="nombre">Nombre:</label>
                    <input type="text" size="40 px" name="nombre" id="nombre" class="col-sm-auto " placeholder="Escriba su nombre " required="true">
                </div>
                <p id="parrafoInfo1"></p>
                <div class="col-sm-12 ">
                    <label for="apellidos ">Apellidos:</label>
                    <input type="text" size="33 px" name="apellidos" id="apellidos" class="col-sm-auto " placeholder="Escriba primer apellido " required="true">
                </div>
                <p id="parrafoInfo2"></p>
                <div class="col-sm-12 ">
                    <label for="email ">Correo:</label>
                    <input type="text " size="41 px" name="email" id="email" class="col-sm-auto " placeholder="@example " required="true">
                </div>
                <p id="parrafoInfo3"></p>
                <div class="col-sm-12 ">
                    <label for="username">Usuario:</label>
                    <input type="text " size="32 px" name="username" id="username" class="col-sm-auto " placeholder="Usuario " required="true">
                </div>
                <p id="parrafoInfo4"></p>
                <div class="col-sm-12 ">
                    <label for="password">Clave de usuario:</label>
                    <input type="password " size="32 px" name="password" id="password" class="col-sm-auto " placeholder="Password " required="true">
                </div>
                <br>
                <input type="button " id="botonRegistrar" name="botonRegistrar" value="Registrar Usuario " class="btn btn-primary ">
                <a href="index.html " class="btn btn-success ">Volver a Inicio</a>
            </div>
        </form>

        <div id="hLow " class="dHijo ">
            <div id="hLowh " class="dHijo "></div>
        </div>
    </div>

    </div>

    <div class="jumbotron text-center " style="margin-bottom:0 ">

    </div>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js "></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js "></script>
<script src="js/registrar.js"></script>

</html>