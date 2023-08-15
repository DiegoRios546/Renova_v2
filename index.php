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
    <link rel="stylesheet" href="assets/css/styles1.css">
    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<!-- al recargar regresa a la posicion donde estabas -->
<body onload="restoreScrollPosition()" onbeforeunload="saveScrollPosition()">

<!-- barra de menu -->
<!-- barra de menu -->
<?php
include_once("menu.php");


include_once("admin/connection.php");
$con = connection();
?>
<!-- liston debajo del menu -->
  <div id="#inicio" class="mx-auto py-1 bg-red text-center">
    <a class="text-decoration-none text-dark" href="#promociones">
    <h5 class="my-1">¡Bienvenido a renovadepot!</h5>
    </a>
</div>

<!-- boton de whatsapp -->
<div id="whatsapp">
            <a class="btn-whatsapp  justify-content-center" 
            href=" https://api.whatsapp.com/send?phone=526181461515&text=Hola%20,te%20asesoramos%20por%20whatsapp%20gestiona%20tu%20compra%20por%20este%20canal." 
            target="_blanck"> 
                <img class="btn-whatsapp"  src="https://clientes.dongee.com/whatsapp.png" width="64" height="64" alt="Whatsapp">
            </a>
            <p class="d-none m-0 px-4 py-2">Te asesoramos por whatsapp,<br> cotiza nuestros servicios por este canal.</p>
        </div>

<div id="subir">
    <a href="#inicio" class="btn-subir">
        <img src="assets/iconos/flecha-arriba.png" class="icono" alt="">
    </a>
</div>

<section id="content">
<!-- funcion del carrusel -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const slider = document.querySelector('.slider');
    const prevButton = document.querySelector('.prev-button');
    const nextButton = document.querySelector('.next-button');

    let slideIndex = 0;

    showSlides(slideIndex);

    prevButton.addEventListener('click', () => {
        showSlides(slideIndex -= 1);
    });

    nextButton.addEventListener('click', () => {
        showSlides(slideIndex += 1);
    });

    function showSlides(index) {
        const slides = document.querySelectorAll('.slide');

        if (index < 0) {
            slideIndex = slides.length - 1;
        } else if (index >= slides.length) {
            slideIndex = 0;
        }

        slider.style.transform = `translateX(-${slideIndex * 100}%)`;
    }

    // Auto slide change
    setInterval(() => {
        showSlides(slideIndex += 1);
    }, 10000); // Cambia de slide cada 5 segundos
});


</script>

<style>
.slide {
    flex: 0 0 100%;
    height: auto;
    width: 100%;
}

.slider-container {
    width: 100%;
    height:500px;
    overflow: hidden;
    position: relative;
}


.slide img {
    width: 100%;
    margin-right:auto;
    margin-left:auto;
    height: 500px;
}
</style>
<!-- carrusel -->
<div class="slider-container mx-auto px-auto">
        <div class="slider ">
            <div class="slide"><img src="assets/img/fachada.png" class="mx-auto px-auto" alt="fachada"></div>
            <div class="slide"><img src="assets/img/cabaña1-c.png" class="mx-auto px-auto" alt="cabañas"></div>
            <div class="slide"><img src="assets/img/cabaña2-c.png" class="mx-auto px-auto" alt="cabañas"></div>
            <div class="slide"><img src="assets/img/diseño-arquitectonico.png" class="mx-auto px-auto" alt="fachada"></div>
        </div>
        <button class="prev-button">Anterior</button>
        <button class="next-button">Siguiente</button>
    </div>



<!-- mensaje -->
<div class="mx-5 p-1 my-4 bg-dark shadow text-center">
   <h3 class="">¿Qué estas buscando hoy?</h3>
   <p class="">Da click a un icono para ver nuestros productos. <br><span class="text-decoration-underline">Las mejores promociones al alcance de tu mano</span> </p>
</div>

        <!-- Iconos de navegacion -->
