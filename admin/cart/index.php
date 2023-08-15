<?php
session_start();
    // ... Configuración de la conexión a la base de datos ...
	include("../connection.php");
	$con = connection();

// Obtener la página actual
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$items_per_page = 6; // Número de elementos por página

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



?>


<!DOCTYPE html>
<html>
	<head>
		<title>Calculadora de presupuestos - Renova depot</title>
		<link rel="apple-touch-icon" href="../iconos/logo2.png">
    	<link rel="shortcut icon" type="image/x-icon" href="../iconos/logo2.png">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <!-- Incluir los archivos de Bootstrap desde un CDN -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/estilo.css" rel="stylesheet">
  
  <script src="script.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	</head>

	<!-- barra de menu -->
<?php
 include_once("../menu.php");
 ?>
<body>



<!-- barra de menu -->
<nav class="navbar shadow menudo d-block p-0 m-auto" style="background-color:#454546;">
<div class=" mx-auto d-block p-0">
    <div class="d-flex">
    <a href="#" class="p-1 d-sm-none" onclick="openNav()">
    <svg width="30" height="30" id="icoOpen">
        <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
        <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
        <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
    </svg>
  </a>
        <a class="d-flex text-decoration-none my-auto mx-auto" href="../index.php">
          <img src="../iconos/logo2.png" alt="logo" class="logo p-1 m-1">
          <p class="text-white my-auto ">Admin - Renova Depot</p>
        </a>
        
    <div class="d-sm-block d-none">
    <div class=" d-flex ml-auto justify-content-right align-items-right">
      <a href="../index.php" class="btn text-white text-decoration-none">Inicio</a>
      <a href="cart/index.php" class="btn text-white text-decoration-none">Calculadora</a>
      <a href="../usuarios.php" class="btn text-white text-decoration-none">Usuarios</a>
      <a href="../productos.php" class=" btn text-white text-decoration-none">Productos</a>
      <a href="../index.php" class="d-flex text-white btn text-decoration-none">Cerrar sesion <img src="../iconos/usuario.png" class="icono m-2 my-auto" alt="icono-usuario"></a>
    </div>
    </div>
    </div>
  </div>
</nav>

<style>
	.ctn-producto{
                width: 30%;
                min-height:40%;
                max-height:40%;
            }
			.img-cart{
height:300px;width: 100%;
}
</style>

		<div class="mx-auto" >

			<div class="d-flex row " >

			<?php
			
				if(mysqli_num_rows($items_result) > 0)
				{
					while($row = mysqli_fetch_array($items_result)):
				?>

<!-- formulario para agregar el producto al carro -->
			<div class="mx-auto ctn-producto p-4 " id="content">
				<form method="post" class="" action="actions.php?id=<?php echo $row["id"]; ?>">
					<div style=" background-color:#f1f1f1; border-radius:5px; padding:16px; heigh:100%;" align="start" class="shadow my-auto">
					<p class=" m-auto"><?php echo $row["name"]; ?></p>

					<img class="img-cart" src="../<?php echo $row['foto_ruta']; ?>" alt="..." /><br />

						<p class=" m-auto text-renova" >$ <?php echo $row["price"]; ?></p>

						<div class="d-flex mx-auto ">
						<label for="quantity" class="my-auto"><p>Cantidad:</p></label>
						<input type="number" name="quantity" value="1" class="form-control mx-1" />
						</div>

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="add btn btn-danger" value="Añadir al carrito" />

					</div>
				</form>
			</div>
			<?php endwhile;
			} ?>						            
		</div>

<!-- paginacion -->
			<div class="pagination mx-auto">
		 <?php if ($current_page > 1): ?>
  <a href="?page=<?php echo ($current_page - 1); ?>" class="my-auto mx-3 p-2 text-dark pagination-button"><i class="fas fa-chevron-left"></i></a>
<?php endif; ?>
    <!-- Botones de páginas numeradas -->
    <?php for ($i = 1; $i <= $total_pages; $i++): ?>
  <button onclick="location.href='?page=<?php echo $i; ?>'" class="px-3 py-2 pagination-button <?php echo ($i == $current_page) ? 'active' : ''; ?>">
    <?php echo $i; ?>
  </button>
