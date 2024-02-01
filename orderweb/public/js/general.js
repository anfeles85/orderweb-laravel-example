$(document).ready(function() {
    $('#table_data').DataTable({
        "pageLength": 10,
        "lengthChange": false,
        "language": {
            "paginate": {
                "previous": "Anterior",
                "next": "Sgte"
            },
            "search": "Buscar:",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
            "infoEmpty": "No existen registros",
        }
    });
});

function remove() {
    var x = confirm("¿Está seguro de que desea eliminar el registro?");
    if (x)
        return true;
    else
        return false;
}