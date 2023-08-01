<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sección de Reseñas</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
  <h1>Sección de Reseñas</h1>
  <form action="procesar_reseña.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>
    <br>
    <label for="comentario">Comentario:</label>
    <textarea id="comentario" name="comentario" rows="4" required></textarea>
    <br>
    <label for="valoracion">Valoración:</label>
    <div class="estrellas">
      <input type="radio" name="valoracion" id="estrella5" value="5">
      <label for="estrella5">&#9733;</label>
      <input type="radio" name="valoracion" id="estrella4" value="4">
      <label for="estrella4">&#9733;</label>
      <input type="radio" name="valoracion" id="estrella3" value="3">
      <label for="estrella3">&#9733;</label>
      <input type="radio" name="valoracion" id="estrella2" value="2">
      <label for="estrella2">&#9733;</label>
      <input type="radio" name="valoracion" id="estrella1" value="1">
      <label for="estrella1">&#9733;</label>
    </div>
    <br>
    <button type="submit">Enviar Reseña</button>
  </form>

  <div id="resenas">
    <!-- Aquí se mostrarán las reseñas -->
  </div>

  <script src="mostrar_resenas.js"></script>
</body>
</html>
