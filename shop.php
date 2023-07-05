<!DOCTYPE html>
<html lang="en">

<head>
    <title>Renova Depot - Lista de Productos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/logo.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

    <link href="styles.css" rel="stylesheet" />
    <link href="assets/css/estilos.css" rel="stylesheet" />

</head>

<body>
<?php
   include_once("menu.php");
   include_once("whatsapp.php");
   include_once("conexion.php");

?>
<!-- boton flotante del carrito -->

<button href="#" class="btn-shop bg-success p-3 border" id="btnCarrito"><i class="fa fa-fw fa-cart-arrow-down text-white m-auto"></i> Carrito <span class="badge bg-success border" id="carrito">0</span></button>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</nav>

    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">
        <!-- categorias -->
            <div class="col-lg-3">
                <h1 class="h2 pb-4">Categories</h1>
                <ul class="list-unstyled templatemo-accordion">
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none btn" id="boton">
                            Gender
                            <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul class="collapsed show list-unstyled pl-3 d-none" id="categorias">
                            <li><a class="text-decoration-none" href="#">Men</a></li>
                            <li><a class="text-decoration-none" href="#">Women</a></li>
                            <li class="pb-3">
                        <?php
                        $query = mysqli_query($conexion, "SELECT * FROM categorias");
                        while ($data = mysqli_fetch_assoc($query)) { ?>
                            <a href="#" class="nav-link d-flex justify-content-between h3 text-decoration-none" category="<?php echo $data['categoria']; ?>"><?php echo $data['categoria']; ?></a>
                        <?php } ?>
                            </li>
                        </ul>
                    </li>
                   
                </ul>
            </div>
            <script>
document.getElementById("boton").addEventListener("click", function() {
  var texto = document.getElementById("categorias");
  if (texto.classList.contains("d-none")) {
    texto.classList.remove("d-none");
    texto.classList.add("d-block");
  } else {
    texto.classList.remove("d-block");
    texto.classList.add("d-none");
  }
});

            </script>

            <div class="col-md-9 row mx-auto m-1">
                <div class="mx-auto d-flex text-dark m-2 align-items-center justify-content-center">
                    <p>Productos: (  1 - 20 de 583  )</p>   
                    <div class=" d-flex  mx-auto">
                        <p class="m-1"> Ordenar por: </p>
                        <select class="form-control-sm p-1 m-1">
                            <option>Relevancia</option>
                            <option>Nombre</option>
                            <option>Precio: del mas bajo al mas alto</option>
                            <option>Precio: del mas alto al mas bajo</option>
                        </select>
                    </div>
                </div>
            



    

             <?php
                //$query = mysqli_query($conexion, "SELECT p.*, c.id AS id_cat, c.categoria FROM productos p INNER JOIN categorias c ON c.id = p.id_categoria");
                $query = mysqli_query($conexion, "SELECT t1.*, t2.imagen
                FROM productos AS t1
                JOIN imagenes AS t2 ON t1.id = t2.id_producto");
                $resultado = mysqli_num_rows($query);
                if ($resultado > 0) {
                    while ($data = mysqli_fetch_assoc($query)) { 
                         // Mostrar los registros en una tabla
                        ?>
    <div class="row ">
        <div class="col-md-4 ">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card rounded-0">
                                <!-- Product image-->
                               <img class="card-img rounded-0 img-fluid" src="data:image/png; base64, <?php echo base64_encode( $data['imagen']); ?>" alt="..." />
                               <span class="badge bg-red">OFERTA</span>
                               <!--
                               <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-end justify-content-end">
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-success text-white" href="shop-single.php"><i class="far fa-heart"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i class="far fa-eye"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2 agregar" data-id="" href="#"><i class="fas fa-cart-plus"></i></a></li>
                                    </ul>
                                </div>-->
                            </div>
                            <div class="card-body m-2">
                                        <!-- Product name-->
                                        <h3 class="fw-bolder"><?php echo $data['nombre'] ?></h2>
                                        <h5 class="d-none d-sm-block"><?php echo $data['descripcion']; ?></h5>

                                <div class="rating m-1">
                                    <span class="star" data-value="1">&#9733;</span>
                                    <span class="star" data-value="2">&#9733;</span>
                                    <span class="star" data-value="3">&#9733;</span>
                                    <span class="star" data-value="4">&#9733;</span>
                                    <span class="star" data-value="5">&#9733;</span>
                                </div>
                                    <div class="d-flex">
                                        <div>
                                        <!-- Product price-->
                                         <h6 class="m-1">Antes:<span class="m-1 text-decoration-line-through text-dark">$<?php echo $data['precio-regu'] ?></span></h6>
                                         <h6 class="m-1">$<?php echo $data['precio-desc'] ?></h6>
                                        </div>
                                        <!-- Product actions-->
                                        <div class="card-footer border-top-0 bg-transparent carrito" >
                                            <a class="btn p-1 bg-success " data-id="<?php echo $data['id']; ?>" href="#">
                                             <i class="fa fa-lg fa-cart-plus text-white m-2"></i></a>
                                        </div>
                                    </div>
                            </div>
                        </div>
            
                    <?php  }
                } 
              ?>
        </div>
    </div>
              
                    <ul class="pagination justify-content-center mt-5">

        <li class="page-item">
        <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="#">2</a>
        </li>
                        <li class="page-item disabled">
                            <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="shop.php?pagina="></a>
                        </li>
                    </ul>
                </div>
    </div>




     <?php
   include_once("footer.php");
include_once("sweetalert.php");
?>

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>