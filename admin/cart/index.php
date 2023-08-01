<?php
include 'Configuracion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>PHP Shopping Cart Tutorial</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap.min.css">
   

    <style>

    </style>
</head>
</head>
<body>
    <div class="ctn m-5">
        <div class="card">
            <div class="card-header">
                <h2 class="tittle">Bienvenido a la calculadora de presupuestos de Renova</h2>
                <p>Por favor seleccione los articulos que utilizara en su proyecto...</p>
            </div>

            <style>
              
                    body, a, p{
                        font-family: 'Montserrat', sans-serif;
                        font-size:40px;
                    }
                    .ctn-productos{
                        width:100%;
                    }
                    .producto{
                        width:100%;
                      
                    }
                .tittle{       
    font-size: 60px !important;
    font-weight: 300;
                    }

                    .btns-footer{
    background-color: #d4d3d3; position: sticky; bottom: 0; z-index: 1; width:100%;  
  }



                @media screen and (min-width: 1000px){
                    .ctn-productos{
                        width:80%;
                    }
                    .producto{
                        width:30rem;
                        border:2px solid black;
                        
                        
                    }
                    .tittle{
                        font-family: 'Montserrat', sans-serif;
    font-size: 40px !important;
    font-weight: 300;
                    }
                    body, a, p{
                        font-family: 'Montserrat', sans-serif;
                        font-size:20px;
                    }
                   
                }
            </style>
            <div class="card-body  mx-auto">
                <p>Mis Productos</p>
                <a href="VerCarta.php" class="cart-link" title="Ver Carta"><i class="glyphicon glyphicon-shopping-cart"></i></a>
                <div id="products" class="row mx-auto border ctn-productos">
                    <?php
                    //get rows query
                    $query = $db->query("SELECT * FROM mis_productos ORDER BY id DESC LIMIT 10");
                    if($query->num_rows > 0){ 
                        while($row = $query->fetch_assoc()){
                    ?>
                    <div class="producto mx-auto my-5">
                        <div class="">
                          
                                <h2 class="tittle"><?php echo $row["name"]; ?></h2>
                                <p class="text"><?php echo $row["description"]; ?></p>
                                <div class="row">
                                    <div class="">
                                        <p class=""><?php echo '$'.$row["price"].' USD'; ?></p>
                                    </div>
                                    <div class="">
                                        <a class="btn btn-success" href="AccionCarta.php?action=addToCart&id=<?php echo $row["id"]; ?>"><p>Agregar a la Carta</p></a>
                                    </div>
                                </div>
                         
                        </div>
                    </div>
                    <?php } }else{ ?>
                    <p>Producto(s) no existe.....</p>
                    <?php } ?>
                </div>
            </div>


        </div>
    </div>
    <div class="btns-footer d-flex mx-auto">
        <div class="mx-auto my-auto">
        <a href="index.php" class="btn btn-primary text-decoration-none text-dark"><p>Inicio</p></a>
        <a href="VerCarta.php" class="btn text-decoration-none text-dark"><p>Ver carrito</p></a>
        <a href="Pagos.php" class="btn text-decoration-none text-dark"><p>Pagos</p></a> 
        </div>    
    </div>
</body>
</html>