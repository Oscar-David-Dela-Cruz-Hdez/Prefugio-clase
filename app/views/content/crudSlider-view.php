<?php
require_once "./app/views/inc/head.php";
require_once "./config/server.php";
use app\controllers\sliderController;
////otro
$sliderController = new sliderController();
$tablaSlider = $sliderController->seleccionarTablaSlider();

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bulma</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bulma.min.css"> 
    
    <style>    
       table.dataTable thead, table.dataTable tfoot {
           background-color: hsl(171, 100%, 41%);                  
       }
       .table thead th, .table tfoot th{ 
           color: hsl(0, 0%, 96%);
        }
    </style>
    
  </head>
  <body>
  
<div class="container is-fullhd">

<article class="tile is-child notification is-info">
   <p class="title">Tabla de Slider</p>
</article>


<table id="example" class="table is-striped is-hoverable" style="width:100%">
    <thead>
        <tbody>
            <?php foreach ($imagenesSlider as $imagen): {?>
                <tr>
                    <td><?php echo $imagen['slider_id']?></td>
                    <td><img width="380px" height="380"  src="<?php echo $imagen['slider_url']?>"></td>
                    
                </tr>
            <?php  }endforeach; ?>
        </tbody>
    </thead>
</table>


</div>

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bulma.min.js"></script>
<script>
  $(document).ready(function() {
    $('#example').DataTable();
    lengthMenu: [ [2,4,8,10],[2,4,8,10]],
    language: {
            "decimal": "",
            "emptyTable": "No hay datos disponibles en la tabla",
            "info": "Mostrando START a END de TOTAL entradas",
            "infoEmpty": "Mostrando 0 a 0 de 0 entradas",
            "infoFiltered": "(filtrado de MAX entradas totales)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Mostrar MENU entradas",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "No se encontraron registros coincidentes",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            },<
            "aria": {
                "sortAscending": ": activar para ordenar la columna de manera ascendente",
                "sortDescending": ": activar para ordenar la columna de manera descendente"
            }
        }
    }
} );

</script>

  </body>
</html>