<div class="row mx-auto align-items-center justify-content-center d-sm-none my-auto" style="width:100%;">
    <div class="d-flex mx-auto my-auto">
        <div class="mx-auto p-4">
            <a href="#diseños"><img class="img-fluid brand-img" src="assets/img/diseño.png" alt="Brand Logo"></a>
            <h3 class="text-center mt-3">Diseños</h3>
        </div>
        <div class="mx-auto p-4">
            <a href="#servicios"><img class="img-fluid brand-img" src="assets/img/ladrillos.png" alt="Brand Logo"></a>
            <h3 class="text-center mt-2">Servicios</h3>
        </div>
    </div>
    <div class="d-flex mx-auto">
        <div class="mx-auto p-4">
            <a href="#eco-ladrillo"><img class="img-fluid brand-img" src="assets/img/eco.png" alt="Brand Logo"></a>
            <h3 class="text-center ">Eco-ladrillo</h3>
        </div>
        <div class="mx-auto p-4">
            <a href="#inmobiliaria"><img class="img-fluid brand-img" src="assets/img/inmobiliaria.png" alt="Brand Logo"></a>
            <h3 class="text-center mt-1">Inmobiliaria</h3>
        </div>
    </div>
</div>
            

<!-- iconos de navegacion para movil -->
<div class="container d-none d-sm-block">
    <div class="row text-center">
        <div class="col-lg-9 mx-auto tempaltemo-carousel">
            <div class="row d-flex flex-row">
                <div class="col">
                    <div class="mx-auto m-1">
                        <div class="row">
                            <div class=" row col-3 p-md-4">
                                <a href="#diseños"><img class="img-fluid brand-img" src="assets/img/diseño.png" alt="Brand Logo"></a>
                                <h6 class="icono mt-1">Diseños</h6>
                            </div>
                            <div class="row col-3 p-md-4">
                                <a href="#servicios"><img class="img-fluid brand-img" src="assets/img/ladrillos.png" alt="Brand Logo"></a>
                                <h6 class="icono mt-2">Servicios</h6>
                            </div>
                            <div class="row col-3 p-md-4">
                                <a href="#eco-ladrillo"><img class="img-fluid brand-img" src="assets/img/eco.png" alt="Brand Logo"></a>
                                <h6 class="icono mt-2">Eco-ladrillo</h6>
                            </div>
                            <div class="row col-3 p-md-4">
                                <a href="#inmobiliaria"><img class="img-fluid brand-img" src="assets/img/inmobiliaria.png" alt="Brand Logo"></a>
                                <h6 class="icono mt-1">Inmobiliaria</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                
           


<!-- seccion de servicios -->
<div class="row mx-3 my-5" id="servicios">
<div class="d-flex">
    <h2 class="p-2 m-1 linea fw-bolder mb-4"><img class="icono" src="assets/img/ladrillos.png" alt="Brand Logo"> Servicios de construccion</h2>
    </div>

    <div class="mx-auto m-auto ">
    <div class="mx-auto m-auto " >

<!-- Mostrar los elementos de la página actual -->
        <div id="item" class="row  m-1" >
            <!-- obtener los valores de la consulta -->
            <?php
    

// Obtener la página actual
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$items_per_page = 4; // Número de elementos por página

// Consulta para obtener el total de elementos
$total_items_query = "SELECT COUNT(*) AS total FROM mis_productos";
$total_items_result = $con->query($total_items_query);
$total_items = $total_items_result->fetch_assoc()['total'];

// Calcular el número total de páginas
$total_pages = ceil($total_items / $items_per_page);

// Calcular el índice de inicio y fin de los elementos en la página actual
$start_index = ($current_page - 1) * $items_per_page;
$end_index = $start_index + $items_per_page;

// Consulta para obtener los elementos de la página actual
$items_query = "SELECT * FROM mis_productos LIMIT $start_index, $items_per_page";
$items_result = $con->query($items_query);


 while ($row = $items_result->fetch_assoc()): 
 
 
    $descripcionLarga = $row['description'];

    // Calcula la mitad de la longitud del texto
    $mitadLongitud = strlen($descripcionLarga) / 2;
    
    // Recorta el texto para mostrar solo la mitad
    $descripcionCorta = substr($descripcionLarga, 0, $mitadLongitud);
 
 
 
 ?>

