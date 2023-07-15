var btnAbrirModal2 = document.getElementById("btnAbrirModal2");
var btnRegresarModal1 = document.getElementById("btnRegresarModal1");
var btnCerrarModal2 = document.getElementById("btnCerrarModal2");
var ventanaModal = document.getElementById("ventanaModal");
var ventanaModal2 = document.getElementById("ventanaModal2");

btnAbrirModal2.addEventListener("click", function() {
    ventanaModal.style.display = "none"; //Cerrar primera ventana modal
    ventanaModal2.style.display = "block"; // Abrir segunda ventana modal
});

btnRegresarModal1.addEventListener("click", function() {
    ventanaModal2.style.display = "none"; // Cerrar segunda ventana modal
    ventanaModal.style.display = "block"; // Abrir primera ventana modal
});

btnCerrarModal2.addEventListener("click", function() {
    ventanaModal.style.display = "none"; //Cerrar primera ventana modal
    ventanaModal2.style.display = "none"; // Abrir segunda ventana modal
});


// Obtener los elementos del DOM
const loginBtn = document.getElementById('loginBtn');
const registerBtn = document.getElementById('registerBtn');
const loginModal = document.getElementById('loginModal');
const registerModal = document.getElementById('registerModal');
const loginClose = document.querySelector('#loginModal .close');
const registerClose = document.querySelector('#registerModal .close');

// Mostrar la ventana modal de inicio de sesión
loginBtn.addEventListener('click', function() {
  loginModal.style.display = 'block';
});

// Mostrar la ventana modal de registro y cerrar la ventana modal de inicio de sesión
registerBtn.addEventListener('click', function() {
  registerModal.style.display = 'block';
  loginModal.style.display = 'none';
});

// Cerrar la ventana modal de inicio de sesión
loginClose.addEventListener('click', function() {
  loginModal.style.display = 'none';
});

// Cerrar la ventana modal de registro
registerClose.addEventListener('click', function() {
  registerModal.style.display = 'none';
});

// Cerrar la ventana modal cuando se hace clic fuera de ella
window.addEventListener('click', function(event) {
  if (event.target == loginModal) {
    loginModal.style.display = 'none';
  }
  if (event.target == registerModal) {
    registerModal.style.display = 'none';
  }
});




function toggleDiv() {
  var div = document.getElementById("myDiv");
  if (div.style.display === "none") {
    div.style.display = "block";
  } else {
    div.style.display = "none";
  }
}