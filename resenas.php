<?php


include("connection.php");
$con = connection();


if (isset($_GET['id'])) {
    $id = $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $comentario = $_POST['comentario'];
    $valoracion = $_POST['valoracion'];;


    // Insertar el producto en la base de datos
    $sql = "INSERT INTO resenas VALUES (null, '$id', '$nombre', '$correo', '$comentario', '$valoracion', NOW())";

    if ($con->query($sql) === TRUE) {
    

?>



<script>
alert("Reseña agregada con exito");
window.location="shop-single.php?id=<?php echo $id; ?>";
</script>


<?php
} else {
    echo '<script>alert("Error al agregar su reseña")</script>';
    echo '<script>window.location="index.php"</script>';
    return $id;
}

}
}

?>