<style>
  .img-producto{
  height: 300px;
  width: auto;
  }

  .productos{
    width: 250px;
    height: auto;
  }
</style>
            <!-- contenedor de un producto -->
            <div class="productos mx-auto row">
            <div class=" mx-auto row " >
                <div class="card mb-4 product-wap rounded-0 ">
                    <!-- contenedor de imagen -->
                    <div class="card rounded-0 mx-auto">
                        <a href="shop-single.php?id=<?php echo $row['id'] ?>" target="_self">
                            <img class="img-producto img-fluid" src="admin/<?php echo $row['foto_ruta']; ?>" alt="..." />
                        </a>
                        <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-end justify-content-end">
                            <ul class="list-unstyled">
                                <li><a class="btn btn-success1 text-white mt-2" href="shop-single.php?id=<?php echo $row['id'] ?>"><img src="assets/iconos/ojo.png" class="icono m-2 my-auto" alt="icono-ojo"></a></li>
                                <li><a class="btn btn-success1 text-white mt-2" href="shop-single.php?id=<?php echo $row['id'] ?>"><img src="assets/iconos/carrito-blanco.png" class="icono m-2 my-auto" alt="icono-carrito-blanco"></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- contenedor de especificaciones -->
                    <div class="card-body m-auto">
                    <ul class="list-unstyled row my-1" style="height:100%;">
                            <li class="m-auto">
                                <!-- nombre del producto -->
                                <h3 class="fw-bolder"><?php echo $row['name'] ?></h3>
                            </li>
                            <li class="m-auto">
                                <h5 class=""><?php echo $descripcionCorta ?></h5>
                            </li>
                            <li class="m-auto">
                                <!-- estrellas -->
                                <div class="rating d-flex my-auto align-items-center">
                                    <span class="star" data-value="1">&#9733;</span>
                                    <span class="star" data-value="2">&#9733;</span>
                                    <span class="star" data-value="3">&#9733;</span>
                                    <span class="star" data-value="4">&#9733;</span>
                                    <span class="star" data-value="5">&#9733;</span>
                                    <p class=" m-2">4.8, (24) reseñas</p>
                                </div>
                            </li>
                            <li class="m-auto"><h4>Id:<?php echo $row['id'] ?></h4></li>
                            
                            <li class="m-auto"><h1 class="text-success1">$<?php echo $row['price'] ?></h1></li>
                            <li class="m-auto d-flex mx-auto" >
  
                                <a class="btn p-2 btn-success1 m-auto interest text-white" href="shop-single.php?id=<?php echo $row['id'];?>">
                                !Mas informacion!
                                </a>
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
         <div class="pagination">
<!-- Botón de página anterior -->
<?php if ($current_page > 1): ?>
  <a href="?page=<?php echo ($current_page - 1); ?>" class="p-2 mx-3 pagination-button"><img src="assets/iconos/flecha-izquierda.png" class="icono m-auto" alt="icono-flecha-izquierda"></i></a>
<?php endif; ?>
    <!-- Botones de páginas numeradas -->
    <?php for ($i = 1; $i <= $total_pages; $i++): ?>
  <button onclick="location.href='?page=<?php echo $i; ?>'" class="px-3 py-2 pagination-button <?php echo ($i == $current_page) ? 'active' : ''; ?>">
    <?php echo $i; ?>
  </button>
<?php endfor; ?>
            <!-- Botón de página siguiente -->
            <?php if ($current_page < $total_pages): ?>
  <a href="?page=<?php echo ($current_page + 1); ?>" class="p-2 mx-3  pagination-button"><img src="assets/iconos/flecha-derecha.png" class="icono m-auto" alt="icono-flecha-derecha"></a>
<?php endif; ?>
</div>

</div>
</div>

</div>






