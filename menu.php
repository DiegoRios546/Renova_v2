<link rel="stylesheet" href="assets/css/estilos.css">
<link rel="stylesheet" href="assets/css/fontawesome.min.css">
<!-- barra de menu -->
    <nav class="navbar shadow menu d-block text-white">
        <div class="container mx-auto d-flex p-0 m-auto">
            <div class="d-flex">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/img/logo2.png" alt="logo" class="logo navbar-brand ">
                </a>
                <a href="" class="text-decoration-none text-white">
                    <h6 class="m-0" ><i class="fa fa-fw fa-solid fa-map-pin text-white"></i>
                    Oficina: Paseo de las Parras #229 <br>
                    Valle Verde #34284 Durango, Dgo.</h6>
                </a>
            </div>
            <!-- boton de menu para movil-->
            <button class="navbar-toggler m-1 border-0 d-sm-none text-white" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav"  aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-lg fa-solid fa-bars"></i>
            </button>

            <!-- barrra de buscador -->
                <div class="btn-search m-auto">
                    <div class="input-group" id="contenedor-search">
                            <input type="text" class="form-control" id="inputsearch" placeholder="¿Qué estás buscando?">
                            <button class="input-group-text" style="cursor:pointer;" id="btnsearch">
                                <i class="fa fa-fw fa-search" id="search-icon"></i>
                            </button>
                    </div>
                </div>
                 <!-- iconos -->
                 <div class="mx-auto m-auto d-flex">
                    <a class="nav-icon position-relative text-decoration-none  m-auto" href="#">
                        <i class="fa fa-fw fa-cart-arrow-down text-white m-2"></i>
                        <span class="position-absolute top-0  translate-middle badge">7</span>
                    </a>
                    
                    <a class="nav-icon position-relative text-decoration-none m-auto d-none d-sm-block">
                            <button class="btn btn-success1 justify-content-center align-items-center d-flex text-white" data-toggle="modal" data-target="#loginModal" id="loginBtn">
                            <i class="fa fa-fw fa-user text-white m-2"></i>
                            <span class="position-absolute top-0  translate-middle badge "></span>Inicia Sesión <br> o registrate
                    </button> 
                    </a>
                </div>

<div class="btn-group" role="group" aria-label="Basic example">
<div class="dropdown">
  <button class="btn opciones text-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Servicios
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div>
<div class="dropdown">
  <button class="btn opciones text-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Inmobiliaria
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div>
<div class="dropdown">
  <button class="btn opciones text-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Ofertas
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div>
</div>

                    </div>
    </nav>
    <!-- fin de barra del menu -->


        <!-- Ventana Modal -->
 <!-- Ventana modal de inicio de sesión -->
 <div id="loginModal" class="modal fade" tabindex="2" role="dialog" aria-labelledby="tituloVentana" aria-hidden="false">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <?php 
                            include_once("login.php");
                            ?>
      <!-- Agrega aquí los campos de entrada para el inicio de sesión -->
      
    </div>
    </div>

  </div>

  <!-- Ventana modal de registro -->
  <div id="registerModal" class="modal fade" tabindex="4" role="dialog" aria-labelledby="tituloVentana" aria-hidden="false">
    <div class="modal-dialog" role="document">
    <div class="modal-content">

      <?php 
                            include_once("registrar.php");
                            ?>
      <!-- Agrega aquí los campos de entrada para el registro -->
      
    </div>
    </div>

  </div>

  


                <!-- Termina ventana modal -->








            <!-- Menu para moviles -->
<div class="row collapse navbar-collapse flex-fill text-dark mx-auto m-1" id="templatemo_main_nav">
    <div class="mx-auto m-auto text-center d-flex">
        <a class="nav-link m-auto text-dark align-items-center" href="login.php"><i class="fa fa-fw fa-user text-dark m-auto"></i><h6>Iniciar sesion</h6> </a>
        <a class="nav-link m-auto text-dark" href="index.php"><i class="fa fa-fw fa-tag text-dark m-auto"></i><h6>Promociones</h6></a>
        <a class="nav-link m-auto text-dark" href="index.php"><i class="fa fa-fw fa-book-open text-dark m-auto"></i><h6>Catalogo</h6></a> 
    </div>
</div>
        <!-- fin del menu de moviles -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script type="text/javascript" src="assets/js/modal.js"></script>
    <script type="text/javascript" src="assets/js/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

