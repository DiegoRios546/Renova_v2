<!DOCTYPE html>
<html lang="en">
<head>
<title>Renova Depot</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/logo.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/styles1.css">
    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
</head>
<!-- al recargar regresa a la posicion donde estabas -->
<body onload="restoreScrollPosition()" onbeforeunload="saveScrollPosition()">





<!-- barra de menu -->
<nav class="navbar shadow menu d-block p-1 mx-auto">
<div class="container mx-auto d-flex p-0 mb-2">
    <div class="d-flex justify-content-center align-items-center">
        <a class="" href="index.php">
          <img src="assets/img/logo2.png" alt="logo" class="logo">
        </a>
        <a href="" class="d-flex text-decoration-none text-dark">
        <span><img src="assets/iconos/mapa.png" class="icono m-2 my-auto" alt="icono-mapa"></span>
          <h6 class="m-0" >
          Oficina: Paseo de las Parras #229 <br>
          Valle Verde #34284 Durango, Dgo. 
          </h6>
        </a>
    </div>

            <!-- barrra de buscador -->
            <form class="shadow form mx-auto m-auto ">
                        <div class="input-group">
                            <input type="text" class="search form-control bg-light border-0 small " placeholder="¿Qué estás buscando?"aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn border" type="button" id="btnsearch">
                                <span><img src="assets/iconos/lupa.png" class="icono m-1" alt="icono-lupa"></span>
                                </button>
                            </div>
                        </div>
                    </form>

                 <!-- iconos -->

        <button class="shadow btn justify-content-center align-items-center d-flex text-dark" onclick="openlogin()">
        <span><img src="assets/iconos/usuario.png" class="icono m-1" alt="icono-usuario"></span>
            <p class="d-none d-sm-block m-1">Inicia Sesión</p>
          </button> 
  </div>
</nav>
    <!-- fin de barra del menu -->
    

    <?php 

    //conexion
    function connection() {
        //$host = "renova.bravoutd.com";
        //$user = "bravoutd_urenova";
        //$clave = "1Mochila.";
        //$bd = "bravoutd_renova";
     
     
        $host = "localhost";
        $user = "root";
        $clave = "";
        $bds = "renova";
         // Crear la conexión
         $con = new mysqli($host, $user, $clave, $bds);
     
         // Verificar la conexión
         if ($con->connect_error) {
             die("Conexión fallida: " . $con->connect_error);
         }
     
         return $con;
     
  
     }
      
     $con = connection();


    if (isset($_SESSION)){
      session_destroy();
    }
    
    $entrar="";
       //Crear conexion
      //conexion
    
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
    
       $us=$_POST['nombre'];
       $ps=$_POST['pass'];

       //consulta a la base de datos
       $consulta="SELECT * from usuarios WHERE usuario='$us' AND password='$ps'";
       $resultado=$con->query($consulta);
    
       if ($resultado->num_rows > 0){
    
           while ($fila=$resultado->fetch_assoc()){
    
            $priv=$fila['privilegio'];
               
              
               $_SESSION['usuario']=$us;
               $_SESSION['password']=$ps;
               $_SESSION['privilegio']=$priv;
    
               //Entre al menu de opciones 
          
            } if($priv=="admin") {
              $entrar="admin";
            } else if($priv=="estandar") {
              $entrar="estandar";
            }
        } else {
      $entrar="error1";
        }
    }
    
    ?>
 <!-- Ventana modal -->
<div id="modal_login" class="modal mx-auto">
  <div class="modal-content mx-auto">
    <div class="login mx-auto">
      <div class="login-container-up">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>¡BIENVENIDO!</h2>
        <h4>Ingresa a tu cuenta de RENOVA DEPOT</h4>
      </div>

      <div class="login-container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <div class="input-wrapper">
            <div class="d-flex">
            <span><img src="assets/iconos/usuario.png" class="icono my-3" alt="icono-usuario" ></span>
            <input type="text" class="inputs"  placeholder="Usuario" name="nombre" required />
            </div>
            <div class="d-flex">
            <span><img src="assets/iconos/bloquear.png" class="icono my-3" alt="icono-bloquear" ></span>
            <input type="password" class="inputs" id="password" placeholder="Contraseña" name="pass" required />
            </div>
          </div>
          <button type="submit" class="login-btn" value="iniciar sesion" name="btningresar">Iniciar sesión</button>
          <div class="forgot-password">
            <a href="#">Olvidé mi contraseña</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


  <script>
    // Obtener la referencia al elemento de la ventana modal
    var login = document.getElementById("modal_login");

    // Obtener el elemento para cerrar la ventana modal
    var closeBtn = document.getElementsByClassName("close")[0];

    // Función para abrir la ventana modal
    function openlogin() {
      login.style.display = "block";
    }


    // Función para cerrar la ventana modal
    function closeModal() {
      login.style.display = "none";

    }

    // Cerrar la ventana modal al hacer clic fuera del contenido
    window.onclick = function(event) {
      if (event.target == login) {
        login.style.display = "none";
      }
    };
  </script>


        <!-- fin del menu de moviles -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<!-- fin barra de menu -->


<!-- liston debajo del menu -->
  <div  class="mx-auto py-1 bg-red text-center">
    <a class="text-decoration-none text-dark" href="#promociones">
    <h5 class="my-1" id="#inicio">¡Bienvenido a renovadepot!</h5>
    </a>
</div>