<div class="row mx my-5" id="eco-ladrillo">
    <div class="d-flex">
    <h2 class="p-2 m-1 linea fw-bolder mb-4"><img class="icono" src="assets/img/eco.png" alt="Brand Logo"> Tabique ecologico</h2>
    </div>

    <div class="mx-auto m-auto ">
    <div class="mx-auto m-auto " >

<!-- Mostrar los elementos de la página actual -->
        <div id="item" class="row  m-1" >
            <!-- obtener los valores de la consulta -->
            <?php

// Consulta SQL
$sql = "SELECT * FROM mis_productos where id_categoria = 6";
$result = $con->query($sql);


if ($result->num_rows > 0) {
    // Presentar los datos en una lista
    while ($row = $result->fetch_assoc()) { 
        
        $descripcionLarga = $row['description'];

        // Calcula la mitad de la longitud del texto
        $mitadLongitud = strlen($descripcionLarga) / 2;
        
        // Recorta el texto para mostrar solo la mitad
        $descripcionCorta = substr($descripcionLarga, 0, $mitadLongitud);
        ?>

            <!-- contenedor de un producto -->
            <div class="productos mx-5 row">
            <div class=" mx-auto row " >
                <div class="card mb-4 product-wap rounded-0 ">
                    <!-- contenedor de imagen -->
                    <div class="card rounded-0 mx-auto">
                        <a href="shop-single.php?id=<?php echo $row['id']; ?>" target="_self">
                        <img class="img-producto img-fluid" src="admin/<?php echo $row['foto_ruta']; ?>" alt="..." />
                        </a>
                        <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-end justify-content-end">
                            <ul class="list-unstyled">
                                <li><a class="btn btn-success1 text-white mt-2" href="shop-single.php?id=<?php echo $row['id']; ?>" target="_self"><img src="assets/iconos/ojo.png" class="icono m-2 my-auto" alt="icono-ojo"></a></li>
                                <li><a class="btn btn-success1 text-white mt-2" href="shop-single.php?id=<?php echo $row['id']; ?>" target="_self"><img src="assets/iconos/carrito-blanco.png" class="icono m-2 my-auto" alt="icono-carrito-blanco"></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- contenedor de especificaciones -->
                    <div class="card-body m-auto">
                    <ul class="list-unstyled row my-1" style="height:100%;">
                            <li class="m-auto">
                                <!-- nombre del producto -->
                                <h3 class="fw-bolder"><?php echo $row['name']; ?></h3>
                            </li>
                            <li class="m-auto">
                                <h5 class=""><?php echo $descripcionCorta; ?></h5>
                            </li>
                            <li class="m-auto">
                                <!-- estrellas -->
                                <div class="rating d-flex my-auto align-items-center">
                                    <span class="star" data-value="1">&#9733;</span>
                                    <span class="star" data-value="2">&#9733;</span>
                                    <span class="star" data-value="3">&#9733;</span>
                                    <span class="star" data-value="4">&#9733;</span>
                                    <span class="star" data-value="5">&#9733;</span>
                                    <p class=" m-2">4.8, (24) reseñas</p>
                                </div>
                            </li>
                            <li class="m-auto"><h4>Id:<?php echo $row['id']; ?></h4></li>
                            
                            <li class="m-auto"><h1 class="text-success1">$<?php echo $row['price']; ?></h1></li>
                            <li class="m-auto d-flex mx-auto" >
  
                                <a class="btn p-2 btn-success1 m-auto interest text-white" href="shop-single.php?id=<?php echo $row['id']; ?>" target="_self">
                                !Me interesa!
                                </a>
                            </li>
                        </ul>
                    </div>
                <!-- Fin contenedor de especificaciones -->
                </div>
            </div>
            </div>
        <!-- Fin contenedor de un producto -->
       <?php
       
          
    }
} else {
    echo "No se encontraron resultados.";
}

// Cerrar conexión

  ?> 
</div>

</div>
</div>

</div>






