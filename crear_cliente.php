<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Crear nuevo cliente</h3>
    <form action="op_crear_cliente.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="">
        <br>
        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" id="">
        <br>
        <label for="telefono">Teléfono</label>
        <input type="text" name="telefono" id="">
        <br>
        <input type="submit" value="Crear">
        <a href="cliente.php">Volver</a>
    </form>
</body>

</html>