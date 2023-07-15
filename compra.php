<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Compra en Línea</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    
    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
    }
    
    h1 {
      text-align: center;
    }
    
    ul {
      list-style-type: none;
      padding: 0;
    }
    
    li {
      margin-bottom: 10px;
    }
    
    input[type="checkbox"] {
      margin-right: 10px;
    }
  </style>
</head>
<body>
<?php
   include_once("menu.php");
   
?>
  <div class="container">
    <h1>Lista de Compra en Línea</h1>
    <ul>
      <li>
        <input type="checkbox">
        <span>Producto 1</span>
      </li>
      <li>
        <input type="checkbox">
        <span>Producto 2</span>
      </li>
      <li>
        <input type="checkbox">
        <span>Producto 3</span>
      </li>
      <li>
        <input type="checkbox">
        <span>Producto 4</span>
      </li>
    </ul>
  </div>
</body>
</html>
