<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buscador en Tiempo Real</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
    ul {
      list-style-type: none;
    }
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <h1>Buscador en Tiempo Real</h1>

  <input type="text" id="searchInput" placeholder="Buscar">
  <ul id="results"></ul>

  <script>
    $(document).ready(function() {
      $('#searchInput').keyup(function() {
        var query = $(this).val().trim();
        if (query !== '') {
          fetchResults(query);
        } else {
          clearResults();
        }
      });

      function fetchResults(query) {
        $.ajax({
          url: 'search.php',
          method: 'POST',
          data: { query: query },
          dataType: 'json',
          success: function(response) {
            clearResults();
            if (response.length > 0) {
              response.forEach(function(result) {
                var li = $('<li>').text(result.title);
                $('#results').append(li);
              });
            } else {
              var li = $('<li>').text('No se encontraron resultados');
              $('#results').append(li);
            }
          },
          error: function(xhr, status, error) {
            console.error('Error en la solicitud Ajax:', error);
            clearResults();
          }
        });
      }

      function clearResults() {
        $('#results').empty();
      }
    });
  </script>
  <h1>Tabla de Datos</h1>

<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "renova";

  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
      die("Error de conexión: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM productos";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      echo "<table>";
      echo "<tr>";
      echo "<th>ID</th>";
      echo "<th>Nombre</th>";
      echo "<th>Descripcion</th>";
      echo "</tr>";

      while ($row = $result->fetch_assoc()) {
          echo "<tr id='results'>";
          echo "<td>" . $row['id'] . "</td>";
          echo "<td>" . $row['nombre'] . "</td>";
          echo "<td>" . $row['descripcion'] . "</td>";
          echo "</tr>";
      }

      echo "</table>";
  } else {
      echo "No se encontraron datos";
  }

  $conn->close();
?>
</body>
</html>
