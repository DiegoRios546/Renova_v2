<!DOCTYPE html>
<html lang="en">
<head>
    <title>Renova Depot - Lista de Productos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/logo.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
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
<button href="#" class="btn-shop bg-success p-3 border" id="btnCarrito">
    <i class="fa fa-fw fa-cart-arrow-down text-white m-auto"></i> 
    Carrito <span class="badge bg-success border" id="carrito">0</span>
</button>

 <!-- ventanas -->
 <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Library</li>
  </ol>
</nav>

 <!-- contenedor principal -->
 <div class="container py-5">
        <div class="row">
             <!-- barra de categorias -->
            <div class="col-lg-3">
                <h1 class="h2 pb-4">Categories</h1>
                <ul class="list-unstyled templatemo-accordion">
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Gender
                            <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul class="collapse show list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">Men</a></li>
                            <li><a class="text-decoration-none" href="#">Women</a></li>
                        </ul>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Sale
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseTwo" class="collapse list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">Sport</a></li>
                            <li><a class="text-decoration-none" href="#">Luxury</a></li>
                        </ul>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Product
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseThree" class="collapse list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">Bag</a></li>
                            <li><a class="text-decoration-none" href="#">Sweather</a></li>
                            <li><a class="text-decoration-none" href="#">Sunglass</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
                <!-- Fin de categorias -->

                 <!-- contenedor de productos -->
            <div class="col-lg-9 p-2">
                 <!-- contenedor de relevancia -->
                <div class="row">
                    <div class="col-md-6 pb-4">
                    <p>Productos: (  1 - 20 de 583  )</p> 
                    <p class="m-1"> Ordenar por: </p> 
                        <div class="d-flex">
                            <select class="form-control">
                                <option>Relevancia</option>
                                <option>Nombre</option>
                                <option>Precio: del mas bajo al mas alto</option>
                                <option>Precio: del mas alto al mas bajo</option>
                            </select>
                        </div>
                    </div>
                </div>
                 <!-- fin contenedor de relevancia-->

                <!-- contenedor de producto 1 -->
                <div class="row">
                <?php
            include_once("conexion.php");
            // Mostrar los registros en una tabla
            $query = mysqli_query($conexion, "SELECT * FROM productos");
            $resultado = mysqli_num_rows($query);
            if ($resultado > 0) {
                while ($data = mysqli_fetch_assoc($query)) { 
                //$query = mysqli_query($conexion, "SELECT t1.*, t2.imagen
                //FROM productos AS t1
                //JOIN imagenes AS t2 ON t1.id = t2.id_producto");
            ?>

                    <!-- contenedor de un producto 2 -->
                    <div class="col-md-3 producto m-1 row ">
                        <div class="card mb-4 product-wap rounded-0">
                            <!-- contenedor de imagen -->
                            <div class="card rounded-0">
                            <img class="card-img rounded-0 img-producto img-fluid" src="data:image/png; base64, <?php echo base64_encode( $data['imagen']); ?>" alt="..." />
                                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-end justify-content-end">
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-success1 text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a></li>
                                        <li><a class="btn btn-success1 text-white mt-2" href="shop-single.html"><i class="fas fa-cart-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- contenedor de especificaciones -->
                            <div class="card-body">
                                <!-- nombre del producto -->
                                <h3 class="fw-bolder"><?php echo $data['nombre'] ?></h2>
                                <h5 class="d-none d-sm-block"><?php echo $data['descripcion']; ?></h5>

                                <!-- estrellas -->
                                <div class="rating d-flex align-items-center">
                                    <span class="star" data-value="1">&#9733;</span>
                                    <span class="star" data-value="2">&#9733;</span>
                                    <span class="star" data-value="3">&#9733;</span>
                                    <span class="star" data-value="4">&#9733;</span>
                                    <span class="star" data-value="5">&#9733;</span>
                                    <p class="m-2">4.8  (17)</p>
                                </div>
                                <h4>id:14578</h4>

                                <!-- precios del producto -->
                                <div class="d-flex">
                                    <div>
                                        <h5 class="">Antes:<span class="text-decoration-line-through text-dark">$<?php echo $data['precio-regu'] ?></span></h5>
                                        <h2 class="">$<?php echo $data['precio-desc'] ?></h2>
                                        <h4 class="text-success1">Ahorras:$100.00</h4>
                                    </div>
                                <!-- carrito -->
                                    <div class=" border-top-0 bg-transparent carrito" >
                                        <button class="btn p-2 btn-success1 " data-id="<?php echo $data['id']; ?>" href="#">
                                            <i class="fa fa-lg fa-cart-plus text-white p-2"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <!-- Fin contenedor de especificaciones -->
                        </div>
                    </div>
                    <!-- Fin contenedor de un producto 2 -->
                    <?php  }
                    } 
                 ?>
                </div>
             <!-- Fin contenedor de producto 1 -->

                <!-- paginacion -->
                <div div="row">
                    <ul class="pagination pagination-lg justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="#" tabindex="-1">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="#">3</a>
                        </li>
                    </ul>
                </div>
                <!-- fin paginacion -->
            </div>
        <!-- fin contenedor de productos -->
    </div>
</div>
    <!-- End Content -->

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