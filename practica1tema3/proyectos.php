<?php include('cabecera.php'); ?>

<?php
include('lib.php');
$proyectos = array(
    array("id"=>"0","nombre"=>"Proyecto1", "fechaInicio"=>"2022-01-01", "fechaFinPrevista"=>"2022-02-01","diasTranscurridos"=>"10", "porcentajeCompletado"=>"55", "importancia"=>"2" ),
    array("id"=>"1","nombre"=>"Proyecto2", "fechaInicio"=>"2022-03-02", "fechaFinPrevista"=>"2022-03-02","diasTranscurridos"=>"1", "porcentajeCompletado"=>"55", "importancia"=>"4" ),
    array("id"=>"2","nombre"=>"Proyecto3", "fechaInicio"=>"2022-02-03", "fechaFinPrevista"=>"2022-18-03","diasTranscurridos"=>"10", "porcentajeCompletado"=>"55", "importancia"=>"1" ),
    array("id"=>"3","nombre"=>"Proyecto4", "fechaInicio"=>"2022-04-01", "fechaFinPrevista"=>"2022-05-16","diasTranscurridos"=>"10", "porcentajeCompletado"=>"55", "importancia"=>"3" ),
);

    if (!isset($_SESSION['proyectos']))
    $_SESSION['proyectos'] = $proyectos;

    echo'<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-success">Proyectos</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead class="text-dark">
                <tr>
                    <th>Nombre</th>
                    <th>FechaInicio</th>
                    <th>FechaFinPrevista</th>
                    <th>DiasTranscurridos</th>
                    <th>Porcentaje</th>
                    <th>Inportancia</th>
                </tr>
            </thead>
            <tbody class="text-dark">';
            crearTabla();
    echo'   </tbody>
    </table>
</div>
</div>
</div>

</div>'




?>


<?php include('pie.php'); ?>
