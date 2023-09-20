
/*document.addEventListener("DOMContentLoaded", function () {
  const searchInput = document.getElementById("search-input");
  const searchButton = document.getElementById("search-button");
  const dataTable = document.getElementById("data-table");
  const tableBody = document.getElementById("table-body");
  const exportButton = document.getElementById("export-button");
  
  // Función para cargar y mostrar datos en la tabla
  function loadData() {
    // Realizar una solicitud AJAX para obtener los datos del servidor PHP
    fetch("")
      .then((response) => response.json())
      .then((data) => {
        // Limpia la tabla antes de cargar nuevos datos
        tableBody.innerHTML = "controladores/tablacontrolador.php";
        // Itera sobre los datos y crea filas en la tabla
        data.forEach((item) => {
          const row = document.createElement("tr");
          for (const key in item) {
            const cell = document.createElement("td");
            cell.textContent = item[key];
            row.appendChild(cell);
          }
          tableBody.appendChild(row);
        });
      })
      .catch((error) => {
        console.error("Error al cargar datos:", error);
      });
  }
  
  // Cargar datos al cargar la página
  loadData();
  
  // Función para filtrar datos según la búsqueda
  function filterData() {
    const searchTerm = searchInput.value.toLowerCase();
    const rows = tableBody.getElementsByTagName("tr");
    for (const row of rows) {
      let found = false;
      const cells = row.getElementsByTagName("td");
      for (const cell of cells) {
        const cellText = cell.textContent.toLowerCase();
        if (cellText.includes(searchTerm)) {
          found = true;
          break;
        }
      }
      row.style.display = found ? "" : "none";
    }
  }
  
  // Agregar eventos para búsqueda y exportación
  searchButton.addEventListener("click", filterData);
  searchInput.addEventListener("keyup", filterData);
  
  // Función para exportar la tabla a Excel
  exportButton.addEventListener("click", () => {
    // Implementa aquí la lógica para exportar la tabla a Excel (usando SheetJS o alguna biblioteca similar).
    // Puedes basarte en el ejemplo anterior para exportar la tabla a Excel.
  });
});*/


// JavaScript para interactuar con la tabla (por ejemplo, agregar filas dinámicamente)
// Ejemplo de cómo agregar una fila a la tabla:
function agregarFila() {
  var tabla = document.getElementById("solicitudes_table").getElementsByTagName('tbody')[0];
  var fila = tabla.insertRow();
  var celda1 = fila.insertCell(0);
  var celda2 = fila.insertCell(1);
  var celda3 = fila.insertCell(2);

  celda1.innerHTML = "Nuevo Nombre";
  celda2.innerHTML = "Nueva Edad";
  celda3.innerHTML = "Nueva Ciudad";
}

// Puedes agregar más funciones y lógica según tus necesidades

// Ejemplo de cómo agregar una fila al hacer clic en un botón
var botonAgregar = document.getElementById("botonAgregar");
botonAgregar.addEventListener("click", agregarFila);

