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
    <title>ElectroComp</title>
</head>

<body>
    <header>
        <h1>Practica 04 <span id="textoSpan">Taller de reparacion de computadoras</span></h1>
    </header>

    <div class="nav_bg">
        <nav class="nav_principal contenedor">
            <a href="../index.html">Servicios</a>
            <a href="../nosotros.html">Nosotros</a>
            <a href="../productos.html">Productos</a>
            <a href="../contacto.html">Contacto</a>
            <a href="../php/productoN.php">Agregar Producto</a>
            <a href="../productos.html">Productos</a>
            <a href="../login.html">Login</a>
        </nav>
    </div>

</body>

</html>

<?php
include "../class/Conexion.php";

   $tipo_dep = $_POST["tipo_deporte"];
   $nombrel  = $_POST["nombre"];
   $preciol  = $_POST["precio"];
   $stockl   = $_POST["stock"];
   $descl    = $_POST["desc"];
   $imgl     = $_POST['img'];
   $stockB = 0;

   if($stockl=="1")
   {
      $stockB = 1;
   }
   else
   {
      $stockB = 0;
   }

        $conexion = new Conexion();
        $connect = mysqli_connect("localhost", "root", "Madrid3600", "deportescr",3306);
        
      
        $consulta = "INSERT INTO MERCADERIA(id_deporte,tipo_mercaderia,precio,stock,descripcion,img) VALUES('$tipo_dep','$nombrel','$preciol','$stockB','$descl','$imgl')";
        $resultado = mysqli_query($connect, $consulta); 
        
        if($resultado == false)
        {
          echo "<section class=contenedor contenido>
          <form class=form><div class=form_campo><h2>No pueden quedar campos vacios</h2>
          </div></form></section>";
        }    
        else
        {
            echo "<section class=contenedor contenido>
            <form class=form><div class=form_campo><h2>Datos Guardados</h2>
            </div></form></section>";
        }
       
?>