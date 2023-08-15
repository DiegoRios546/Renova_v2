

<?php
  include("connection.php");
  $con = connection();

if (isset($_GET['action'])) {




  $action = $_GET['action'];
if($action == 'producto') {
// Obtener los datos del formulario
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$estado = $_POST['estado'];
// Obtén los demás campos aquí


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

}


if($action == 'usuario') {
  // Obtener los datos del formulario
  $id = $_POST['id'];
  $usuario = $_POST['usuario'];
  $pass = $_POST['pass'];
  $priv = $_POST['priv'];
  // Obtén los demás campos aquí
  
  // Actualizar los datos en la base de datos
  $sql = "UPDATE usuarios SET usuario = '$usuario', password = '$pass', privilegio = '$priv' WHERE id = $id"; // Cambia "tu_tabla" por el nombre de tu tabla
  
  // Ejecutar la consulta
  if ($con->query($sql) === TRUE) {
    echo '<script>alert("Datos actualizados con exito")</script>';
    echo '<script>window.location="usuarios.php"</script>';
  } else {
      echo "Error al actualizar los datos: " . $con->error;
      echo '<script>window.location="usuarios.php"</script>';
  }
  
  }


// Cerrar la conexión
$con->close();
}
?>
