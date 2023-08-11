<?php
    // ... Configuración de la conexión a la base de datos ...
	include("../connection.php");
	$con = connection();
include_once("actions.php");

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
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  
  <script src="script.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	</head>
	<body>

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
          <img src="../iconos/logo2.png" alt="logo" class="logo m-2">
          <h2 class="text-white my-auto mx-2 p-2">Admin - Renova Depot</h2>
        </a>
    </div>

    <div class="d-sm-block d-none">
    <div class=" d-flex mx-auto my-auto">
      <button class=" btn"><a href="../index.php" class="text-white text-decoration-none">Inicio</a></button>
      <button class="text-white btn">Mis presupuestos</button>
      <button class="d-flex text-white btn">
        Cerrar sesion
        <span><img src="../iconos/usuario.png" class="icono m-2 my-auto" alt="icono-usuario"></span>
      </button>
    </div>
    </div>
  </div>
</nav>
<?php include_once("../menu.php");?>


		<div class="m-5 " >

			<div class="d-flex row " >

			<?php
			include_once("actions.php");
				if(mysqli_num_rows($items_result) > 0)
				{
					while($row = mysqli_fetch_array($items_result)):
				?>

<!-- formulario para agregar el producto al carro -->
			<div class="mx-auto ctn-producto p-4 " id="content">
				<form method="post" class="" action="actions.php?action=add&id=<?php echo $row["id"]; ?>">
					<div style=" background-color:#f1f1f1; border-radius:5px; padding:16px; heigh:100%;" align="start" class="shadow my-auto">
					<p class=" m-auto"><?php echo $row["name"]; ?></p>

					<img class="img-producto" src="data:image/png; base64, <?php echo base64_encode( $row['img']); ?>" alt="..." /><br />

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



<div class="">
			<!-- tabla de productos del carrito -->
			<div class="table-responsive">
				<table class="table mb-5" border="0">
				<tbody class="shadow">
				<tr class="shadow mx-auto">
						<td colspan="2" align="left" class="m-auto"><h3>Detalles del presupuesto</h3></td>
						<td align="right"><a href="actions.php?action=clear" ><button class="btn btn-danger "><span class="mx-2">Limpiar carrito</span></button></a></td>
						<td></td>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					
					<tr class="mx-auto">
						<td width="70%" class="border shadow"><p class="text-renova">Nombre del servicio:</p><?php echo $values["item_name"]; ?></td>
						<td width="25%" class="border shadow"><p class="text-renova">Precio:</p>$ <?php echo $values["item_price"]; ?></td>
						<td width="5%" class="shadow">
						
							<a data-id="<?php echo $values["item_id"]; ?>" id="delete" class="btn btn-danger d-flex text-decoration-none"href="actions.php?action=delete&id=<?php echo $values["item_id"]; ?>" >
								<i class="fa fa-solid fa-trash my-auto"></i><span class="mx-2">Eliminar</span>
							</a>
						</td>
					</tr>
					<tr class="mx-auto">
						<td width="70%" class="shadow">
						<div class="mx-auto ">
						<p class="text-renova">Cantidad:</p>
						<p><?php echo $values['item_quantity']; ?></p>
						</div>
						</td>
						<td width="25%" class="border shadow"><p class="text-success">Subtotal:</p>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
				<td class="shadow"></td>
					</tr>

					

					</tr>
					</tbody>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
						$totalFormateado = number_format($total, 2); 
						$totalSinFormato = str_replace(',', '', $totalFormateado);
					?>
					<tr class="shadow mx-auto">
						<td width="80%" align="right" class="m-auto text-success">Total:</td>
						
						<td width="10%" align="left">$ <?php echo $totalSinFormato; ?></td>
					</tr>
	
					<tr class="shadow">
					<td colspan="3" class="shadow mt-5 mx-auto" align="center">
				<h2 class="mt-5">Continua con tu pedido</h2>
				<p class="my-5">Para continuar con su presupuesto por favor llene el formulario con sus datos, asegurese de que sean sus datos reales.</p>

				<div>
				<form action="actions.php?action=add_client&total=<?php echo $totalSinFormato; ?>" class="formulario mx-auto mb-5" method="post">
					<input type="text" class="input mx-auto" name="titulo" placeholder="Ingrese un titulo para su presupuesto" required>
					<input type="text" class="input mx-auto" name="descripcion" placeholder="Ingrese una descripcion del producto" required>
					<input type="text" class="input mx-auto" name="nombre" placeholder="Ingrese su nombre completo" required>
					<input type="text" class="input mx-auto" name="telefono" placeholder="Ingrese su telefono" required>
					<input type="text" class="input mx-auto" name="direccion" placeholder="Ingrese la direccion donde se realizara el trabajo" required>
					<input class="input mx-auto" type="submit" name="add_client" value="Agregar">
				</form>
				</div>
			</td>
			</tr>
					<?php
					}
					else{
						echo "<p class='mx-5'>El carrito esta vacio</p>";
					}
					?>
						
				</table>
			</div>
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
