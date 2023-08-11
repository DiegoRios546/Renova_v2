<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logo.png">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Renova Depot</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">

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
            <!-- Begin Page Content -->
      <div class="container-fluid text-dark">
                <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between my-4">
          <h3 class=" text-dark mx-auto my-3">Bienvenido usuario al panel de administracion del sitio web Renova Depot.</h3>
        </div>
        <div class="d-block mx-auto m-auto">
          <div class="row mb-4 mx-auto justify-content-between">
            <div class="col-lg-8 col-md-10 mb-4">
              <div class="card h-100 shadow">
                <div class="card-header pb-0 d-flex">
                  <img src="../assets/img/presupuesto_pendiente.png" class="icono m-2" alt="">
                  <h5 class="my-auto m-1">Presupuestos pendientes</h5>
                </div>
                <div class="card-body p-3">
                  <div class="timeline timeline-one-side">
                    <div class="timeline-block mb-3">
                    <?php
                    include("connection.php");
                    $con = connection();

                    // Consulta para obtener los datos de la orden de compra
                    $sql = "SELECT * FROM presupuestos WHERE id = 7"; // Cambia el valor de 'id' según la orden que deseas mostrar

                    $query = mysqli_query($con, $sql);


                    ?>
                    <button class="notificacion btn" onclick="openlogin()">
                      <div class="ctn-noti d-block">
                      <?php while ($row = mysqli_fetch_array($query)): ?>
                        <span class="timeline-step">
                            <i class="material-icons text-success text-gradient"><?php echo $row['titulo'] ?></i>
                        </span>
                        <div class="timeline-content">
                            <h6 class="text-dark text-sm font-weight-bold mb-0">$<?php echo $row['total_final'] ?></h6>
                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0"><?php echo $row['fecha_creacion'] ?></p>
                      </div>
                      </div>                                 
                    </button>
                    <div class="detalles">
                      <button class="cerrar">X</button>
                      <h1>Detalles del presupuesto</h1>
                        <p>Número de Orden: <?php echo $row['id'] ?></p>
                        <p>Titulo: <?php echo $row['titulo'] ?></p>
                        <p>Descripcion: <?php echo $row['descripcion'] ?></p>
                        <p>Total: <?php echo $row['total_final'] ?></p>
                        <p>Fecha: <?php echo $row['fecha_creacion'] ?></p>
                        </div>

                        <?php endwhile; ?>
                                        <script>
                        $(document).ready(function() {
            
                            $(".detalles").hide();
                            $(".notificacion").click(function() {
                              $(".detalles").show();
                            });

                            $(".cerrar").click(function() {
                              $(".detalles").hide();
                              $(".notificacion").show();
                            });
                          });
                    </script>
          
                                    </div>
                            
                                </div>
                            </div>
                        </div>
                    </div> 

                    <div class="row mx-auto col-xl-3 col-sm-6 d-block mb-xl-0 mb-sm-4">
                        <div class="border-left-primary card shadow mb-4">
                            <div class="card-header p-3 pt-2">
                              <div class="d-flex bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                                <img src="../assets/img/presupuesto.png" class="m-2 icono">
                                <h5 class="my-auto m-2 text-light">Abonos</h5>
                              </div>
                              <div class="text-end pt-1">
                                <p class="mb-0 text-capitalize font-weight-bold text-primary">Abonos de hoy</p>
                                <h4 class="mb-0">$2,300.00</h4>
                              </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-3">
                              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+ $300.00 </span>de abono para el proyecto "Fachada - lomas"</p>
                            </div>
                        </div>
                    </div>
                </div>
           


                <div class="row mt-4 mx-auto">

                    <div class="col-lg-6 mt-4 mb-4 mx-auto">
                        <div class="card shadow text-dark z-index-2 ">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                              <div class="bg-gradient-warning shadow-primary border-radius-lg py-3 pe-1">
                                 <!-- Card Body -->
                                 <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                              </div>
                            </div>
                            <div class="card-body">
                              <h6 class="mb-0 ">Website Views</h6>
                              <p class="text-sm ">Last Campaign Performance</p>
                              <hr class="dark horizontal">
                              <div class="d-flex ">
                                <i class="material-icons text-sm my-auto me-1">schedule</i>
                                <p class="mb-0 text-sm"> campaign sent 2 days ago </p>
                              </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mb-3 mx-auto">
                        <div class="card shadow z-index-2 ">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                              <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Direct
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Social
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i> Referral
                                        </span>
                                    </div>
                                </div>
                              </div>
                            </div>
                            <div class="card-body">
                              <h6 class="mb-0 ">Completed Tasks</h6>
                              <p class="text-sm ">Last Campaign Performance</p>
                              <hr class="dark horizontal">
                              <div class="d-flex ">
                                <i class="material-icons text-sm my-auto me-1">schedule</i>
                                <p class="mb-0 text-sm">just updated</p>
                              </div>
                            </div>
                        </div>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>

</html>