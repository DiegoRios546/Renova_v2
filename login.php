<?php

session_start();

if (isset($_SESSION)){
  session_destroy();
}

$entrar="";

if ($_SERVER["REQUEST_METHOD"]=="POST"){

   $us=$_POST['nombre'];
   $ps=$_POST['pass'];

   //variables de conexion a la base de datos
   
//conexion

   //consulta a la base de datos
   $consulta="SELECT * from usuarios WHERE usuario='$us' AND password='$ps'";
   $resultado=$con->query($consulta);

   if ($resultado->num_rows > 0){

       while ($fila=$resultado->fetch_assoc()){

        $priv=$fila['privilegio'];
           
           session_start();
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


<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title>Iniciar sesión</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="assets/css/styles1.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/estilos.css" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,700,800,900"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1" />
</head>

<body class="login">
  <div class="login-container-up">
  <button  class="btn" style="position:absolute;top:0;right:0;padding: .5rem; margin:.7rem;" type="button" data-dismiss="modal" id="loginClose">
  <i class="fa-solid fa-xmark fa-lg text-white"></i>
</button>
    <h2>¡BIENVENIDO!</h2>
    <h4>Ingresa a tu cuenta de RENOVA DEPOT</h4>
  </div>

  <div class="login-container">

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <div class="input-wrapper">
        <input type="email" class="input" id="email" placeholder="Correo electrónico" name="nombre" required />
        <i class="fa-solid fa-user fa-sm icon-usr" style="color: #fd5100;"></i>
        <input type="password" class="input" id="password" placeholder="Contraseña" name="pass" required />
        <i class="fa-solid fa-key fa-sm icon-pw" style="color: #fd5100;"></i>
      </div>
      <button type="submit" class="login-btn" value="iniciar sesion" name="btningresar">Iniciar sesión</button>
    <div class="forgot-password">
      <a href="#">Olvidé mi contraseña</a>
    </div>
    </form>
  
    <hr>
  
    <div class="mx-auto align-items-center justify-content-center">
    <a href="#" class="btn btn-google btn-block"><i class="fab fa-google fa-fw"></i></a>
    <a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f fa-fw"></i></a>
    </div>

    <div class="register d-flex align-items-center justify-content-center">
      <p>¿Aún no tienes cuenta? <button id="registerBtn" class="btn btn-success1 justify-content-center align-items-center" data-dismiss="modal" data-toggle="modal" data-target="#registerModal">Registrarse</button></p>

    </div>
  </div>

</body>

</html>
<?php
include_once("sweetalert.php");
?>