
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Incluir los archivos de Bootstrap desde un CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  <!-- Contenido de la página -->
  <!-- Dentro del body de tu página -->
<nav  class="top-nav navbar navbar-expand-lg navbar-expand-sm navbar-light bg-gradient-secondary p-1 d-flex">
<a href="#" class="p-1" onclick="openNav()">
    <svg width="30" height="30" id="icoOpen">
        <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
        <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
        <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
    </svg>
  </a>
  <a class="navbar-brand text-light" href="index.php"><h2 class="p-0">Admin - Renova Depot</h2></a>
  <div class=" navbar-collapse d-none d-sm-block" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Perfil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Configuración</a>
      </li>
      <li class="nav-item d-flex">
        <a class="nav-link text-light" href="#">Cerrar Sesión</a>
        <img class="img-profile rounded-circle" src="img/undraw_profile.svg" width="20px">
      </li>
    </ul>
  </div>
</nav>

</body>
</html>