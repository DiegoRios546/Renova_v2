

<html lang="en" data-lt-installed="true"><head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logo.png">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Productos</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
 
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
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <p class="my-5">Como administrador puede realizar la creacion y modificacion de servicios dentro de Renova Depot, todos los cambios realizados aqui se veran afectados dentro del sitio web.</p>

                    <!-- DataTales Example -->
                    <script>
                        $(document).ready(function() {
      $("#mostrarButton").click(function() {
        $("#elementoParaMostrarOcultar").show();
      });

      $("#ocultarButton").click(function() {
        $("#elementoParaMostrarOcultar").hide();
      });
    });
                    </script>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex">
                             <!-- Page Heading -->
                            <h3 class="m-0 text-gray-800">Servicios</h3>
                            <style>
                                .btns-tablas{
                                    position: absolute;
                                    right: 0;
                                    
                                }
                            </style>
                            <div class="btns-tablas m-2">
                                <button id="principal">
                                    < ojo
                                </button>

                                <button id="nuevo">
                                    Nuevo +
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
            
                            <table border="1" class="mx-auto m-auto">
                            <thead>
                                <tr class="bg-success">
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Precio</th>
                                <th>Imagen</th>
                                <th>Creado</th>
                                <th>Mod</th>
                                <th>Categoria</th>
                                <th>Status</th>
                                <th>Acciones</th>
                                </tr>
                                </thead>
                               
                        <?php
                            
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "renova";
                            
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            
                            if ($conn->connect_error) {
                                die("Error de conexión: " . $conn->connect_error);
                            }
                          
                            // Operación READ - Mostrar los registros de la tabla "productos"
                            $sql = "SELECT t1.*, t2.categoria 
                            FROM mis_productos AS t1
                            JOIN categorias AS t2 ON t2.id = t1.id_categoria";
                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0) {
                           
                                while ($row = $result->fetch_assoc()) {
                            ?>
                            <tbody>
                                <tr>
                                <td><?php echo $row['id']?></td>
                                <td><?php echo $row['name']?></td>
                                <td><?php echo $row['description']?></td>
                                <td><?php echo $row['price']?></td>
                                <td><img class="img-fluid" src="data:image/png; base64, <?php echo base64_encode( $row['img']); ?>" alt="..." /></td>
                                <td><?php echo $row['created']?></td>
                                <td><?php echo $row['modified']?></td>
                                <td><?php echo $row['categoria']?></td>
                                <td><?php echo $row['status']?></td>
                                <td>
                                    <a href="edit.php?id='<?php echo $row['id'] ?> '">Editar</a>
                                    <a href="?eliminar='<?php echo $row['id'] ?> '">Eliminar</a>
                                </td>
                                </tr>
                                </tbody>
                            
                                
                                
                            <?php
                                }
                            } else {
                                echo '<tr><td colspan="4">No se encontraron registros.</td></tr>';
                            }
                             ?>
                            </table>
                            <?php
                            // Operación UPDATE - Actualizar un producto existente
                            if (isset($_POST['actualizar'])) {
                                $id = $_POST['id'];
                                $nombre = $_POST['nombre'];
                                $descripcion = $_POST['descripcion'];
                                $precio = $_POST['precio'];

                                $sql = "UPDATE mis_productos SET name='$nombre', description='$descripcion', price='$precio' WHERE id=$id";
                                $conn->query($sql);
                            }

                            // Operación DELETE - Eliminar un producto existente
                            if (isset($_GET['eliminar'])) {
                                $id = $_GET['eliminar'];

                                $sql = "DELETE FROM mis_productos WHERE id=$id";
                                $conn->query($sql);
                            }



                            $conn->close();
                            ?>

<h1>Crear un Nuevo Producto</h1>
  <form action="subir.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>
    <br>
    <label for="descripcion">Descripción:</label>
    <textarea id="descripcion" name="descripcion" required></textarea>
    <br>
    <label for="precio">Precio:</label>
    <input type="number" id="precio" name="precio" step="0.01" required>
    <br>
    <label for="imagen">Imagen:</label>
    <input type="file" id="imagen" name="imagen" accept="image/*" required>
    <br>
    <button type="submit">Guardar Producto</button>
  </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
|<?php
include_once("footer.php");
?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>



</body>
</html>