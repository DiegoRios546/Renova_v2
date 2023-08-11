<?php
                    include("connection.php");
                    $con = connection();

$sql = "SELECT t1.*, t2.categoria 
FROM mis_productos AS t1
JOIN categorias AS t2 ON t2.id = t1.id_categoria";
$query = mysqli_query($con, $sql);
?>

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
    <link href="css/estilos.css" rel="stylesheet">
    
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

 

<!-- barra de menu -->
<nav class="navbar shadow menudo d-block p-0 mx-auto" style="background-color:#454546;">
<div class="container mx-auto d-flex p-0 mb-2">
    <div class="d-flex justify-content-center align-items-center">
    <a href="#" class="p-1" onclick="openNav()">
    <svg width="30" height="30" id="icoOpen">
        <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
        <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
        <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
    </svg>
  </a>
        <a class="d-flex text-decoration-none my-auto mx-auto" href="../index.php">
          <img src="iconos/logo2.png" alt="logo" class="logo m-2">
          <h2 class="text-white my-auto mx-2 p-2">Admin - Renova Depot</h2>
        </a>
    </div>

    <div class="d-sm-block d-none">
    <div class=" d-flex mx-auto my-auto">
      <button class=" btn"><a href="../index.php" class="text-white text-decoration-none">Inicio</a></button>
      <button class="text-white btn">Mis presupuestos</button>
      <button class="d-flex text-white btn">
        Cerrar sesion
        <span><img src="iconos/usuario.png" class="icono m-2 my-auto" alt="icono-usuario"></span>
      </button>
    </div>
    </div>
  </div>
</nav>
    
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


                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <p class="my-5">Como administrador puede realizar la creacion y modificacion de servicios dentro de Renova Depot, todos los cambios realizados aqui se veran afectados dentro del sitio web.</p>

                    <!-- DataTales Example -->
                    <script>
                        $(document).ready(function() {
                            $("#ctn-tabla").show();
                            $("#ctn-form").hide();
                            $("#tabla").hide();
                            $("#tabla").click(function() {
                                $("#ctn-tabla").show();
                                $("#ctn-form").hide();
                                $("#tabla").hide();
                            });

                            $("#form").click(function() {
                                $("#ctn-form").show();
                                $("#tabla").show();
                                $("#ctn-tabla").hide();
                            });
                            });
                    </script>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 row">
                             <!-- Page Heading -->
                            <h3 class="m-0 text-gray-800 mt-5">Servicios - Renova Depot</h3>
                            <div class="btns-tablas align-items-end m-2">
                                <button id="tabla" class="btn btn-secondary m-2">
                                <i class="fa fa-lg fa-arrow-left"></i>
                                Volver
                                </button>

                                <button id="form" class="btn btn-primary m-2">
                                    Nuevo
                                <i class="fa fa-lg fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="card-body contenedor" id="ctn-form">
                            <form action="insert.php" method="POST" class="formulario mx-auto" enctype="multipart/form-data">
                            <h1>Crear nuevo servicio</h1>
                                <input class="input" type="text" name="nombre" placeholder="Nombre">
                                <input class="input" type="text" name="descripcion" placeholder="Descripcion">
                                <input class="input" type="number" name="precio" placeholder="Precio">
                  
                                <input class="input" type="text" name="estado" placeholder="Estado">
                                <input class="input" type="submit" value="Agregar">
                            </form>
                        </div>

                        <div id="ctn-tabla">

                        <!-- tabla para moviles -->
                        <table class=" tabla-movil">
                        <?php while ($row = mysqli_fetch_array($query)): ?>
                            <tr class="border d-sm-none">
                        
                        <th >
                            <div class="btns-action">
                            <a href="modificar.php?id=<?= $row['id'] ?>" class="mx-1 my-1 edit text-decoration-none btn"><i class="fa fa-lg fa-pen"></i> Editar</a>
                            <a href="delete.php?id=<?= $row['id'] ?>" class="mx-1 my-1 btn delete text-decoration-none" ><i class="fa fa-lg fa-trash"></i> Eliminar</a>
                            </div>
                            <h3 class="m-2 mt-5"><?= $row['name'] ?></h3>

                            <img class="img-servicio-movil " src="data:image/png; base64, <?php echo base64_encode( $row['img']); ?>" alt="..." />
                            <h3 class="m-2"><?= $row['description'] ?></h3>
                            <h3 class="m-2 mb-5">$<?= $row['price'] ?></h3>
                        </th>
                        </tr>
                        <?php endwhile; ?>
                        </table>

                        <!-- tabla normal -->
                    <div class="d-sm-block d-none">
                            <table class="tabla text-dark" border="1">

                                <thead >
                                    <tr class="">
                                        <div class="">
                                        <th >ID</th>
                                        <th >Nombre</th>
                                        <th >Descripcion</th>
                                        <th >Precio</th>
                                        <th >Imagen</th>
                                        <th >Estado</th>
                                        <th >Categoria</th>
                                        <th >Acciones</th>
                                        </div>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    
                                    $sql = "SELECT t1.*, t2.categoria 
                                    FROM mis_productos AS t1
                                    JOIN categorias AS t2 ON t2.id = t1.id_categoria ORDER BY t1.id";
                                    $query = mysqli_query($con, $sql);
                                    while ($row = mysqli_fetch_array($query)): ?>
                                        <div>
                                        <tr >
                                            <th><p class=""><?= $row['id'] ?></p></th>
                                            <th><p class=""><?= $row['name'] ?></p></th>
                                            <th class=""><?= $row['description'] ?></th>
                                            <th class="">$ <?= $row['price'] ?></th>
                                            <th><img class="img-servicio" src="data:image/png; base64, <?php echo base64_encode( $row['img']); ?>" alt="..." /></th>
                                            <th ><?php
                                            if ($row['status'] == '1') {
                                            
                                                echo "ACTIVO";
                                                } else {
                                                echo "INACTIVO";
                                                } 
                                                            
                                                            
                                                    ?>
                                        
                                            </th>
                                            <th><?= $row['categoria'] ?></th>
                                        
                                            <td class="botones">
                                                <a href="modificar.php?id=<?= $row['id'] ?>" class="mx-auto my-1 btn edit text-decoration-none">Editar</a>
                                                
                                                <button data-id="<?= $row['id'] ?>" id="delete" class="mx-auto my-1 btn delete text-decoration-none" >Eliminar</button>


                                            </td>
                                        </tr>
                                        </div>


                                        
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        
                            
                        </div>
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
    |<?php
include_once("footer.php");
?>

    <!-- Bootstrap core JavaScript-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Agregar evento de clic a los botones de eliminar
      var botonesEliminar = document.querySelectorAll('.delete');
      botonesEliminar.forEach(function(boton) {
        boton.addEventListener('click', function() {
          var id = boton.getAttribute('data-id');

          Swal.fire({
        title: '¿Estás seguro?',
        text: 'Esta acción eliminará el producto permanentemente.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar'
      }).then((result) => {
        if (result.isConfirmed) {
          // Redirigir a eliminar_producto.php con el ID del producto
          window.location.href = `delete.php?id=${id}`;
        }
      });
        });
      });
    });


  </script>


</body>
</html>