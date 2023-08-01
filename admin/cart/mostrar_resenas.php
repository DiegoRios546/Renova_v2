<?php
// Conexión a la base de datos (reemplaza con tus propios datos de conexión)
include 'Configuracion.php';

// Consulta para obtener las reseñas de la base de datos
$sql = "SELECT * FROM resenas ORDER BY fecha DESC";
$result = $db->query($sql);
$resenas = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $resenas[] = $row;
    }
}

// Cerrar la conexión a la base de datos
$db->close();

header('Content-Type: application/json');
echo json_encode($resenas);
?>
