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
<?php
include_once("menu.php");


include_once("admin/connection.php");
$con = connection();
?>



<!-- liston debajo del menu -->
  <div  class="mx-auto py-1 bg-red text-center">
    <a class="text-decoration-none text-dark" href="#promociones">
    <h5 class="my-1" id="#inicio">¡Bienvenido a renovadepot!</h5>
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









<!-- contenido -->
<section id="content">
<div class="container pb-5">
            <div class="row">
                
                <?php

                    $id = $_GET["id"];
                    $query = mysqli_query($con, "SELECT * FROM mis_productos WHERE id=$id");
                            
                    $resultado = mysqli_num_rows($query);
                    if ($resultado > 0) {
                        if($data = mysqli_fetch_assoc($query)){

                          $categoria = $data['id_categoria'];
                          
                ?>

                <div class="col-lg-5 mt-5">
                    <!-- imagen principal -->
                    <div class="card mx-1 mb-2">
                        <img class="card-img rounded-0 img-fluid" style="max-height:400px;" src="admin/<?php echo $data['foto_ruta']; ?>" alt="..." />
                    </div>
                    <div class="row m-auto">
                    <?php


$query = mysqli_query($con, "SELECT * FROM imagenes WHERE id_producto=$id");
        
$resultado = mysqli_num_rows($query);
if ($resultado > 0) {
    while ($data = mysqli_fetch_assoc($query)) {

      
?>

                    <!-- imagenes secundarias -->
                    
                    
                        <div class="col-4 p-auto mx-auto">
                        
                            <img class="" style="max-height:150px; min-height:150px; width:100%;" src="admin/<?php echo $data['foto_ruta']; ?>" alt="..." />
                            
                        </div>
                        
                   


                    <?php  }
                        } 

                        $query = mysqli_query($con, "SELECT * FROM mis_productos WHERE id=$id");
                            
                        $resultado = mysqli_num_rows($query);
                        if ($resultado > 0) {
                            if($data = mysqli_fetch_assoc($query)){
    
                              $categoria = $data['id_categoria'];

                        
                ?>
                 </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1><?php echo $data['name'] ?></h1>
                            <h2 class="text-success1">$<?php echo $data['price'] ?></h3>

                            <h3>Descripción:</h3>
                            <p><?php echo $data['description']; ?></p>
                                <div class="pb-3 mx-auto d-flex">
                                <a href=" https://api.whatsapp.com/send?phone=526181461515&text=Hola%20,te%20asesoramos%20por%20whatsapp%20gestiona%20tu%20compra%20por%20este%20canal." 
                                    target="_blanck" class="btn btn-success1 d-flex align-items-center my-auto text-decoration-none text-dark m-1">
                                      <img src="assets/iconos/whatsapp.png" class="icono" alt="">
                                      <p class="my-auto mx-1">Me interesa!</p>
                                    </a>
                                    <a class="text-decoration-none btn btn-success1 d-flex" href="tel:6181461515" class="btn btn-success1 d-flex align-items-center my-auto text-decoration-none text-dark m-1">
                                      <img src="assets/iconos/telefono.png" class="icono" alt="">
                                      <p class="my-auto mx-1 text-dark">Contactanos</p>
                                    </a>
                                </div>
                            <details>
                                <summary class="h3">¿Cómo se hace?</summary>
                                <p>Se coloca una parrilla de 25x25 cms en ambos sentidos y se ponen casetón o ladrillo para aligerar la losa catalana y en el caso de la losa solida no se coloca ninguno.</p>
                            </details>
                            <details>
                                <summary class="h3">¿Cómo se realizan los pagos?</summary>
                                <p>Se establecen trabajos en un periodo semanal y se realiza el pago, al final de la semana el supervisor de área dará por concluidas las tareas asignadas.

                                    Y programará los trabajos para el siguiente periodo en una orden de trabajo.</p>
                            </details>
                            <details>
                                <summary class="h3">¿Qué beneficios tengo al contratarlos?</summary>
                                <p>-Tu controlas la inversión. <br>
                                    -Tenemos 15 años de experiencia.<br>
                                    -Terminamos en los tiempos establecidos.<br>
                                    -Generamos un contrato digital para su seguridad.<br>
                                    -El medio de pago es digital y en efectivo.<br>
                                    -La cotización se realiza sin compromiso.</p>
                            </details>
                            <details>
                                <summary class="h3">¿Tengo garantía del trabajo?</summary>
                                <p>Para tú seguridad se cuenta con garantía de 3 meses por el servicio que se realice.</p>
                            </details>
                          <br>
                          <h3 class="p-2 m-auto w-auto linea ">Especificaciones</h3>
                          <table class="m-2">
                            <tr>
                                <th>Medidas</th>
                                <td>1x1</td>
                            </tr>
                            <tr>
                                <th>Ancho</th>
                                <td>1 Metro</td>
                            </tr>
                            <tr>
                                <th>Largo</th>
                                <td>1 Metro</td>
                            </tr>
                            <tr>
                                <th>Grueso</th>
                                <td>20 centímetros</td>
                            </tr>
                            <tr>
                                <th>Material</th>
                                <td>Cemento, barilla y ladrillo</td>
                            </tr>
                            <tr>
                                <th>Unidad de medida ㅤㅤㅤ</th>
                                <td>Metros</td>
                            </tr>
                          </table>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <?php   }
                        } }
                     }   
                ?>


