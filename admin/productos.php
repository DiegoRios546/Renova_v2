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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/estilo.css" rel="stylesheet">
    
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

 


    <?php 
include_once("menu.php");
include_once("top-bar.php")
?>
    
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

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
                            <form action="insert.php?action=producto" method="POST" class="formulario mx-auto" enctype="multipart/form-data">
                            <h1>Crear nuevo servicio</h1>
                                <input class="input" type="text" name="nombre" placeholder="Nombre">
                                <input class="input" type="text" name="descripcion" placeholder="Descripcion">
                                <input class="input" type="number" name="precio" placeholder="Precio">
                                <input class="input" type="text" name="categoria" placeholder="Categoria">
                                <input class="input" type="text" name="estado" placeholder="Estado">
                                <label for="foto">Foto:</label>
                                <input type="file" name="foto" accept="image/*" required>
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
                            <a href="modificar.php?action=producto&id=<?= $row['id'] ?>" class="mx-1 my-1 edit text-decoration-none btn"><i class="fa fa-lg fa-pen"></i> Editar</a>
                            <a href="delete.php?action=producto&id=<?= $row['id'] ?>" class="mx-1 my-1 btn delete text-decoration-none" ><i class="fa fa-lg fa-trash"></i> Eliminar</a>
                            </div>
                            <h3 class="m-2 mt-5"><?= $row['name'] ?></h3>

                            <img class="img-servicio-movil " src="<?= $row['foto_ruta'] ?>" alt="..." />
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
                                            <td><p class=""><?= $row['id'] ?></p></td>
                                            <td><p class=""><?= $row['name'] ?></p></td>
                                            <td class=""><?= $row['description'] ?></td>
                                            <td class="">$ <?= $row['price'] ?></td>
                                            <td><img class="img-servicio" src="<?php echo $row['foto_ruta']; ?>" alt="..." /></td>
                                            <td ><?php
                                            if ($row['status'] == '1') {
                                            
                                                echo "ACTIVO";
                                                } else {
                                                echo "INACTIVO";
                                                } 
                                                            
                                                            
                                                    ?>
                                        
                                            </td>
                                            <td><?= $row['categoria'] ?></td>

                                            <td>
                                                <a href="modificar.php?action=producto&id=<?= $row['id'] ?>" class="mx-auto my-1 btn edit text-decoration-none">Editar</a>
                                                <br>
                                                <button data-id="<?= $row['id'] ?>" id="delete" class="mx-auto my-1 btn delete text-decoration-none" >Eliminar</button>
                                                <br>
                                                <a href="fotos.php?action=producto&id=<?= $row['id'] ?>" class="mx-auto my-1 btn btn-secondary text-decoration-none">Foto</a>
                                            

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
          window.location.href = `delete.php?action=producto&id=${id}`;
        }
      });
        });
      });
    });


  </script>


</body>
</html>