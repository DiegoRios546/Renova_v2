
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Producto</title>
</head>
<body>
  <h1>Editar Producto</h1>

  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "renova";
  
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  if ($conn->connect_error) {
      die("Error de conexión: " . $conn->connect_error);
  }

  if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM mis_productos WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
      $row = $result->fetch_assoc();
      $nombre = $row['name'];
      $descripcion = $row['description'];
      $precio = $row['price'];

      echo '
      <form action="productos.php" method="Post">
        <input type="hidden" name="id" value="' . $id . '">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="' . $nombre . '" required>
        <br>
        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion">' . $descripcion . '</textarea>
        <br>
        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" step="0.01" value="' . $precio . '" required>
        <br>
        <button type="submit" name="actualizar">Actualizar</button>
      </form>
      ';
    } else {
      echo 'Producto no encontrado.';
    }
  } else {
    echo 'ID del producto no especificado.';
  }

  $conn->close();
  ?>
</body>
</html>
