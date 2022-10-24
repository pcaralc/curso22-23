  <?php
    include("cabecera.php"); 
    include("lib.php");
  ?>


<div class="col-md-7 col-lg-8">
    <h4 class="mb-3">Añadir proyecto</h4>

    <form action="controlador.php" method="post">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" value="" required>
            </div>
            <br>
            <div class="col-sm-6">
              <label for="fechainicio" class="form-label">FechaInicio</label>
                <input type="date" name="fechainicio" id="fechainicio" required>
            </div>
           

            <div class="col-sm-12">
            <label for="fechafin" class="form-label">FechaFin</label>
            <input type="date" name="fechafin" id="fechafin" required>
            </div>

            <div class="col-sm-3">
              <label for="dias" class="form-label">DiasTranscurridos</label>
              <input type="number" class="form-control" id="dias" name="dias" placeholder="" value="" min="1" required>
            </div>

            <div class="col-sm-9">
              <label for="porcentaje" class="form-label">PorcentajeCompletado</label>
              <input type="number" class="form-control" id="porcentaje" name="porcentaje" placeholder="" value="" min="1" required>
            </div>

            <div class="col-sm-9">
              <label for="importancia" class="form-label">Importancia</label>
              <input type="range" name="importancia" id="importancia" min="1" max="5" required>
            </div>

          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" name="nuevoProyecto" type="submit">Nuevo</button>
        </form>
      </div>
    </div>



  <?php
    include("pie.php"); 
  ?>