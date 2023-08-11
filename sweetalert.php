<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.22/dist/sweetalert2.all.min.js"></script>



<?php if ($entrar=="admin"){ ?>
<script>
    function mensaje(){
        Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'B I E N V E N I D O <?php  echo $_SESSION['usuario']?>!',
  showConfirmButton: false,
  timer: 2000
}).then(function(){
    location.href='admin/index.php';
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
  title: 'B I E N V E N I D O <?php  echo $_SESSION['usuario']?>!',
  showConfirmButton: false,
  timer: 2000
}).then(function(){
    location.href='admin/index.php';
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