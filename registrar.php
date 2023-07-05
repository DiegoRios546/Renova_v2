<?php

if (isset($_SESSION))
{
    session_destroy();
}
$entrar = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  //variables del formulario
  $us = $_POST['nombre'];
  $ps = $_POST['password'];

  include_once('conexion.php');

  //$consulta="select usuario,password,privilegio from usuarios where usuario='$us' and password='$ps'";

  $consulta = "INSERT INTO USUARIOS VALUES (null,'$us','$ps',null,'estandar');";
  $resultado=$conexion->query($consulta);
  if ($consulta) {
    
    if($resultado){
      $entrar = "registro";
    }else {
    $entrar = "error_registro";
  }
}else {
  $entrar = "error1";
}
}
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title>Registrarse</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="assets/css/styles1.css" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,700,800" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1" />
</head>

<body class="login">
  <div class="login-container-up">
  <button  class="btn" style="position:absolute;top:0;right:0;padding: .5rem; margin:.7rem;" type="button" data-dismiss="modal" id="registerClose">
  <i class="fa-solid fa-xmark fa-lg text-white"></i>
</button>
    <h2>¡REGÍSTRATE!</h2>
    <h4>Crea tu cuenta para Renova Depot</h4>
  </div>

  <div class="login-container">

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
      <div class="input-wrapper">
        <input type="email" class="input" id="email" placeholder="Correo electrónico" name="nombre" required />
        <i class="fa-solid fa-user fa-sm icon-usr" style="color: #fd5100;"></i>
          <input type="password" class="input" id="password" placeholder="Contraseña" name="password" required />
          <i class="fa-solid fa-key fa-sm icon-pw" style="color: #fd5100;"></i>
      </div>
      <button type="submit" class="login-btn" value="iniciar sesion" name="btningresar">Crear cuenta</button>
    </form>
    <br>
    <hr>
    <br>
    <div class="social-login">
      <button class="icono-boton"><i class="fa-brands fa-facebook fa-2xl" style="color: #1d2f4e"></i></button>
      <button class="icono-boton"><i class="fa-brands fa-google fa-2xl" style="color: #1d2f4e"></i></button>
    </div>

    <div class="register">
      <p>¿Ya tienes cuenta? <button class="btn btn-success justify-content-center align-items-center d-flex" data-dismiss="modal" data-toggle="modal" data-target="#loginModal">Inicia sesion</button> </p>
    </div>
  </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script type="text/javascript" src="assets/js/modal.js"></script>
    <script type="text/javascript" src="assets/js/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>
<?php
include_once("sweetalert.php");
?>