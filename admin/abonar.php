<?php
    include_once("conexion.php");

    $id = $_GET['id'];
    $total = $_GET['total'];
    $abono = $_POST['abono'];

    if ($abono <= $total){
    // Insertar el producto en la base de datos
    $sql = "INSERT INTO abonos VALUES (null, '$id', '$abono', NOW())";

    if ($con->query($sql) === TRUE) {
        echo '<script>alert("Abono exitoso")</script>';
        echo '<script>window.location="index.php"</script>';
    } else {
        echo '<script>alert("Error")</script>';
        echo '<script>window.location="index.php"</script>';
    }
    
        // Insertar el producto en la base de datos
        $sql = "UPDATE presupuestos SET subtotal = subtotal + $abono WHERE id = $id";
    
        if ($con->query($sql) === TRUE) {
            echo '<script>alert("Abono exitoso")</script>';
            echo '<script>window.location="index.php"</script>';
        } else {
            echo '<script>alert("Error")</script>';
            echo '<script>window.location="index.php"</script>';
        }
    
    } else{
        echo '<script>alert("Error la cantidad abonada es mayor al total del presupuesto")</script>';
        echo '<script>window.location="index.php"</script>';
    }
            // Insertar el producto en la base de datos
        



?>









