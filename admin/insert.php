<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $estado = $_POST['estado'];

    include("connection.php");
    $con = connection();

    // Insertar el producto en la base de datos
    $sql = "INSERT INTO mis_productos VALUES (null, '$nombre', '$descripcion', '$precio', null, '$estado', 2)";

    if ($con->query($sql) === TRUE) {
        echo '<script>alert("Servicio agregado con exito")</script>';
        echo '<script>window.location="productos.php"</script>';
    } else {
        echo '<script>alert("Error al agregar servicio")</script>';
        echo '<script>window.location="productos.php"</script>';
    }

    $con->close();
}
?>