<?php endfor; ?>
<?php if ($current_page < $total_pages): ?>
<a href="?page=<?php echo ($current_page + 1); ?>" class="my-auto mx-3 p-2 text-dark pagination-button"><i class="fas fa-chevron-right"></i></a>
<?php endif; ?>
</div>



	<!-- tabla de productos del carrito -->
	<div class="table-responsive p-5">
		<table class="table mb-5" border="0">
			<thead class="shadow">
				<tr class="shadow">
					<th align="left" >
						<h2 class="my-1">Detalles del presupuesto</h2>
						<h3 class="text-danger my-1 d-flex">Advertencia: <p class="mx-1 mt-2"> el sitio no almacena los articulos del presupuesto, asi que toma nota de los servicios y sus detalles.</p></h3>
					</th>
					<th></th>
					<th align="right">
						<a href="actions.php?action=clear" class="m-1 p-1 btn btn-danger text-decoration-none">
							<span>Limpiar carrito</span>
						</a>
					</th>
				</tr>
			</thead>

			<tbody class="shadow">
			<?php

			if(($_SESSION["shopping_cart"])){
				$total = 0; //iniciamos en 0 el total del carrito
				foreach($_SESSION["shopping_cart"] as $keys => $values){

			?>
				<tr class="mx-auto">
					<td width="70%" class="shadow">
						<h5 class="text-renova">Nombre del servicio:</h5>
						<?php echo $values["item_name"]; ?>
					</td>
					<td width="25%" class="shadow">
						<h5 class="text-renova">Precio: </h5>
						$<?php echo $values["item_price"]; ?>
					</td>
					<td width="5%" class="shadow">
						<a data-id="<?php echo $values["item_id"]; ?>" id="delete" class="btn btn-danger d-flex text-decoration-none"href="actions.php?action=delete&id=<?php echo $values["item_id"]; ?>" >
							<i class="fa fa-solid fa-trash my-auto"></i>
							<span class="mx-2">Eliminar</span>
						</a>
					</td>
				</tr>
				<tr class="mx-auto">
					<td width="70%" class="shadow">
						<p class="text-renova">Cantidad: </p>
						<?php echo $values["item_quantity"]; ?>
					</td>
					<td width="25%" class="shadow">
						<p class="text-success">Subtotal: </p>
						$<?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?>
					</td>
					<td width="5%" class="shadow"></td>				
				</tr>
			<?php

			$total = $total + ($values["item_quantity"] * $values["item_price"]);

			
		}

			?>
				<tr class="mx-auto">
					<td width="80%" align="right" class="shadow">
						<h3 class="text-success">Total: </h3>
					</td>
					<td width="10%" align="left" class="shadow">
						<h3>$<?php echo number_format($total, 2);  ?></h3> 
					</td>
					<td class="shadow"></td>
				</tr>
		

			</tbody>
		</table>

		
		<div colspan="3" class="shadow mt-5 px-5" align="center">
						<h2 class="mt-5">Continua con tu presupuesto</h2>
						<p class="mb-5">Para continuar con su presupuesto por favor llene el formulario con sus datos reales para evitar irregularidades.</p>
						<form action="actions.php?action=add_client&total=<?php echo number_format($total, 2); ?>" class="formulario mx-auto" method="post">
							<input type="text" class="input mx-auto" name="titulo" placeholder="Titulo del presupuesto" style="width:50%;" required>
							<input type="text" class="input mx-auto" name="descripcion" placeholder="Descripcion o comentarios del presupuesto" style="width:50%;" required>
							<input type="text" class="input mx-auto" name="nombre" placeholder="Ingrese su nombre completo" style="width:50%;" required>
							<input type="number" class="input mx-auto" name="telefono" placeholder="Ingrese su telefono" style="width:50%;" required>
							<input type="email" class="input mx-auto" name="correo" placeholder="Ingrese su correo electronico" style="width:50%;" required>
							<input type="text" class="input mx-auto" name="direccion" placeholder="Ingrese la direccion donde se realizara el proyecto" style="width:50%;" required>
							<input class="input mx-auto mb-5" type="submit" name="add_client" value="Agregar" style="width:50%;">
						</form>
					</div>
			
			<?php
				
			} else {
				echo "<p class='mx-5'>El carrito esta vacio</p>";
			}
			
			?>
		</div>

	</div>


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
