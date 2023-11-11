<?php
// Conexión a la base de datos
include('conexion.php');

// Consulta SQL para obtener todos los clientes
$query = "SELECT * FROM cliente";
$resultado = $conexion->query($query);
if ($resultado->num_rows > 0) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cliente</title>
    </head>

    <body>
        <h3>CLIENTE</h3>
        <table>
            <thead>
                <td>Nombre</td>
                <td>Dirección</td>
                <td>Teléfono</td>
                <td>Acciones <a href="crear_cliente.php"><img src="img/add.jpg" width="21" height="23"></a></td>
            </thead>
            <tfoot>
                <td>Nombre</td>
                <td>Dirección</td>
                <td>Teléfono</td>
                <td>Acciones</td>
            </tfoot>
            <tbody>
                <?php
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $fila["nombre"] . "</td>";
                    echo "<td>" . $fila["direccion"] . "</td>";
                    echo "<td>" . $fila["telefono"] . "</td>";
                    echo "<td><a href='actualizar_cliente.php?id=" . $fila["id_cliente"] . "'>Actualizar</a> <a href='op_eliminar_cliente.php?id=" . $fila["id_cliente"] . "'>Eliminar</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </body>

    </html>
<?php
}else{
    echo "No hay clientes en la base de datos. ¿<a href='crear_cliente.php'>Desea crear uno nuevo</a>?";
}
?>