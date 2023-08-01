<?php
// Conexión a la base de datos (reemplaza con tus propios datos de conexión)
include 'Configuracion.php';

// Obtener los datos del formulario
//$nombre = $_POST['nombre'];
$comentario = $_POST['comentario'];
$valoracion = $_POST['valoracion'];

// Insertar la reseña en la base de datos
$sql = "INSERT INTO resenas (comentario, valoracion) VALUES ('$comentario', '$valoracion')";
if ($db->query($sql) === TRUE) {
    echo "Reseña enviada con éxito.";
} else {
    echo "Error al enviar la reseña: " . $db->error;
}

// Cerrar la conexión a la base de datos
$db->close();
?>
