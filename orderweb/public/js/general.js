$(document).ready(function() {
    $('#table_data').DataTable();
});

function remove() {
    var x = confirm("¿Está seguro de que desea eliminar el registro?");
    if (x)
        return true;
    else
        return false;
}