

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
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">




 
</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php 
        include_once("menu.php");
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                include_once("top-bar.php");

                include("connection.php");
                $con = connection();
// Obtener el ID del registro a editar
$id = $_GET['id']; // Supongamos que pasas el ID a través de la URL

// Obtener los datos existentes para editar
$sql = "SELECT * FROM mis_productos WHERE id = $id"; // Cambia "tu_tabla" por el nombre de tu tabla
$result = $con->query($sql);


if ($result->num_rows > 0) {
    // Presentar los datos en una lista
    while ($row = $result->fetch_assoc()) { 
?>
    
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
<div class="card-body contenedor" id="ctn-form">
      <form action="edit.php?&id=" method="POST" class="formulario mx-auto" enctype="multipart/form-data">
      <h1>Editar servicio</h1>
          <input class="input" type="hidden" name="id" value="<?php echo $row['id']; ?>">
          <input class="input" type="text" name="nombre" value="<?php echo $row['name']; ?>">
          <textarea class="input " style="height:200px;" type="text" name="descripcion" value=""><?php echo $row['description']; ?></textarea>
          <input class="input" type="number" name="precio" value="<?php echo $row['price']; ?>">

          <input class="input" type="text" name="estado" value="<?php echo $row['status']; ?>">
          <input class="input" type="submit" value="Guardar cambios">
      </form>
  </div>

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
    }
include_once("footer.php");
?>
</body>
</html>
