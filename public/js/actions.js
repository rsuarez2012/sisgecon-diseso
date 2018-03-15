$(document).ready(function(){
  $('.table').DataTable({
  	language: {
  		lengthMenu: "Mostrar _MENU_ registros por pagina",
  		search:         "Buscar",
  		emptyTable:     "No hay datos registrados",
  		info: "Mostrando _START_ a _END_ registros de _TOTAL_ registrados por paginas.",
        paginate: {
            first:      "Primero",
            previous:   "Anterior",
            next:       "Proximo",
            last:       "Ultimo"
        }
    }
  });
  $('#example').DataTable();
});