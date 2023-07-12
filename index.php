<!DOCTYPE html>
<html lang="en">
<head>
<title>Renova Depot</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/logo.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
</head>
<body>
<?php
   include_once("menu.php");
   include_once("whatsapp.php");
?>
<section>
<div width="100%" class="bg-red text-center">
    <a class="text-decoration-none text-white" href="shop.php">
        Toda la tienda en descuento Ver mas > 
    </a>
</div>

    <!-- Carrusel -->
<div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <!-- menu de abajo -->
    <ol class="carousel-indicators">
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
    </ol>

    <div class="carousel-inner bg-light " >
        <!-- objeto 1 -->
        <div class="carousel-item p-0 active">
            <div class="row">
                <div class="mx-auto m-auto ">
                    <img class="img-fluid" src="./assets/img/cachito.png" alt="">
                    <a class="ctn-oferta text-decoration-none p-3 text-dark" ><h1>Terrenos con 20% descuento<i class="fas fa-chevron-right"></i></h1></a>
                    <a class="ctn-oferta" href="shop.php"></a>
                </div>     
            </div>
        </div>
        <!-- objeto 2 -->
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="./assets/img/cachito.png" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left">
                            <h1 class="h1">Proident occaecat</h1>
                            <h3 class="h2">Aliquip ex ea commodo consequat</h3>
                            <p>
                                You are permitted to use this Zay CSS template for your commercial websites. 
                                You are <strong>not permitted</strong> to re-distribute the template ZIP file in any kind of template collection websites.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- controles -->
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
</div>
    <!-- Fin del carrusel -->


    <img src="./assets/img/descuento.png" alt="" class="mt-5 descuento" width="100%">


        <!-- Iconos de navegacion -->
<div class="container">
    <div class="row text-center">
        <div class="col-lg-9 mx-auto tempaltemo-carousel">
            <div class="row d-flex flex-row">
                <div class="col">
                    <div class="mx-auto m-1">
                        <div class="row">
                            <div class="col-3 p-md-5">
                                <a href="#"><img class="img-fluid brand-img" src="assets/img/diseño.png" alt="Brand Logo"></a>
                                <h6 class="icono mt-1">Diseños</h6>
                            </div>
                            <div class="col-3 p-md-5">
                                <a href="#"><img class="img-fluid brand-img" src="assets/img/servicios.png" alt="Brand Logo"></a>
                                <h6 class="icono mt-2">Servicios</h6>
                            </div>
                            <div class="col-3 p-md-5">
                                <a href="#"><img class="img-fluid brand-img" src="assets/img/ladrillo.png" alt="Brand Logo"></a>
                                <h6 class="icono mt-2">Eco-ladrillo</h6>
                            </div>
                            <div class="col-3 p-md-5">
                                <a href="#"><img class="img-fluid brand-img" src="assets/img/inmobiliaria.png" alt="Brand Logo"></a>
                                <h6 class="icono mt-1">Inmobria</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- contenedor de productos en promocion -->
                <!-- contenedor de producto 1 -->
                    <div class="row mx-5">
                    <h1 class="p-2 m-1 linea">Las mejores promociones</h1>
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
                                    <p class=" m-2">4.8, reseñas (24)</p>
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

</section>

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