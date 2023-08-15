<?php 

session_start();
if(isset($_POST["add_to_cart"]))
{
	
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
			echo '<script>alert("Producto añadido al carrito");</script>';
			echo '<script>window.location="index.php"</script>';
		}
		else
		{
			echo '<script>alert("El producto ya esta en el carro");</script>';
			echo '<script>window.location="index.php"</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}




if(isset($_GET["action"] ))
{
	if($_GET["action"] == "delete")
	{
		
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{

				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Producto eliminado");</script>';
				echo '<script>window.location="index.php"</script>';
			}
			else{
				echo '<script>alert("Producto eliminado");</script>';
				echo '<script>window.location="index.php"</script>';
			}
		}
	}


	if($_GET["action"] == "clear")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{

				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("El carro a sido vaciado");</script>';
				echo '<script>window.location="index.php"</script>';
			
		}
	}


	if($_GET["action"] == "add_client")
	{
		$titulo = $_POST['titulo'];
		$descripcion = $_POST['descripcion'];
		$total = $_GET['total'];
		$nombre = $_POST['nombre'];
		$direccion = $_POST['direccion'];
		$correo = $_POST['correo'];
		$telefono = $_POST['telefono'];

		    // Conexión a la base de datos (reemplaza con tus datos de conexión)
		include_once("../conexion.php");

		$sql = "INSERT INTO presupuestos VALUES (null, '$nombre', '$titulo', '$direccion', '$descripcion',  0, '$total', NOW(), 1)";

		$query = mysqli_query($con, $sql);

			
		

		$sql = "SELECT * FROM presupuestos ORDER BY id DESC LIMIT 1";

		$query = mysqli_query($con, $sql);
			
		
		$resultado = $con->query($sql);

		if ($resultado->num_rows > 0) {
		$row = $resultado->fetch_assoc();
		
		$idpre = $row['id'];

		if ($idpre > 0) {
						// Insertar el producto en la base de datos
		$sql = "INSERT INTO clientes VALUES (null, '$idpre','$nombre', '$telefono', '$correo', NOW(), 1)";

		if ($con->query($sql) === TRUE) {
			echo '<script>alert("Se guardaron los datos con exito");</script>';
			echo '<script>window.location="../index.php"</script>';
			foreach($_SESSION["shopping_cart"] as $keys => $values)
			{
		
					unset($_SESSION["shopping_cart"][$keys]);
					echo '<script>window.location="../index.php"</script>';
				
			}
		} else {
			echo '<script>alert("Error al guardar el los datos");</script>';
			echo '<script>window.location="../index.php"</script>';
		}
				
			} else {
				echo '<script>alert("Error al realizar el presupuesto")</script>';
				
			}
		}
		
}




	


}

?>