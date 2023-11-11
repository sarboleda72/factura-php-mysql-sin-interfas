<?php
// Conexión a la base de datos
$host = "127.0.0.1";
$usuario = "root";
$contrasenia = "";
$bd = "factura";

$conexion = new mysqli($host, $usuario, $contrasenia, $bd);

if ($conexion->connect_error) {
    die("Error de conexión:" . $conexion->connect_error);
}
