<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logo.png">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Renova Depot</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/estilo.css" rel="stylesheet">

</head>
<?php 
include_once("menu.php");
include_once("top-bar.php");

?>
<body id="page-top">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
         <!-- Main Content -->
        <div class="card p-3 col-10 mx-auto ">

            <div class="card-header">
            <?php

            //conexion
            include_once("conexion.php");

            //obtener id
            if (isset($_GET['id'])) {

                $id = $_GET['id'];
            
            // Consulta SQL informacion del presupuesto
            $sql = "SELECT * FROM presupuestos where id = $id";
            $result = $con->query($sql);
            
            if ($result -> num_rows > 0) {
                // Presentar los datos en una lista
            $row = $result->fetch_assoc()

            ?> 

            <!-- datos del presupuesto -->
                <div class="float-right mx-auto p-1 d-flex">
                    <h5 class="mx-2"><?php echo $row['direccion']; ?></h5>
                    <p class="mx-2"><?php echo $row['fecha_creacion']; ?></p>
                </div>
                    <h1 class="mt-5"><?php echo $row['titulo']; ?></h1>
                    <div class="float-right ">
                    <h2 >$ <?php echo $row['total_final']; ?>.00</h2>
                    </div>
        <!-- fin card-header -->
            </div>

            <div class="card-body">
                <div class="mx-auto">
                    <p class="form-control "><?php echo $row['descripcion']; ?></p>
                </div>
            <?php

                }
                 


             // Consulta SQL para la información del cliente
            $sql = "SELECT * FROM  clientes WHERE id_presupuesto = $id";
            $query = mysqli_query($con, $sql);

            $result = $con->query($sql);
            
            if ($result -> num_rows > 0) {
            // Presentar los datos en una lista
            $row = $result->fetch_assoc()

            ?>

            <!-- datos del cliente -->
                <div class="d-flex mx-auto">
                    <div class="m-auto">
                        <h3 class="mx-auto">Nombre</h3>
                        <h4 class="mx-auto"><?php echo $row['name']; ?></h4>
                    </div>
                    <div class="m-auto">
                        <h3 class="mx-auto">Telefono</h3>
                        <h4 class="mx-auto"><?php echo $row['phone']; ?></h4>
                    </div>
                </div>
            <?php

                }

            $query = mysqli_query($con, "SELECT * FROM presupuestos where id = $id");
            $resultado = mysqli_num_rows($query);

            if ($resultado > 0) {
                while ($row = mysqli_fetch_assoc($query)) {
                
                //obtenemos los valores del presupuesto
                $total = $row['total_final'];
                $subtotal = $row['subtotal'];
            
                if ($total == 0){
                    echo "Error el total del presupuesto no puede ser de $0";

                } else{
                    //calculamos el porcentaje que se lleva con el subtotal de los abonos
                    $porcentajesub = $subtotal / $total * 100;
                     
                    if ($porcentajesub < 100){

            ?>

            <!-- seccion de la barra progresiva -->
                <div class="barra-contenedor">
                    <h3 clas="">Progreso del pago</h3>
                    <div class=" mx-auto">
                        <div class="float-left">
                            <h2>$ <?php echo $row['subtotal']; ?>.00</h2>
                        </div>
                        
                        <div class="float-right ">
                            <h2 class="d-sm-block d-none">$ <?php echo $row['total_final']; ?>.00</h2>
                        </div>
                    </div>
                </div>
                
                <div class="barra-progreso mt-5" id="barra"> </div>
                <h3 class="mx-auto porcentaje text-center" id="porcentaje">0%</h3>
        <!-- fin card body -->
            </div>
            
            <!-- seccion de abonos -->
            <div>
                <h1 class="m-auto">Abonos</h1>
            <?php
                    //condicion para cuando el presupuesto esta pagado
                    } else {
                        echo "<div class='mx-auto text-center my-5'><h2 class='mx-auto'>Presupuesto pagado</h2></div>";
                        }
                    }
                }
            }     
            // Consulta SQL para los datos de los abonos
            $sql = "SELECT * FROM abonos where id_presupuesto = $id";
            $result = $con->query($sql);
            
            if ($result -> num_rows > 0) {
            // Presentar los datos en una lista
                while ($row = $result->fetch_assoc()): ?>
           
            <!-- tabla de abonos para celular -->
                <div class="d-sm-none">
                    <table class="table table-border mx-auto">
                    
                        <thead>
                            <th>Abono</th>
                            <th>Fecha</th>
                        </thead>
                        <tbody>
                            <td >$<?php echo $row['abono']; ?>.00</td>
                            <td ><?php echo $row['fecha']; ?></td>
                        </tbody>
                    </table>
                </div>
    
                    <!-- tabla de abonos -->
                <div class="d-none d-sm-block px-5 mx-5">
                    <table class="table table-border mx-auto">
                        <thead>
                            <th>Abono</th>
                            <th>Fecha</th>
                        </thead>
                        <tbody>
                            <td width="50%">$<?php echo $row['abono']; ?>.00</td>
                            <td width="50%"><?php echo $row['fecha']; ?></td>
                        </tbody>
                    </table>
                </div>
            <?php

                endwhile;
            }
        //en caso de no obtener el id
        } else{
            echo "Error no existe el presupuesto";
        } 
            ?>  
            </div>

            <style>
                  .modal-content {
    background-color: #fff;
    margin: 100px;
    border: 1px solid #888;
    width: 50%;
  }
            </style>
        <!-- ventana modal de abonos -->
            <div id="miModal" class="modal">
                <div class="modal-content mx-auto p-5" style>
                    <span class="cerrar" id="cerrarModal">&times;</span>
                    <h3 class="mx-auto">Ingrese la cantidad a abonar:</h3>
                    <form action="abonar.php?total=<?php echo $total; ?>&id=<?php echo $id; ?>" class="mx-auto" method="POST">
                        <div class="d-flex">
                            <img src="../assets/iconos/billete.png" class="mx-auto my-auto logo" alt="icono-billete">
                            <input type="text" class="form-control my-3" name="abono" placeholder="Abono">
                        </div>
                        <input type="submit" class="form-control btn btn-success1" value="Abonar">
                    </form>
                </div>
            </div>    
            <!-- boton de abonos -->
            <div class="mx-auto" id="abrirModal">
              <button class="btn-success1 btn p-2 m-3">
                 <h2 class="m-2"><img src="iconos/billete.png" class="mx-2 logo" alt="billetes">Dar abono</h2>
              </button>
            </div>
        </div>
    </div>



