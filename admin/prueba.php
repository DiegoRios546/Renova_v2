<?php
   include_once("conexion.php");

// Consulta para obtener los elementos de la página actual
$items_query = "SELECT * FROM productos";
$result = $conexion->query($items_query);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

    <?php 
include_once("menu.php");
?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            <?php
include_once("top-bar.php");
?>

<div class="row px-5 " id="servicios">
    <h2 class="p-2 m-1 linea fw-bolder">Las mejores promociones</h2>



<!-- Mostrar los elementos de la página actual -->
        <div id="item" class="row" >
            <!-- obtener los valores de la consulta -->
            <?php while ($row = $result->fetch_assoc()): ?>

            <!-- contenedor de un producto -->
            <div class="productos mx-auto  row">
            <div class=" mx-auto m-3 row" >
                <div class="card mb-4 product-wap rounded-0">
                    <!-- contenedor de imagen -->
                    <div class="card-header rounded-0 mx-auto">
                      
                        <img class="img-pro img-fluid" src="data:image/png; base64, <?php echo base64_encode( $row['imagen']); ?>" alt="..." />
                
                    </div>

                    <!-- contenedor de especificaciones -->
                    <div class="card-body m-auto">
                    <ul class="list-unstyled row my-1" style="height:100%;">
                            <li class="m-auto">
                                <!-- nombre del producto -->
                                <h3 class="fw-bolder"><?php echo $row['nombre'] ?></h3>
                            </li>
                            <li class="m-auto">
                                <h5 class=""><?php echo $row['descripcion']; ?></h5>
                            </li>
                       <style>
                        .large{
                          width: 100%;
                        }
                       </style>
                            <li class="m-auto"><h1 class="">$<?php echo $row['precio-desc'] ?></h1></li>
                            <li class="m-auto"><button class="btn btn-success1 large mx-auto mt-2">
                                <h3>Agregar</h3>
                                </button>
                            </li>
                        </ul>
                    </div>
                <!-- Fin contenedor de especificaciones -->
                </div>
            </div>
            </div>
        <!-- Fin contenedor de un producto -->
             
         <!-- Fin de la consulta -->
         <?php endwhile; ?>

</div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>


</body>

</html>