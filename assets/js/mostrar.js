function toggleDiv() {
    var div = document.getElementById("myDiv");
    if (div.style.display === "none") {
      div.style.display = "block";
    } else {
      div.style.display = "none";
    }
  }








  var currentPage = 1;
  var contentPerPage = 10; // Número de elementos por página
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