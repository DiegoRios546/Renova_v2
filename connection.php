


<?php
function connection() {
   //$host = "renova.bravoutd.com";
   //$user = "bravoutd_urenova";
   //$clave = "1Mochila.";
   //$bd = "bravoutd_renova";


   $host = "renova.bravoutd.com";
   $user = "bravoutd_urenova";
   $clave = "1Mochila.";
   $bds = "bravoutd_renova";
    // Crear la conexión
    $con = new mysqli($host, $user, $clave, $bds);

    // Verificar la conexión
    if ($con->connect_error) {
        die("Conexión fallida: " . $con->connect_error);
    }

    return $con;

    $con = connection();
}
?>
