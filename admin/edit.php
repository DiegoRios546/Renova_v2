

<?php

// Obtener los datos del formulario
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$estado = $_POST['estado'];
// Obtén los demás campos aquí

include("connection.php");
$con = connection();
// Actualizar los datos en la base de datos
$sql = "UPDATE mis_productos SET name = '$nombre', description = '$descripcion', price = '$precio', status = '$estado' WHERE id = $id"; // Cambia "tu_tabla" por el nombre de tu tabla

// Ejecutar la consulta
if ($con->query($sql) === TRUE) {
  echo '<script>alert("Datos actualizados con exito")</script>';
  echo '<script>window.location="productos.php"</script>';
} else {
    echo "Error al actualizar los datos: " . $con->error;
    echo '<script>window.location="productos.php"</script>';
}

// Cerrar la conexión
$con->close();
?>
