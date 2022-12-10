<?php

class Conexion
{
    protected $link;

    public function conectar() {
        $this->link = mysqli_connect("localhost", "root", "Madrid3600", "deportescr");
    }

    public function cerrar() {
        $this->link->close();
    }

}