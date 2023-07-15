<?php
include_once("conexion.php");
// Obtener la página actual
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$items_per_page = 5; // Número de elementos por página

// Consulta para obtener el total de elementos
$total_items_query = "SELECT COUNT(*) AS total FROM productos";
$total_items_result = $conexion->query($total_items_query);
$total_items = $total_items_result->fetch_assoc()['total'];

// Calcular el número total de páginas
$total_pages = ceil($total_items / $items_per_page);

// Calcular el índice de inicio y fin de los elementos en la página actual
$start_index = ($current_page - 1) * $items_per_page;
$end_index = $start_index + $items_per_page;

// Consulta para obtener los elementos de la página actual
$items_query = "SELECT * FROM productos LIMIT $start_index, $items_per_page";
$items_result = $conexion->query($items_query);

?>










<!DOCTYPE html>
<html lang="en">
<head>
<title>Renova Depot</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/logo.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
</head>
<body onload="restoreScrollPosition()" onbeforeunload="saveScrollPosition()">
<?php
   include_once("menu.php");
   include_once("whatsapp.php");
?>
<section id="content">
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
<div class="row mx-auto align-items-center justify-content-center d-sm-none" style="width:100%;">
    <div class="d-flex mx-auto ">
        <div class="mx-auto p-3">
            <a href="#"><img class="img-fluid brand-img" src="assets/img/diseño.png" alt="Brand Logo"></a>
            <h3 class="text-center mt-1">Diseños</h3>
        </div>
        <div class="mx-auto p-3">
            <a href="#"><img class="img-fluid brand-img" src="assets/img/ladrillos.png" alt="Brand Logo"></a>
            <h3 class="text-center mt-2">Servicios</h3>
        </div>
    </div>
    <div class="d-flex mx-auto">
        <div class="mx-auto p-3">
            <a href="#"><img class="img-fluid brand-img" src="assets/img/eco.png" alt="Brand Logo"></a>
            <h3 class="text-center mt-2">Eco-ladrillo</h3>
        </div>
        <div class="mx-auto p-3">
            <a href="#"><img class="img-fluid brand-img" src="assets/img/inmobiliaria.png" alt="Brand Logo"></a>
            <h3 class="text-center mt-1">Inmobria</h3>
        </div>
    </div>
</div>
               
<div class="container d-none d-sm-block">
    <div class="row text-center">
        <div class="col-lg-9 mx-auto tempaltemo-carousel">
            <div class="row d-flex flex-row">
                <div class="col">
                    <div class="mx-auto m-1">
                        <div class="row">
                            <div class=" row col-3 p-md-4">
                                <a href="#"><img class="img-fluid brand-img" src="assets/img/diseño.png" alt="Brand Logo"></a>
                                <h6 class="icono mt-1">Diseños</h6>
                            </div>
                            <div class="row col-3 p-md-4">
                                <a href="#"><img class="img-fluid brand-img" src="assets/img/ladrillos.png" alt="Brand Logo"></a>
                                <h6 class="icono mt-2">Servicios</h6>
                            </div>
                            <div class="row col-3 p-md-4">
                                <a href="#"><img class="img-fluid brand-img" src="assets/img/eco.png" alt="Brand Logo"></a>
                                <h6 class="icono mt-2">Eco-ladrillo</h6>
                            </div>
                            <div class="row col-3 p-md-4">
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
                
           



<?php
   //include_once("productos.php");
?>


<div class="row d-none d-sm-block">
    <h1 class="p-2 m-1 linea">Las mejores promociones</h1>



    <div class="mx-auto m-auto ">
    <div class="pagination">

        <!-- Botones de páginas numeradas -->
        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
      <button onclick="location.href='?page=<?php echo $i; ?>'" class="pagination-button <?php echo ($i == $current_page) ? 'active' : ''; ?>">
        <?php echo $i; ?>
      </button>
    <?php endfor; ?>
    </div>

    <!-- Mostrar los elementos de la página actual -->
    <div class="pagination">
    <!-- Botón de página anterior -->
    <?php if ($current_page > 1): ?>
      <button onclick="location.href='?page=<?php echo ($current_page - 1); ?>'" class="pagination-button">&lt;</button>
    <?php endif; ?>

            <div id="item" class="row m-auto d-flex" >
                <!-- obtener los valores de la consulta -->
                <?php while ($row = $items_result->fetch_assoc()): ?>

                <!-- contenedor de un producto -->
                <div class=" producto m-2 row " >
                    <div class="card mb-4 product-wap rounded-0">
                        <!-- contenedor de imagen -->
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-producto img-fluid" src="data:image/png; base64, <?php echo base64_encode( $row['imagen']); ?>" alt="..." />
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-end justify-content-end">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success1 text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a></li>
                                    <li><a class="btn btn-success1 text-white mt-2" href="shop-single.html"><i class="fas fa-cart-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- contenedor de especificaciones -->
                        <div class="card-body m-auto">
                            <ul class="list-unstyled row my-1" style="height:100%;">
                                <li class="m-auto">
                                    <!-- nombre del producto -->
                                    <h3 class="fw-bolder"><?php echo $row['nombre'] ?></h3>
                                </li>
                                <li class="m-auto">
                                    <h5 class="d-none d-sm-block"><?php echo $row['descripcion']; ?></h5>
                                </li>
                                <li class="m-auto">
                                    <!-- estrellas -->
                                    <div class="rating d-flex align-items-center">
                                        <span class="star" data-value="1">&#9733;</span>
                                        <span class="star" data-value="2">&#9733;</span>
                                        <span class="star" data-value="3">&#9733;</span>
                                        <span class="star" data-value="4">&#9733;</span>
                                        <span class="star" data-value="5">&#9733;</span>
                                        <p class=" m-2">4.8, reseñas (24)</p>
                                    </div>
                                </li>
                                <li class="m-auto"><h4>id:14578</h4></li>
                                <li class="m-auto">
                                    <h5 class="">Antes:<span class="text-decoration-line-through text-dark">$<?php echo $row['precio-regu'] ?></span></h5>
                                </li>
                                <li class="m-auto"><h2 class="">$<?php echo $row['precio-desc'] ?></h2></li>
                                <li class="m-auto d-flex mx-auto"><h4 class="text-success1 m-auto border-bottom">Ahorras:$100.00</h4>    <button  class="btn p-2 btn-success1 m-auto" data-id="<?php echo $row['id']; ?>" href="#">
                                             <i class="fa fa-lg fa-cart-plus text-white p-2"></i>
                                        </button></li>
                                <li class="m-auto" id="carrito" style="margin-left:10px;">                            <!-- carrito -->
                                        
                                </li>
                            </ul>
                            

                        </div>
                    <!-- Fin contenedor de especificaciones -->
                    </div>
                </div>
            <!-- Fin contenedor de un producto -->
                 
             <!-- Fin de la consulta -->
             <?php endwhile; ?>
    </div>
            <!-- Botón de página siguiente -->
            <?php if ($current_page < $total_pages): ?>
      <button onclick="location.href='?page=<?php echo ($current_page + 1); ?>'" class="pagination-button">&gt;</button>
    <?php endif; ?>
    </div>

</div>




</section>

    <?php
   include_once("footer.php");
   include_once("sweetalert.php");
// Cerrar la conexión a la base de datos
$conexion->close();
?>



    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script type="text/javascript" src="assets/js/mostrar.js"></script>
    <!-- End Script -->
</body>

</html>