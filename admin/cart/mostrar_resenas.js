document.addEventListener("DOMContentLoaded", function () {
    const resenasDiv = document.getElementById("resenas");

    // Función para mostrar las reseñas
    function mostrarResenas() {
        fetch("mostrar_resenas.php")
            .then((response) => response.json())
            .then((data) => {
                resenasDiv.innerHTML = "";
                data.forEach((resena) => {
                    const div = document.createElement("div");
                    div.innerHTML = `
                        
                        <p>${resena.comentario}</p>
                        <p>Valoración: ${mostrarEstrellas(resena.valoracion)}</p>
                        <small>${resena.fecha}</small>
                    `;
                    resenasDiv.appendChild(div);
                });
            })
            .catch((error) => console.error("Error al obtener las reseñas:", error));
    }

    // Función para mostrar las estrellas según la valoración
    function mostrarEstrellas(valoracion) {
        const estrellas = "★".repeat(valoracion) + "☆".repeat(5 - valoracion);
        return estrellas;
    }

    // Mostrar las reseñas al cargar la página
    mostrarResenas();
});