<script>
//funcion de la ventana modal
    document.addEventListener('DOMContentLoaded', function() {
    const abrirModal = document.getElementById('abrirModal');
    const cerrarModal = document.getElementById('cerrarModal');
    const miModal = document.getElementById('miModal');

    abrirModal.addEventListener('click', function() {
        miModal.style.display = 'block';
    });

    cerrarModal.addEventListener('click', function() {
        miModal.style.display = 'none';
    });

    window.addEventListener('click', function(event) {
        if (event.target === miModal) {
            miModal.style.display = 'none';
        }
    });
});

 
//funcion de la barra de procentaje
    document.addEventListener('DOMContentLoaded', function() {
    var barraProgreso = document.getElementById('barra');
    var porcentaje = document.getElementById('porcentaje');


    var valorDesdePHP = "<?php echo $porcentajesub; ?>";

    // calcular el porcentaje
    var totalTareas = 100; // Cambiar según el total de tareas en la base de datos
    var tareasCompletadas = valorDesdePHP;

    function actualizarBarra() {
        var progreso = tareasCompletadas - 1;
        barraProgreso.style.width = progreso + '%';
        porcentaje.textContent = progreso.toFixed(2) + '%';
    }


    // Simulación de proceso y actualización de la barra

        setTimeout(function() {
            if (tareasCompletadas < totalTareas) {
                tareasCompletadas++;
                actualizarBarra();
                simularProceso();
            }
        }, 500); // tiempo de espera entre tareas

});
</script>
</body>
</html>