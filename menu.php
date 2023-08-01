<link rel="stylesheet" href="assets/css/styles.css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/css/styles1.css">

<!-- barra de menu -->
<nav class="navbar shadow menu d-block p-1 mx-auto">
<div class="container mx-auto d-flex p-0 m-auto">
    <div class="d-flex justify-content-center align-items-center">
        <a class="navbar-brand" href="index.php">
          <img src="assets/img/logo.png" alt="logo" class="logo ">
        </a>
        <a href="" class="text-decoration-none text-dark">
          <h6 class="m-0" ><i class="fa fa-fw fa-solid fa-map-pin text-dark"></i>
          Oficina: Paseo de las Parras #229 <br>
          Valle Verde #34284 Durango, Dgo.</h6>
        </a>
    </div>

            <!-- boton de menu para movil-->
    <button onclick="toggleDiv()" class="navbar-toggler m-1 border-0 d-sm-none text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav"  aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa fa-lg fa-solid fa-bars"></i>
    </button>

            <!-- barrra de buscador -->
            <form class="d-sm-inline-block form-inline mx-auto m-auto col-lg-4">
                        <div class="input-group ">
                            <input type="text" class="search form-control bg-light border-0 small " placeholder="¿Qué estás buscando?"aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn border" type="button" id="btnsearch">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                 <!-- iconos -->

        <button class="btn justify-content-center align-items-center d-flex text-dark" onclick="openlogin()">
          <i class="fa fa-lg fa-user text-dark m-1"></i>
            <p class="d-none d-sm-block m-1">Inicia Sesión <br> o registrate</p>
          </button> 
      

  </div>

  
            <!-- Menu para moviles -->
<div id="myDiv" style="display: none;" class="row collapse navbar-collapse flex-fill text-dark mx-auto m-1">
    <div class="mx-auto m-auto text-center d-flex">
        <a class="nav-link m-auto text-dark align-items-center" href="login.php"><i class="fa fa-fw fa-user text-dark m-auto"></i><h6>Iniciar sesion</h6> </a>
        <a class="nav-link m-auto text-dark" href="index.php"><i class="fa fa-fw fa-tag text-dark m-auto"></i><h6>Promociones</h6></a>
        <a class="nav-link m-auto text-dark" href="index.php"><i class="fa fa-fw fa-book-open text-dark m-auto"></i><h6>Catalogo</h6></a> 
    </div>
</div>


</nav>
    <!-- fin de barra del menu -->

    <?php 
    session_start();

    if (isset($_SESSION)){
      session_destroy();
    }
    
    $entrar="";
       //Crear conexion
       include_once("conexion.php");
    
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
    
       $us=$_POST['nombre'];
       $ps=$_POST['pass'];
    
    
    
       //consulta a la base de datos
       $consulta="SELECT * from usuarios WHERE usuario='$us' AND password='$ps'";
       $resultado=$conexion->query($consulta);
    
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
          <p>¿Aún no tienes cuenta?</p>
          <button onclick="openregistro()" class="btn btn-success1 justify-content-center align-items-center" >Registrarse</button>
        </div>
      </div>
    </div>
  </div>
</div>


<div id="modal_registro" class="modal mx-auto">
  <div class="modal-content mx-auto">
    <div class="login mx-auto">
      <div class="login-container-up">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>¡REGÍSTRATE!</h2>
        <h4>Crea tu cuenta para Renova Depot</h4>
      </div>
      <div class="login-container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET">
          <div class="input-wrapper">
            <input type="email" class="input" id="email" placeholder="Correo electrónico" name="nombre" required />
            <i class="fa-solid fa-user fa-sm icon-usr" style="color: #fd5100;"></i>
            <input type="password" class="input" id="password" placeholder="Contraseña" name="pass" required />
            <i class="fa-solid fa-key fa-sm icon-pw" style="color: #fd5100;"></i>
            <input type="text" class="input" id="tel" placeholder="Telefono" name="tel"  />
          </div>
          <button type="submit" class="login-btn" value="iniciar sesion" name="btningresar">Crear cuenta</button>
        </form>
          <hr>
        <div class="social-login">
          <button class="icono-boton"><i class="fa-brands fa-facebook fa-2xl" style="color: #1d2f4e"></i></button>
          <button class="icono-boton"><i class="fa-brands fa-google fa-2xl" style="color: #1d2f4e"></i></button>
        </div>
        <div class="register d-flex align-items-center justify-content-center">
          <p>¿Ya tienes cuenta? <button class="btn btn-success1 justify-content-center align-items-center" onclick="openlogin()">Inicia sesion</button> </p>
        </div>
      </div>
    </div>
  </div>
</div>

  <script>
    // Obtener la referencia al elemento de la ventana modal
    var login = document.getElementById("modal_login");
    var registro = document.getElementById("modal_registro");

    // Obtener el elemento para cerrar la ventana modal
    var closeBtn = document.getElementsByClassName("close")[0];

    // Función para abrir la ventana modal
    function openlogin() {
      login.style.display = "block";
      registro.style.display = "none";
    }

    // Función para abrir la ventana modal
    function openregistro() {
      registro.style.display = "block";
      login.style.display = "none";
    }

    // Función para cerrar la ventana modal
    function closeModal() {
      login.style.display = "none";
      registro.style.display = "none";
    }

    // Cerrar la ventana modal al hacer clic fuera del contenido
    window.onclick = function(event) {
      if (event.target == login) {
        login.style.display = "none";
      }
      if (event.target == registro) {
        registro.style.display = "none";
      }
    };
  </script>



<?php 
        include_once("sweetalert.php");
        ?> 
        <!-- fin del menu de moviles -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script type="text/javascript" src="assets/js/modal.js"></script>
    <script type="text/javascript" src="assets/js/mostrar.js"></script>
    <script type="text/javascript" src="assets/js/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>