<div class="row mx my-5" id="inmobiliaria">
<div class="d-flex">
    <h2 class="p-2 m-1 linea fw-bolder mb-4"><img class="icono" src="assets/img/inmobiliaria.png" alt="Brand Logo"> Cabañas modulares</h2>
    </div>

    <div class="mx-auto m-auto ">
    <div class="mx-auto m-auto " >

<!-- Mostrar los elementos de la página actual -->
        <div id="item" class="row  m-1" >
            <!-- obtener los valores de la consulta -->
            <?php

// Consulta SQL
$sql = "SELECT * FROM mis_productos where id_categoria = 8";
$result = $con->query($sql);


if ($result->num_rows > 0) {
    // Presentar los datos en una lista
    while ($row = $result->fetch_assoc()) { 
        
        $descripcionLarga = $row['description'];

        // Calcula la mitad de la longitud del texto
        $mitadLongitud = strlen($descripcionLarga) / 2;
        
        // Recorta el texto para mostrar solo la mitad
        $descripcionCorta = substr($descripcionLarga, 0, $mitadLongitud);
        ?>

            <!-- contenedor de un producto -->
            <div class="productos mx-5 row">
            <div class=" mx-auto row " >
                <div class="card mb-4 product-wap rounded-0 ">
                    <!-- contenedor de imagen -->
                    <div class="card rounded-0 mx-auto">
                        <a href="shop-single.php?id=<?php echo $row['id']; ?>" target="_self">
                        <img class="img-producto img-fluid" src="admin/<?php echo $row['foto_ruta']; ?>" alt="..." />
                        </a>
                        <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-end justify-content-end">
                            <ul class="list-unstyled">
                                <li><a class="btn btn-success1 text-white mt-2" href="shop-single.php?id=<?php echo $row['id']; ?>" target="_self"><img src="assets/iconos/ojo.png" class="icono m-2 my-auto" alt="icono-ojo"></a></li>
                                <li><a class="btn btn-success1 text-white mt-2" href="shop-single.php?id=<?php echo $row['id']; ?>" target="_self"><img src="assets/iconos/carrito-blanco.png" class="icono m-2 my-auto" alt="icono-carrito-blanco"></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- contenedor de especificaciones -->
                    <div class="card-body m-auto">
                    <ul class="list-unstyled row my-1" style="height:100%;">
                            <li class="m-auto">
                                <!-- nombre del producto -->
                                <h3 class="fw-bolder"><?php echo $row['name']; ?></h3>
                            </li>
                            <li class="m-auto">
                                <h5 class=""><?php echo $descripcionCorta; ?></h5>
                            </li>
                            <li class="m-auto">
                                <!-- estrellas -->
                                <div class="rating d-flex my-auto align-items-center">
                                    <span class="star" data-value="1">&#9733;</span>
                                    <span class="star" data-value="2">&#9733;</span>
                                    <span class="star" data-value="3">&#9733;</span>
                                    <span class="star" data-value="4">&#9733;</span>
                                    <span class="star" data-value="5">&#9733;</span>
                                    <p class=" m-2">4.8, (24) reseñas</p>
                                </div>
                            </li>
                            <li class="m-auto"><h4>Id:<?php echo $row['id']; ?></h4></li>
                            
                            <li class="m-auto"><h1 class="text-success1">$<?php echo $row['price']; ?></h1></li>
                            <li class="m-auto d-flex mx-auto" >
  
                                <a class="btn p-2 btn-success1 m-auto interest text-white" href="shop-single.php?id=<?php echo $row['id']; ?>" target="_self">
                                !Me interesa!
                                </a>
                            </li>
                        </ul>
                    </div>
                <!-- Fin contenedor de especificaciones -->
                </div>
            </div>
            </div>
        <!-- Fin contenedor de un producto -->
       <?php
       
          
    }
} else {
    echo "No se encontraron resultados.";
}

// Cerrar conexión

  ?> 
</div>

</div>
</div>

</div>