<div class="container">





<div>
        <h2 class="p-2 m-1 w-auto linea ">Te podría interesar...</h2>
    </div>


    <div class="d-flex mx-auto p-auto m-auto">
    
    <?php

// Obtener la página actual
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$items_per_page = 1; // Número de elementos por página

// Consulta para obtener el total de elementos
$total_items_query = "SELECT COUNT(*) AS total FROM mis_productos where id_categoria = $categoria";
$total_items_result = $con->query($total_items_query);
$total_items = $total_items_result->fetch_assoc()['total'];

// Calcular el número total de páginas
$total_pages = ceil($total_items / $items_per_page);

// Calcular el índice de inicio y fin de los elementos en la página actual
$start_index = ($current_page - 1) * $items_per_page;
$end_index = $start_index + $items_per_page;

// Consulta para obtener los elementos de la página actual
$items_query = "SELECT * FROM mis_productos where id_categoria = $categoria LIMIT $start_index, $items_per_page";
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
            <a href="shop-single.php?id=<?php echo $row['id']; ?>" target="_self">
                <img class="img-producto img-fluid" src="admin/<?php echo $row['foto_ruta']; ?>?>" alt="..." />
            </a>
            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-end justify-content-end">
                <ul class="list-unstyled">
                    <li><a class="btn btn-success1 text-white mt-2" href="shop-single.php?id=<?php echo $row['id']; ?>"><img src="assets/iconos/ojo.png" class="icono m-2 my-auto" alt="icono-ojo"></a></li>
                    <li><a class="btn btn-success1 text-white mt-2" href="shop-single.php?id=<?php echo $row['id']; ?>"><img src="assets/iconos/carrito-blanco.png" class="icono m-2 my-auto" alt="icono-carrito-blanco"></a></li>
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

                    <a class="btn p-2 btn-success1 m-auto interest text-white" href="shop-single.php?id=<?php echo $row['id'];?>">
                    !Me interesa!
                    </a>
                </li>
            </ul>
        </div>
    <!-- Fin contenedor de especificaciones -->
    </div>
</div>
<?php endwhile; ?>
<div class="pagination">
<!-- Botón de página anterior -->
<?php if ($current_page > 1): ?>
  <a href="?id=<?php echo $id?>&page=<?php echo ($current_page - 1); ?>" class="p-2 mx-3 pagination-button"><img src="assets/iconos/flecha-izquierda.png" class="icono m-auto" alt="icono-flecha-izquierda"></i></a>
<?php endif; ?>
    <!-- Botones de páginas numeradas -->
    <?php for ($i = 1; $i <= $total_pages; $i++): ?>
  <button onclick="location.href='?id=<?php echo $id?>&page=<?php echo $i; ?>'" class="px-3 py-2 pagination-button <?php echo ($i == $current_page) ? 'active' : ''; ?>">
    <?php echo $i; ?>
  </button>
<?php endfor; ?>
            <!-- Botón de página siguiente -->
            <?php if ($current_page < $total_pages): ?>
  <a href="?id=<?php echo $id?>&page=<?php echo ($current_page + 1); ?>" class="p-2 mx-3  pagination-button"><img src="assets/iconos/flecha-derecha.png" class="icono m-auto" alt="icono-flecha-derecha"></a>
<?php endif; ?>
</div>
<!-- Fin contenedor de un producto -->

<!-- Fin de la consulta -->

</div>
</div>








<div class="d-flex linea ">
        <img src="assets/iconos/resenas.png" alt="icono-reseñas mx-2" class="icono my-auto"> 
        <h2 class="p-2 m-1 w-auto ">Reseñas</h2>
    </div>



                <style>
                    .review {
                        border: 1px solid #ccc;
                        border-radius: 5px;
                        
                    }

                    .rating {
                        color: orange;
                      
                    }

                </style>
                <?php



$id = $_GET["id"];

$query = mysqli_query($con, "SELECT * FROM mis_productos WHERE id=$id");
        
