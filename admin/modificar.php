

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logo.png">
  <title>Actualizar datos</title>
      <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/estilo.css" rel="stylesheet">

    <?php 
        include_once("menu.php");
        include_once("top-bar.php");
        ?>
</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

           
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
<div class="card-body contenedor" id="ctn-form">
      <form action="edit.php?action=producto" method="POST" class=" formulario mx-auto">
      <h1>Editar servicio</h1>
          <input class="input" type="hidden" name="id" value="<?php echo $row['id']; ?>">
          <label for="nombre" class="d-flex"><p class="mx-2 my-auto">Nombre:</p> 
          <input class="input" type="text" name="nombre" value="<?php echo $row['name']; ?>"> </label>
          <label for="descripcion" class="d-block"><p class="mx-2 my-auto">Descripcion:</p> 
          <textarea class="input" style="height:150px;" type="text" name="descripcion"><?php echo $row['description']; ?></textarea> </label>
          <label for="precio" class="d-flex"><p class="mx-2 my-auto">Precio:</p> 
          <input class="input" type="number" name="precio" value="<?php echo $row['price']; ?>"> </label>
          <label for="estado" class="d-block mx-auto text-center">
            <h3 class="mx-2 my-2 border-bottom text-primary">Estado actual: - <?php echo $row['status']; ?></h3> 
            <h5 class="mx-auto my-3">1 = activo  -----  0 = inactivo</h5>
          <input type="radio" name="estado" value="1" checked>
            Activo
          <input type="radio" name="estado" value="0">
            Inactivo
        </label>
          <input class="input" type="submit" value="Guardar cambios">
      </form>
  </div>
  <?php
        }
    }
}
?>










                <!-- modificar un usuario -->
                <?php
            
                if($action == 'usuario') {

// Obtener los datos existentes para editar
$sql = "SELECT * FROM usuarios WHERE id = $id"; 
$result = $con->query($sql);


if ($result->num_rows > 0) {
    // Presentar los datos en una lista
    while ($row = $result->fetch_assoc()) { 
?>
    
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
<div class="card-body contenedor" id="ctn-form">
      <form action="edit.php?action=usuario" method="POST" class=" formulario mx-auto">
      <h1>Editar servicio</h1>
          <input class="input" type="hidden" name="id" value="<?php echo $row['id']; ?>">
          <label for="usuario" class="d-flex"><p class="mx-2 my-auto">Usuario:</p> 
          <input class="input" type="text" name="usuario" value="<?php echo $row['usuario']; ?>"> </label>
          <label for="pass" class="d-flex"><p class="mx-2 my-auto">Contraseña:</p> 
          <input class="input" type="text" name="pass" value="<?php echo $row['password']; ?>"> </label>
          <label for="priv" class="d-flex"><p class="mx-2 my-auto">Privilegio:</p> 
          <input class="input" type="text" name="priv" value="<?php echo $row['privilegio']; ?>"> </label>
          <input class="input" type="submit" value="Guardar cambios">
      </form>
  </div>

  <?php
        }
    }
}
?>






                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->

            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->





<?php
}
include_once("footer.php");


?>
</body>
</html>
