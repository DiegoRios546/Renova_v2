<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.22/dist/sweetalert2.all.min.js"></script>

<?php if ($entrar=="registro"){ ?>
<script>
Swal.fire({
  icon: 'warning',
  title: 'Advertencia',
  text: 'Ten en cuenta esta advertencia.'
});
</script>

<?php } if ($entrar=="error_registro"){ ?>
<script>
    function mensaje(){
        Swal.fire({
  position: 'center',
  icon: 'error',
  title: 'Error al registrar',
  showConfirmButton: false,
  timer: 2000
}).then(function(){
    location.href='index.php';
});
    }
    mensaje();
</script>


<?php }if ($entrar=="actualizar"){ ?>
    <script>
    function mensaje(){
        Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Usuario actualizado exitosamente !',
  showConfirmButton: false,
  timer: 2000
}).then(function(){
    location.href='usuarios.php';
});
    }
    mensaje();
</script>
<?php }if ($entrar=="error_actualizar"){ ?>
    <script>
    function mensaje(){
        Swal.fire({
  position: 'center',
  icon: 'error',
  title: 'Usuario NO actualizado !',
  showConfirmButton: false,
  timer: 2000
}).then(function(){
    location.href='usuarios.php';
});
    }
    mensaje();
</script>
<?php }?>


<?php if ($entrar=="usuario"){ ?>
    <script>
    function mensaje(){
        Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Usuario insertado exitosamente!',
  showConfirmButton: false,
  timer: 2000
}).then(function(){
    location.href='usuarios.php';
});
    }
    mensaje();
</script>
<?php } if ($entrar=="error_usuario"){ ?>
    <script>
    function mensaje(){
        Swal.fire({
  position: 'center',
  icon: 'error',
  title: 'Usuario NO insertado !',
  showConfirmButton: false,
  timer: 2000
}).then(function(){
    location.href='usuarios.php';
});
    }
    mensaje();
</script>
<?php }?>



<?php if ($entrar=="admin"){ ?>
<script>
    function mensaje(){
        Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'B I E N V E N I D O al sistema <?php  echo $_SESSION['usuario']?>!',
  showConfirmButton: false,
  timer: 2000
}).then(function(){
    location.href='index.php';
});
    }
    mensaje();
</script>

<?php } if ($entrar=="estandar"){ ?>
<script>
    function mensaje(){
        Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Agregado con exito!',
  showConfirmButton: false,
  timer: 2000
}).then(function(){
    location.href='shop.php';
});
    }
    mensaje();
</script>

<?php } if ($entrar=="error1"){ ?>
<script>
    function mensaje(){
        Swal.fire({
  position: 'center',
  icon: 'error',
  title: 'Usuario y contraseña incorrectas ',
  Text: 'por favor verifique ...',
  showConfirmButton: false,
  timer: 2000
})
    }
    mensaje();
</script>
<?php } ?>