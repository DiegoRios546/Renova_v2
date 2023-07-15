<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/fontawesome.min.css">

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
            <form class="btn-search d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="¿Qué estás buscando?"
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn border" type="button" id="btnsearch">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                 <!-- iconos -->
    <div class="d-flex justify-content-center align-items-center">

      <a class="nav-icon position-relative text-decoration-none m-auto d-none d-sm-block">
        <button class="btn justify-content-center align-items-center d-flex text-dark" data-toggle="modal" data-target="#loginModal" id="loginBtn">
          <i class="fa fa-fw fa-user text-dark m-2"></i>
            <span class="position-absolute top-0  translate-middle badge "></span>Inicia Sesión <br> o registrate
          </button> 
      </a>
    </div>
  </div>


</nav>
    <!-- fin de barra del menu -->


        <!-- Ventana Modal -->
 <!-- Ventana modal de inicio de sesión -->
 <div id="loginModal" class="modal fade" tabindex="2" role="dialog" aria-labelledby="tituloVentana" aria-hidden="false">
    <div class="modal-dialog" role="document">
      <div class="modal-content p-0">
        <?php 
        include_once("login.php");
        ?>
      </div>
    </div>
  </div>

  <!-- Ventana modal de registro -->
  <div id="registerModal" class="modal fade" tabindex="4" role="dialog" aria-labelledby="tituloVentana" aria-hidden="false">
    <div class="modal-dialog" role="document">
      <div class="modal-content p-0">
        <?php 
        include_once("registrar.php");
        ?>    
      </div>
    </div>
  </div>
      <!-- Termina ventana modal -->


            <!-- Menu para moviles -->
<div id="myDiv" style="display: none;" class="row collapse navbar-collapse flex-fill text-dark mx-auto m-1">
    <div class="mx-auto m-auto text-center d-flex">
        <a class="nav-link m-auto text-dark align-items-center" href="login.php"><i class="fa fa-fw fa-user text-dark m-auto"></i><h6>Iniciar sesion</h6> </a>
        <a class="nav-link m-auto text-dark" href="index.php"><i class="fa fa-fw fa-tag text-dark m-auto"></i><h6>Promociones</h6></a>
        <a class="nav-link m-auto text-dark" href="index.php"><i class="fa fa-fw fa-book-open text-dark m-auto"></i><h6>Catalogo</h6></a> 
    </div>
</div>
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