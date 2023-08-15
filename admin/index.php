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

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/estilo.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body id="page-top">
<?php 
include_once("menu.php");
include_once("top-bar.php");
?>

    <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
    <div id="content">

            <!-- Begin Page Content -->
      <div class="container-fluid text-dark">
                <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between my-4">
          <p class=" text-dark mx-auto my-3">Bienvenido usuario al panel de administracion del sitio web Renova Depot.</p>
        </div>

        <style>
  .divs{
    width:70%;
    height:50%;
    margin-bottom:150px;
    margin-top:70px;
  }
</style>
<div class="divs mx-auto">
                <canvas id="miGrafica"></canvas>
                </div>

    <script>
        // Obtener los datos de la base de datos mediante PHP
        fetch('datos.php')
            .then(response => response.json())
            .then(data => {
                const fechas = data.map(item => item.titulo);
                const valores = data.map(item => item.total_final);

                // Crear la gráfica de líneas
                const ctx = document.getElementById('miGrafica').getContext('2d');
                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: fechas,
                        datasets: [{
                            label: 'Presupuestos del mes',
                            data: valores,
                            borderColor: 'blue',
                            backgroundColor: 'transparent',
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false
                    }
                });
            });
    </script>



        <div class="d-block mx-auto m-auto">
          <div class="row mb-4 mx-auto justify-content-between">
            <div class="col-lg-7 col-md-9 mx-auto mb-4">
              <div class="card h-100 shadow">
                <div class="card-header pb-0 d-flex">
                  <img src="../assets/img/presupuesto_pendiente.png" class="icono m-2" alt="">
                  <h4 class="my-auto m-1">Presupuestos pendientes</h4>
                </div>
                <div class="card-body mx-auto p-3">
                  <div class="timeline timeline-one-side">
                    <div class="timeline-block mb-3  mx-auto">
                    <?php
                    include("connection.php");
                    $con = connection();
                    
                    // Consulta para obtener los datos de la orden de compra
                    $sql = "SELECT * FROM presupuestos where status = 1"; // Cambia el valor de 'id' según la orden que deseas mostrar

                    $query = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_array($query)):

          
                    ?>
    

                    <a href="presupuestos.php?id=<?php echo $row['id']; ?>" class="col-12 notificacion border mx-auto m-2 btn text-decoration-none">
                      <div class="ctn-noti d-block">       
                            <h4  class="material-icons text-primary text-gradient"><?php echo $row['titulo']; ?></h4>
                            <p class="material-icons text-secondary text-gradient"><?php echo $row['descripcion']; ?></p>
                          <div class="timeline-content">
                              <h4 class="text-dark text-sm font-weight-bold mb-0">$<?php echo $row['total_final']; ?></h4>
                              <p class="text-secondary font-weight-bold text-xs mt-1 mb-0"><?php echo $row['fecha_creacion']; ?></p>
                          </div>
                      </div>                                 
                    </a>

                        <?php endwhile; ?>

          
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