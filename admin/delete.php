
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $action = $_GET['action'];

    if($action == 'producto') {

    include("connection.php");
    $con = connection();
    // Consulta SQL para eliminar el producto
    $sql = "DELETE FROM mis_productos WHERE id = $id"; // Cambia "productos" por el nombre de tu tabla

    if ($con->query($sql) === TRUE) {
      echo '<script>alert("Producto eliminado con exito")</script>';
      echo '<script>window.location="productos.php"</script>';
    } else {
        // Mostrar notificación de error
        echo '<script>alert("Error al eliminar")</script>';
        echo '<script>window.location="productos.php"</script>';
    }
} 


if($action == 'usuario') {

    include("connection.php");
    $con = connection();
    // Consulta SQL para eliminar el producto
    $sql = "DELETE FROM usuarios WHERE id = $id"; // Cambia "productos" por el nombre de tu tabla

    if ($con->query($sql) === TRUE) {
      echo '<script>alert("Usuario eliminado con exito")</script>';
      echo '<script>window.location="usuarios.php"</script>';
    } else {
        // Mostrar notificación de error
        echo '<script>alert("Error al eliminar")</script>';
        echo '<script>window.location="usuarios.php"</script>';
    }
} 












    // Cerrar la conexión
    $con->close();
} else {
    // Redirigir en caso de que no se proporcione el ID
    echo '<script>window.location="productos.php"</script>';
}
?>

