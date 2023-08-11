<link rel="stylesheet" href="assets/css/estilos.css">
<!-- Eslogan -->
<nav class="navbar bg-dark navbar-light" >
    <div class="container text-light">
        <h5 class="m-1 ">"Especializamos la construccion"</h5>
    </div>
</nav>
<!-- fin del Eslogan -->

<!-- Inicio del footer -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <!-- Seccion contactanos -->
            <div class="col-md-4 pt-2">
                <h2 class="h2 text-light pt-1 border-light">Contactanos</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li>
                    <span><img src="assets/iconos/telefono.png" class="icono m-1" alt="icono-telefono"></span>
                        <a class="text-decoration-none text-light" href="tel:6181234567">+52 6181234567</a>
                    </li>
                    <li>
                    <span><img src="assets/iconos/correo.png" class="icono m-1" alt="icono-correo"></span>
                        <a class="text-decoration-none text-light" href="mailto:info@company.com">renovadepot@gmail.com</a>
                    </li>
                    <li>
                    <span><img src="assets/iconos/mapa.png" class="icono m-1" alt="icono-mapa"></span>
                        Paseo de las parras #229. <br> Valle verde 34284 Durango, Dgo.
                    </li>
                </ul>
            </div>
            <!-- Fin -->

            <!-- Seccion de preguntas -->
            <div class="col-md-4 pt-2">
                <h2 class="h2 text-light pt-1 border-light">Preguntas frecuentes</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li>
                        <div class="question text-decoration-underline">¿Qué beneficios tengo al contratarlos?</div>
                        <ul class="answer">
                            <li>Tu controlas la inversión.</li>
                            <li>Tenemos 15 años de experiencia.</li>
                            <li>Terminamos en los tiempos establecidos.</li>
                            <li>Generamos un contrato digital para su seguridad.</li>
                            <li>El medio de pago es digital y en efectivo.</li>
                            <li>La cotización se realiza sin compromiso.</li>
                        </ul>
                    </li>
                    <li>
                        <div class="question text-decoration-underline">¿Tengo garantía del trabajo?</div>
                        <div class="answer">Para tú seguridad se cuenta con garantía de 3 meses por el servicio que se realice.</div>
                    </li>
                    <li>
                        <div class="question text-decoration-underline">¿Cómo se realizan los pagos?</div>
                        <div class="answer">Se establecen trabajos en un periodo semanal y se realiza el pago, al final de la semana el supervisor de área dará por concluidas las tareas asignadas.
                        Y programará los trabajos para el siguiente periodo en una orden de trabajo.</div>
                    </li>
                </ul>
            </div>

             <!-- funcion de preguntas -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
    const questions = document.querySelectorAll('.question');

    questions.forEach(question => {
        question.addEventListener('click', function() {
            // Obtener el elemento de respuesta asociado a la pregunta actual
            const answer = this.nextElementSibling;

            // Cambiar la clase para mostrar u ocultar la respuesta
            if (answer.style.display === 'block') {
                answer.style.display = 'none';
            } else {
                answer.style.display = 'block';
            }
        });
    });
});

</script>

            <!-- Seccion contactanos -->
            <div class="col-md-4 pt-2">
                <h2 class="h2 text-light pt-1 border-light">Siguenos</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li class="list-block-item ">
                        <a class="text-light text-decoration-none" target="_blank" href="https://www.facebook.com/profile.php?id=100066719941248">
                        <span><img src="assets/iconos/facebook.png" class="icono m-1" alt="icono-facebook"></span>
                            Facebook
                        </a>
                    </li>
                    <li class="list-block-item ">
                        <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/">
                        <span><img src="assets/iconos/instagram.png" class="icono m-1" alt="icono-instagram"></span>
                            Instagram
                        </a>
                    </li>
                    <li class="list-block-item ">
                    <a class="text-light text-decoration-none" target="_blank" href="https://api.whatsapp.com/send?phone=526181461515&text=Hola, Nececito mas informacion!">
                    <span><img src="assets/iconos/whatsapp.png" class="icono m-1" alt="icono-whatsapp"></span>
                        Whatsapp
                    </a>
                    </li>
                </ul>
            </div>
            <!-- Fin -->
        </div>
    </div>
</footer>
    <!-- fin del Footer -->
