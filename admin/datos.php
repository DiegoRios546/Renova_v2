<?php
// Conexión a la base de datos
$conn = new mysqli("renova.bravoutd.com", "bravoutd_urenova", "1Mochila.", "bravoutd_renova");

// Consulta SQL para obtener datos
$query = "SELECT titulo, total_final FROM presupuestos";
$result = $conn->query($query);

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);

$conn->close();
?>