<div class="row mx-3 my-5" id="diseños">
<div class="d-flex">
    <h2 class="p-2 m-1 linea fw-bolder mb-4"><img class="icono" src="assets/img/diseño.png" alt="Brand Logo"> Diseños arquitectonicos</h2>
    </div>

    <div class="mx-auto m-auto ">
    <div class="mx-auto m-auto " >

<!-- Mostrar los elementos de la página actual -->
        <div id="item" class="row  m-1" >
            <!-- obtener los valores de la consulta -->
            <?php

// Consulta SQL
$sql = "SELECT * FROM mis_productos where id_categoria = 7";
$result = $con->query($sql);


if ($result->num_rows > 0) {
    // Presentar los datos en una lista
    while ($row = $result->fetch_assoc()) { 
        
        $descripcionLarga = $row['description'];

        // Calcula la mitad de la longitud del texto
        $mitadLongitud = strlen($descripcionLarga) / 2;
        
        // Recorta el texto para mostrar solo la mitad
        $descripcionCorta = substr($descripcionLarga, 0, $mitadLongitud);
        ?>

            <!-- contenedor de un producto -->
            <div class="productos mx-auto row">
            <div class=" mx-auto row " >
                <div class="card mb-4 product-wap rounded-0 ">
                    <!-- contenedor de imagen -->
                    <div class="card rounded-0 mx-auto">
                        <a href="shop-single.php?id=<?php echo $row['id']; ?>" target="_self">
                        <img class="img-producto img-fluid" src="admin/<?php echo $row['foto_ruta']; ?>" alt="..." />
                        </a>
                        <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-end justify-content-end">
                            <ul class="list-unstyled">
                                <li><a class="btn btn-success1 text-white mt-2" href="shop-single.php?id=<?php echo $row['id']; ?>" target="_self"><img src="assets/iconos/ojo.png" class="icono m-2 my-auto" alt="icono-ojo"></a></li>
                                <li><a class="btn btn-success1 text-white mt-2" href="shop-single.php?id=<?php echo $row['id']; ?>" target="_self"><img src="assets/iconos/carrito-blanco.png" class="icono m-2 my-auto" alt="icono-carrito-blanco"></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- contenedor de especificaciones -->
                    <div class="card-body m-auto">
                    <ul class="list-unstyled row my-1" style="height:100%;">
                            <li class="m-auto">
                                <!-- nombre del producto -->
                                <h3 class="fw-bolder"><?php echo $row['name']; ?></h3>
                            </li>
                            <li class="m-auto">
                                <h5 class=""><?php echo $descripcionCorta; ?></h5>
                            </li>
                            <li class="m-auto">
                                <!-- estrellas -->
                                <div class="rating d-flex my-auto align-items-center">
                                    <span class="star" data-value="1">&#9733;</span>
                                    <span class="star" data-value="2">&#9733;</span>
                                    <span class="star" data-value="3">&#9733;</span>
                                    <span class="star" data-value="4">&#9733;</span>
                                    <span class="star" data-value="5">&#9733;</span>
                                    <p class=" m-2">4.8, (24) reseñas</p>
                                </div>
                            </li>
                            <li class="m-auto"><h4>Id:<?php echo $row['id']; ?></h4></li>
                            
                            <li class="m-auto"><h1 class="text-success1">$<?php echo $row['price']; ?></h1></li>
                            <li class="m-auto d-flex mx-auto" >
  
                                <a class="btn p-2 btn-success1 m-auto interest text-white" href="shop-single.php?id=<?php echo $row['id']; ?>" target="_self">
                                !Me interesa!
                                </a>
                            </li>
                        </ul>
                    </div>
                <!-- Fin contenedor de especificaciones -->
                </div>
            </div>
            </div>
        <!-- Fin contenedor de un producto -->
        <?php
       
          
    }
} else {
    echo "No se encontraron resultados.";
}

// Cerrar conexión

  ?> 
</div>

</div>
</div>

</div>







</section>

    <?php
   include_once("footer.php");
   include_once("sweetalert.php");
  // Cerrar la conexión a la base de datos
  $con->close();
?>



    <!-- Start Script -->
            <!-- fin del menu de moviles -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>