<!-- boton de whatsapp -->
<div id="whatsapp">
            <a class="btn-whatsapp  justify-content-center" 
            href=" https://api.whatsapp.com/send?phone=526181461515&text=Hola%20,te%20asesoramos%20por%20whatsapp%20gestiona%20tu%20compra%20por%20este%20canal." 
            target="_blanck"> 
                <img class="btn-whatsapp"  src="https://clientes.dongee.com/whatsapp.png" width="64" height="64" alt="Whatsapp">
            </a>
            <p class="d-none m-0 px-4 py-2">Te asesoramos por whatsapp,<br> cotiza nuestros servicios por este canal.</p>
        </div>

<div id="subir">
    <a href="#inicio" class="btn-subir">
        <img src="assets/iconos/flecha-arriba.png" class="icono" alt="">
    </a>
</div>









<!-- contenido -->
<section id="content">
<div class="container pb-5">
            <div class="row">
                
                <?php

                    $query = mysqli_query($con, "SELECT * FROM mis_productos WHERE id=1");
                            
                    $resultado = mysqli_num_rows($query);
                    if ($resultado > 0) {
                        while ($data = mysqli_fetch_assoc($query)) {
                ?>

                <div class="col-lg-5 mt-5">
                    <!-- imagen principal -->
                    <div class="card mb-3">
                        <img class="card-img rounded-0 img-fluid" src="data:image/png; base64, <?php echo base64_encode( $data['img']); ?>" alt="..." />
                    </div>

                    <!-- imagenes secundarias -->
                    <div class="d-flex m-auto">
                        <div class="row col-3 m-1">
                            <img class="card-img rounded-0 img-fluid" src="data:image/png; base64, <?php echo base64_encode( $data['img']); ?>" alt="..." />
                        </div>
                        <div class="row col-3 m-1">
                            <img class="card-img rounded-0 img-fluid" src="data:image/png; base64, <?php echo base64_encode( $data['img']); ?>" alt="..." />
                        </div>
                        <div class="row col-3 m-1">
                            <img class="card-img rounded-0 img-fluid" src="data:image/png; base64, <?php echo base64_encode( $data['img']); ?>" alt="..." />
                        </div>
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1><?php echo $data['name'] ?></h1>
                            <h2 class="text-success1">$<?php echo $data['price'] ?></h3>

                            <h3>Descripción:</h3>
                            <p><?php echo $data['description']; ?></p>
                                <div class="pb-3 mx-auto d-flex">
                                    <a class="btn btn-success1 d-flex align-items-center my-auto text-decoration-none text-dark m-1"><img src="assets/iconos/whatsapp.png" class="icono" alt=""><p class="my-auto mx-1">Me interesa!</p></a>
                                    <a class="btn btn-success1 d-flex align-items-center my-auto text-decoration-none text-dark m-1"><img src="assets/iconos/telefono.png" class="icono" alt=""><p class="my-auto mx-1">Ponte en contacto con nosotros</p></a>
                                </div>
                            <details>
                                <summary class="h3">¿Cómo se hace?</summary>
                                <p>Se coloca una parrilla de 25x25 cms en ambos sentidos y se ponen casetón o ladrillo para aligerar la losa catalana y en el caso de la losa solida no se coloca ninguno.</p>
                            </details>
                            <details>
                                <summary class="h3">¿Cómo se realizan los pagos?</summary>
                                <p>Se establecen trabajos en un periodo semanal y se realiza el pago, al final de la semana el supervisor de área dará por concluidas las tareas asignadas.

                                    Y programará los trabajos para el siguiente periodo en una orden de trabajo.</p>
                            </details>
                            <details>
                                <summary class="h3">¿Qué beneficios tengo al contratarlos?</summary>
                                <p>-Tu controlas la inversión. <br>
                                    -Tenemos 15 años de experiencia.<br>
                                    -Terminamos en los tiempos establecidos.<br>
                                    -Generamos un contrato digital para su seguridad.<br>
                                    -El medio de pago es digital y en efectivo.<br>
                                    -La cotización se realiza sin compromiso.</p>
                            </details>
                            <details>
                                <summary class="h3">¿Tengo garantía del trabajo?</summary>
                                <p>Para tú seguridad se cuenta con garantía de 3 meses por el servicio que se realice.</p>
                            </details>
                          <br>
                          <h3 class="p-2 m-auto w-auto linea ">Especificaciones</h3>
                          <table class="m-2">
                            <tr>
                                <th>Medidas</th>
                                <td>1x1</td>
                            </tr>
                            <tr>
                                <th>Ancho</th>
                                <td>1 Metro</td>
                            </tr>
                            <tr>
                                <th>Largo</th>
                                <td>1 Metro</td>
                            </tr>
                            <tr>
                                <th>Grueso</th>
                                <td>20 centímetros</td>
                            </tr>
                            <tr>
                                <th>Material</th>
                                <td>Cemento, barilla y ladrillo</td>
                            </tr>
                            <tr>
                                <th>Unidad de medida ㅤㅤㅤ</th>
                                <td>Metros</td>
                            </tr>
                          </table>

                        </div>
                    </div>
                </div>
                <?php  }
                        } 
                ?>
            </div>
        </div>



        <div class="container">
            <div>
                <h2 class="p-2 m-1 w-auto linea ">Te podría interesar...</h2>
            </div>
            </div>
</section>
</body>
</html>
