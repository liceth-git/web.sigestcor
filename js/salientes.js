$(document).ready(function() {
    $('#miTabla').DataTable({
        "paging": true,
        "lengthMenu": [5, 10, 20, 100], // Opciones de registros por página
        "searching": true, // Habilitar la búsqueda
        "buttons": [
            'excel' // Agregar el botón de exportar a Excel
        ]
    });
});