$resultado = mysqli_num_rows($query);
if ($resultado > 0) {
    while ($data = mysqli_fetch_assoc($query)) {

      $categoria = $data['id_categoria'];
?>




    <div class="mx-3">
      <form class="card mx-auto my-5" action="resenas.php?id=<?php echo $data['id'] ?>" method="POST">
        <div class="card-header">
          <h2 class="text-center">Quieres calificar este producto?</h2>
        </div>
        <div class="card-body my-4">
        <div class="mx-auto">
              <label for="nombre">Nombre (s): </label>
              <input type="text" name="nombre" class="form-control mx-auto mb-4" required>
            </div>
            <div class="mx-auto">
              <label for="correo">Correo electronico: </label>
              <input type="text" name="correo" class="form-control mx-auto mb-4" required>
            </div>

          <div class="mx-auto d-block mb-4">
            <label for="comentario">Comentario</label>
            <textarea type="text" name="comentario" class="form-control mx-auto mb-4" required></textarea>
          </div>


          <div class="text-center p-0">
              <h3>Estrellas</h3>
              <h6 class="text-danger text-decoration-underline">(Asegurese de seleccionar la casilla circular)</h6>
                <span class="fa fa-star" onclick="calificar(this)" id="1estrella">
                  <input type="radio" id="1estrella" name="valoracion" style="cursor: pointer;" value="1">
                </span>
                <span class="fa fa-star" onclick="calificar(this)" id="2estrella">
                  <input type="radio" id="2estrella" name="valoracion" style="cursor: pointer;" value="2">
                </span>
                <span class="fa fa-star" onclick="calificar(this)" id="3estrella">
                  <input type="radio" id="estrella4" name="valoracion" style="cursor: pointer;" value="3">
                </span>
                <span class="fa fa-star" onclick="calificar(this)" id="4estrella">
                  <input type="radio" id="estrella4" name="valoracion" style="cursor: pointer;" value="4">
                </span>
                <span class="fa fa-star" onclick="calificar(this)" id="5estrella">
                  <input type="radio" id="estrella5" name="valoracion" style="cursor: pointer;" value="5">
                </span>
            </div>
        </div>
        <button class="btn btn-primary m-4">Enviar</button>
      </form>
    </div>








    <div class="px-2 my-4" style="width:100%;">
    <?php  }
                        } else {
                          echo "No hay reseñas disponibles.";
                      }



                      $sql = "SELECT * FROM resenas where id_producto=$id";
                      $result = $con->query($sql);
                    
                      if ($result->num_rows > 0) {
                          while ($row = $result->fetch_assoc()) {
                              $nombre = $row['nombre'];
                              $valoracion = $row["valoracion"];
                              $comentario = $row["comentario"];
                              $fecha = $row["fecha"];
      
                              echo '<div class="my-3 p-2 review">';
                              echo "<p class='my-2 mx-auto'> $fecha</p>"; // Mostrar la fecha y hora
                              echo '<div class="d-flex mx-auto">';
                              echo '<img src="assets/iconos/usuario.png" alt="" class="icono">';
                              
                              echo "<h3 class='my-auto mx-2'>$nombre</h3>";
                              echo '</div>';
                              echo '<p class="my-auto mx-auto"><span class="rating">';
                              
                              // Mostrar estrellas según la calificación
                              for ($i = 1; $i <= 5; $i++) {
                                  if ($i <= $valoracion) {
                                      echo '★';
                                  } else {
                                      echo '☆';
                                  }
                              }
                              
                              echo "</span></p>";
                              
                              
                              echo "<h5 class='my-auto mx-auto'> $comentario</h5>";
                              echo '</div>';
                             
                          }
                      } else {
                          echo "No hay reseñas disponibles.";
                      }
      
                ?>


</div>





</div>





    <script>

var contador;

function calificar(item) {
  console.log(item);
  contador = item.id[0]; // captura el primer caracter
  let nombre = item.id.substring(1); // captura todo menos el primer caracter
  for (let i = 0; i < 5; i++) {
    if (i < contador) {
      document.getElementById((i + 1) + nombre).style.color = "orange";
    } else {
      document.getElementById((i + 1) + nombre).style.color = "black";
    }
  }
}


var contador2;

function calificar(item) {
  console.log(item);
  contador2 = item.id[0]; // captura el primer caracter
  let nombre = item.id.substring(1); // captura todo menos el primer caracter
  for (let i = 0; i < 5; i++) {
    if (i < contador2) {
      document.getElementById((i + 1) + nombre).style.color = "orange";
    } else {
      document.getElementById((i + 1) + nombre).style.color = "black";
    }
  }
}

</script>





          </div>

</section>
<?php
   include_once("footer.php");

  // Cerrar la conexión a la base de datos
  $con->close();
?>
</body>
</html>