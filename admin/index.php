<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logo.png">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
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
                    <h3 class=" text-gray-800">Bienvenido usuario</h3>
                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                        <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
                    </a>
                </div>



                <div class="d-block mx-auto m-auto">

              
                <div class="row mb-4 mx-auto justify-content-between">
                    <div class="col-lg-8 col-md-10 mb-4">
                        <div class="card h-100 shadow">
                            <div class="card-header pb-0">
                                <h6>Orders overview</h6>
                                    <p class="text-sm">
                                        <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
                                        <span class="font-weight-bold">24%</span> this month
                                    </p>
                            </div>
                            <div class="card-body p-3">
                                <div class="timeline timeline-one-side">
                                    <div class="timeline-block mb-3">
                                        <span class="timeline-step">
                                            <i class="material-icons text-success text-gradient">notifications</i>
                                        </span>
                                        <div class="timeline-content">
                                            <h6 class="text-dark text-sm font-weight-bold mb-0">$2400, Design changes</h6>
                                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 7:20 PM</p>
                                        </div>
                                    </div>
                                    <div class="timeline-block mb-3">
                                        <span class="timeline-step">
                                            <i class="material-icons text-danger text-gradient">code</i>
                                        </span>
                                        <div class="timeline-content">
                                            <h6 class="text-dark text-sm font-weight-bold mb-0">New order #1832412</h6>
                                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 11 PM</p>
                                        </div>
                                    </div>
                                    <div class="timeline-block mb-3">
                                        <span class="timeline-step">
                                            <i class="material-icons text-info text-gradient">shopping_cart</i>
                                        </span>
                                        <div class="timeline-content">
                                            <h6 class="text-dark text-sm font-weight-bold mb-0">Server payments for April</h6>
                                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 9:34 PM</p>
                                        </div>
                                    </div>
                                    <div class="timeline-block mb-3">
                                        <span class="timeline-step">
                                            <i class="material-icons text-warning text-gradient">credit_card</i>
                                        </span>
                                        <div class="timeline-content">
                                            <h6 class="text-dark text-sm font-weight-bold mb-0">New card added for order #4395133</h6>
                                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">20 DEC 2:20 AM</p>
                                        </div>
                                    </div>
                            
                                </div>
                            </div>
                        </div>
                    </div> 


                    <style>

                    </style>
                    <div class="row mx-auto col-xl-3 col-sm-6 d-block mb-xl-0 mb-sm-4">
                        <div class="border-left-primary card shadow mb-4">
                            <div class="card-header p-3 pt-2">
                              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">person</i>
                              </div>
                              <div class="text-end pt-1">
                                <p class="mb-0 text-capitalize font-weight-bold text-primary">Today's Users</p>
                                <h4 class="mb-0">2,300</h4>
                              </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-3">
                              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
                            </div>
                        </div>

                        <div class="border-left-primary card shadow text-dark">
                            <div class="card-header p-3 pt-2">
                              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">person</i>
                              </div>
                              <div class="text-end pt-1">
                                <p class="mb-0 text-capitalize font-weight-bold text-primary">Today's Users</p>
                                <h4 class="mb-0">2,300</h4>
                              </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-3">
                              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
                            </div>
                        </div>
                    </div>
                </div>
           


                <div class="row mt-4 mx-auto">

                    <div class="col-lg-7 col-md-8 mt-4 mb-4 mx-auto">
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

                    <div class="col-lg-5 mt-4 mb-3 mx-auto">
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

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>