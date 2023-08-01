function toggleDiv() {
    var div = document.getElementById("myDiv");
    if (div.style.display === "none") {
      div.style.display = "block";
    } else {
      div.style.display = "none";
    }
  }








  var currentPage = 1;
  var contentPerPage = 5; // Número de elementos por página
  var content = document.getElementById("content");

  function showPage(page) {
    var start = (page - 1) * contentPerPage;
    var end = start + contentPerPage;
    var items = document.querySelectorAll(".item");

    for (var i = 0; i < items.length; i++) {
      if (i >= start && i < end) {
        items[i].style.display = "block";
      } else {
        items[i].style.display = "none";
      }
    }

    updatePaginationButtons(page);
  }

  function goToPage(page) {
    currentPage = page;
    showPage(currentPage);
  }

  function nextPage() {
    currentPage++;
    showPage(currentPage);
  }

  function previousPage() {
    currentPage--;
    showPage(currentPage);
  }

  function updatePaginationButtons(page) {
    var buttons = document.querySelectorAll(".pagination-button");
    buttons.forEach(function(button) {
      button.classList.remove("active");
    });

    var activeButton = document.querySelector(".pagination-button:nth-child(" + (page + 1) + ")");
    activeButton.classList.add("active");
  }

  // Ejemplo de contenido paginado
  for (var i = 1; i <= 20; i++) {
    var item = document.getElementByid("item");
    item.className = "item";
    //item.innerText = "Elemento " + i;
    content.appendChild(item);
  }

  showPage(currentPage);









      // Función para guardar la posición de desplazamiento en localStorage
      function saveScrollPosition() {
        localStorage.setItem('scrollPosition', window.pageYOffset);
      }
  
      // Función para restaurar la posición de desplazamiento desde localStorage
      function restoreScrollPosition() {
        var scrollPosition = localStorage.getItem('scrollPosition');
        if (scrollPosition) {
          window.scrollTo(0, scrollPosition);
        }
      }

      // Asegurarse de que la posición de desplazamiento se guarde al desplazarse o al cambiar de página
      window.addEventListener('scroll', saveScrollPosition);
  window.addEventListener('unload', saveScrollPosition);





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