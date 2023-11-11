<?php
//Conexión a la base de datos
include('conexion.php');
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
//Aquí voy a hacer la sentencia SQL
$query = "INSERT INTO cliente(nombre,direccion,telefono) VALUES ('$nombre','$direccion','$telefono')";
if ($conexion->query($query) === TRUE) {
    echo "Cliente creado con éxito";
    header('location:cliente.php');
    exit();
} else {
    echo 'Error al crear el cliente:' . $conexion->error;
}
//Cierre de la conexión
$conexion->close();