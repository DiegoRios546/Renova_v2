<?php


include("connection.php");
$con = connection();

if (isset($_GET['action'])) {

$action = $_GET['action'];

if($action == 'producto') {
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $estado = $_POST['estado'];


    // Directorio para guardar las fotos
    $directorioFotos = "fotos/";
    $fotoNombre = $_FILES["foto"]["name"];
    $fotoRuta = $directorioFotos . $fotoNombre;
            
    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $fotoRuta)) {
    // Insertar el producto en la base de datos
    $sql = "INSERT INTO mis_productos VALUES (null, '$nombre', '$descripcion', '$precio', null, '$estado', 2, '$fotoNombre', '$fotoRuta')";

    if ($con->query($sql) === TRUE) {
        echo '<script>alert("Servicio agregado con exito")</script>';
        echo '<script>window.location="productos.php"</script>';
    } else {
        echo '<script>alert("Error al agregar servicio")</script>';
        echo '<script>window.location="productos.php"</script>';
    }

}
}
}



if($action == 'fotoproducto') {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
        $id = $_POST['id'];
        // Directorio para guardar las fotos
        $directorioFotos = "fotos/";
        $fotoNombre = $_FILES["foto"]["name"];
        $fotoRuta = $directorioFotos . $fotoNombre;
                
        if (move_uploaded_file($_FILES["foto"]["tmp_name"], $fotoRuta)) {
        // Insertar el producto en la base de datos
        $sql = "UPDATE mis_productos SET foto_nombre = '$fotoNombre', foto_ruta = '$fotoRuta' WHERE id= $id";
    
        if ($con->query($sql) === TRUE) {
            echo '<script>alert("Foto agregada con exito")</script>';
            echo '<script>window.location="productos.php"</script>';
        } else {
            echo '<script>alert("Error al agregar foto")</script>';
            echo '<script>window.location="productos.php"</script>';
        }
    
    }
    }
    }





if($action == 'usuario') {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = $_POST['nombre'];
        $pass = $_POST['pass'];
        $priv = $_POST['priv'];
    

            // Directorio para guardar las fotos
    $directorioFotos = "fotos/";
    $fotoNombre = $_FILES["foto"]["name"];
    $fotoRuta = $directorioFotos . $fotoNombre;

    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $fotoRuta)) {

        // Insertar el producto en la base de datos
        $sql = "INSERT INTO usuarios VALUES (null, '$nombre', '$pass', null, '$priv', '$fotoNombre', '$fotoRuta')";
    
        if ($con->query($sql) === TRUE) {
            echo '<script>alert("Usuario agregado con exito")</script>';
            echo '<script>window.location="usuarios.php"</script>';
        } else {
            echo '<script>alert("Error al agregar usuario")</script>';
            echo '<script>window.location="usuarios.php"</script>';
        }
    
       
    }
    }




}

    

}

$con->close();
?>






