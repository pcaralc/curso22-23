<footer class="pt-3 mt-4">

  <!-- Modal insertar regalo -->
  <div class="modal fade" id="nuevoRegalo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Nuevo Regalo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="formNuevoRegalo">
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" name="nombre" id="nombre">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Destinatario</label>
              <input type="text" class="form-control" name="destinatario" id="destinatario">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Precio</label>
              <input type="number" class="form-control" name="precio" id="precio">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Estado</label>
              <select class="form-select" aria-label="Default select example" name="estado">
                <option selected value="pendiente">Pendiente</option>
                <option value="comprado">Comprado</option>
                <option value="envuelto">Envuelto</option>
                <option value="entregado">Entregado</option>
              </select>
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Año</label>
              <input type="number" class="form-control" name="year" id="year">
            </div>

<?php
        if (isset($_GET['id'])) {
            echo "<input type='hidden' name='id_regalo' value='".$_GET['id']."'>";
        }

?>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="insertarRegalo" form="formNuevoRegalo" formaction="enrutador.php" formmethod="get">Insertar</button>
        </div>
      </div>
    </div>
  </div>

    <!-- Modal insertar enlace -->
    <div class="modal fade" id="nuevoEnlace" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Nuevo Enlace</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="formNuevoEnlace" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" name="nombre" id="nombre">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Enlace web</label>
              <input type="text" class="form-control" name="web" id="web">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Precio</label>
              <input type="number" class="form-control" name="precio" id="precio">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Imagen</label>
              <input class="form-control" type="file" name="cartel">
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Prioridad</label>
              <input type="number" class="form-control" name="prioridad" id="prioridad">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="insertarEnlace" form="formNuevoEnlace" formaction="enrutador.php" formmethod="post">Insertar</button>
        </div>
      </div>
    </div>
  </div>

</footer>
</div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>