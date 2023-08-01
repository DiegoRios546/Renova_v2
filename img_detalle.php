<!-- imagen_detalle.php -->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detalle de la Imagen</title>
</head>
<body>
  <h1>Detalle de la Imagen</h1>

  <?php
  if (isset($_GET['id'])) {
    // Obtener el ID de la imagen enviado desde index.php
    $idImagen = $_GET['id'];

    // Incluir el archivo de conexión a la base de datos
    include 'conexion.php';

    // Consulta para obtener los detalles de la imagen seleccionada
    $sql = "SELECT * FROM productos WHERE id = $idImagen";
    $result = $conexion->query($sql);

    if ($result->num_rows == 1) {
      $row = $result->fetch_assoc();
      echo '<h2>' . $row['nombre'] . '</h2>';
      echo '<h2>' . $row['descripcion'] . '</h2>';
      echo '<img src="data:image/png; base64, ' . base64_encode( $row["imagen"]) . '" alt="' . $row['nombre'] . '" width="200">';
    } else {
      echo '<p>Imagen no encontrada.</p>';
    }

    // Cerrar la conexión a la base de datos
    $conexion->close();
  } else {
    echo '<p>No se ha proporcionado un ID de imagen válido.</p>';
  }
  ?>
</body>
</html>
