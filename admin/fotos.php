<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logo.png">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Editar - Fotos</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
    
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

 


    <?php 
include_once("menu.php");
include_once("top-bar.php")
?>
    
<body>
    <div id="content-wrapper" class="d-flex flex-column">
    <?php

if (isset($_GET['id'])) {
    include("connection.php");
    $con = connection();


    $id = $_GET['id'];
    $action = $_GET['action'];
            


    //modificar un producto
if($action == 'producto') {

// Obtener los datos existentes para editar
$sql = "SELECT * FROM mis_productos WHERE id = $id";
$result = $con->query($sql);


if ($result->num_rows > 0) {
    // Presentar los datos en una lista
    while ($row = $result->fetch_assoc()) { 
?>

<div class="container-fluid">
    <div class="card-body mx-auto">
        <h1>Editar fotos del servicio</h1>
        <h3><?php echo $row['name']; ?></h3>
            <form action="insert.php?action=fotoproducto" method="POST" class="formulario mx-auto" enctype="multipart/form-data">
                <input class="input" type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <p class="mx-2 text-dark my-0">Foto principal:</p> 
                    <img class="img-fluid" src="<?= $row['foto_ruta'] ?>" style="max-width:350px" alt="..." />
                    <label for="foto">Agregue una foto nueva:
                    <input type="file" name="foto" accept="image/*" required></label>
                <input class="input" type="submit" value="Guardar cambios">
            </form>
    </div>
  <?php
        }
    }
}
}

?>
</div>
</body>
</html>