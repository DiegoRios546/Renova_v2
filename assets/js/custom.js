document.getElementById("boton").addEventListener("click", function() {
    var texto = document.getElementById("categorias");
    if (texto.classList.contains("d-none")) {
      texto.classList.remove("d-none");
      texto.classList.add("d-block");
    } else {
      texto.classList.remove("d-block");
      texto.classList.add("d-none");
    }
  });