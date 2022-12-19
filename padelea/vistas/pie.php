<footer class="pt-3 mt-4">

  <!-- Modal insertar regalo -->
  <div class="modal fade" id="nuevaPartida" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Nueva Partida</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="formNuevaPartida">
            <div class="mb-3">
              <label for="fecha" class="form-label">Fecha</label>
              <input type="date" name="fecha" id="fecha">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Hora</label>
              <input type="text" class="form-control" name="hora" id="hora">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Ciudad</label>
              <input type="text" class="form-control" name="ciudad" id="ciudad">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Lugar</label>
              <input type="text" class="form-control" name="lugar" id="lugar">
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Cubierto</label>
              <input type="checkbox" name="cubierta" id="cubierta">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="insertarPartida" form="formNuevaPartida" formaction="enrutador.php" formmethod="post">Insertar</button>
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