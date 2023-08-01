<?php

include("connection.php");
$con = connection();

$id=$_POST['id'];
$name = $_POST['name'];
$descripcion = $_POST['description'];
$precio = $_POST['price'];

$sql="UPDATE mis_productos SET name='$name', description='$descripcion', price='$precio', img=null, status=1, id_categoria=1 WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>