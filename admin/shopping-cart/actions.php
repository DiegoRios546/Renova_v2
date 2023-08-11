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
			echo '<script>alert("Producto añadido al carrito")</script>';
			echo '<script>window.location="index.php"</script>';
		}
		else
		{
			echo '<script>alert("El producto ya esta en el carro")</script>';
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
				echo '<script>alert("Producto eliminado")</script>';
				echo '<script>window.location="index.php"</script>';
			}
			else{
				echo '<script>alert("Producto eliminado")</script>';
				echo '<script>window.location="index.php"</script>';
			}
		}
	}
}


if(isset($_GET["action"] ))
{
	if($_GET["action"] == "clear")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{

				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("El carro a sido vaciado")</script>';
				echo '<script>window.location="index.php"</script>';
			
		}
	}
}


if(isset($_GET["action"] ))
{
	if($_GET["action"] == "add_client")
	{
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];

    // Conexión a la base de datos (reemplaza con tus datos de conexión)
include_once("../conexion.php");

    // Insertar el producto en la base de datos
    $sql = "INSERT INTO clientes VALUES (null, '$nombre', '$telefono', '$direccion', NOW(), 1)";

    if ($conexion->query($sql) === TRUE) {
		echo '<script>alert("Se realizo el presupuesto con exito")</script>';
		echo '<script>window.location="../index.php"</script>';
    } else {
		echo '<script>alert("Error al guardar el presupuesto")</script>';
		echo '<script>window.location="../index.php"</script>';
    }



	$titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $total = $_GET['total'];

    // Conexión a la base de datos (reemplaza con tus datos de conexión)
include_once("../conexion.php");

    // Insertar el producto en la base de datos
    $sql = "INSERT INTO presupuestos VALUES (null, '$nombre', '$titulo', '$descripcion', 0, '$total', NOW(), 1)";

    if ($conexion->query($sql) === TRUE) {

		echo '<script>window.location="../index.php"</script>';
    } else {

		echo '<script>window.location="../index.php"</script>';
    }
    $conexion->close();
	foreach($_SESSION["shopping_cart"] as $keys => $values)
	{

			unset($_SESSION["shopping_cart"][$keys]);
			echo '<script>window.location="../index.php"</script>';
		
	}

}
}
?>