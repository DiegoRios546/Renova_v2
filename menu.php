
<!-- barra de menu -->
<nav class="navbar shadow menu d-block p-1 mx-auto">
<div class="container mx-auto d-flex p-0 mb-2">
    <div class="d-flex justify-content-center align-items-center">
        <a class="" href="index.php">
          <img src="assets/img/logo2.png" alt="logo" class="logo">
        </a>
        <a href="index.php" class="d-flex text-decoration-none text-dark">
        <span><img src="assets/iconos/mapa.png" class="icono m-2 my-auto" alt="icono-mapa"></span>
          <h6 class="m-0" >
          Oficina: Paseo de las Parras #229 <br>
          Valle Verde #34284 Durango, Dgo. 
          </h6>
        </a>
    </div>


            <!-- barrra de buscador -->
            <form class="shadow d-sm-inline-block form-inline mx-auto m-auto col-lg-4">
                        <div class="input-group ">
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
  
    if (isset($_SESSION)){
      session_destroy();
    }
    
    $entrar="";
       //Crear conexion
      //conexion
    



    if ($_SERVER["REQUEST_METHOD"]=="POST"){
    
       $us=$_POST['nombre'];
       $ps=$_POST['pass'];

           //conexion
           include_once("admin/connection.php");
    
   $con = connection();

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



<?php 
        include_once("sweetalert.php");
        ?> 
        <!-- fin del menu de moviles -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>