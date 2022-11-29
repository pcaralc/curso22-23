<footer class="pt-3 mt-4 text-muted border-top">

<!-- Modal insertar prestamo -->
<div class='modal fade' id='nuevoPrestamo' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
      <div class='modal-dialog'>
        <div class='modal-content'>
          <div class='modal-header'>
            <h5 class='modal-title' id='exampleModalLabel'>Nuevo Prestamo</h5>
          </div>
          <div class='modal-body'>
              <form id='formInsertarPrestamo' > 
                  <div class='mb-3'>
                      <label for='nombre' class='form-label'>Nombre</label>
                      <select name="usuario" id="usuario">
                        <?php
                        $usuarios = UsuarioBD::getUsuarios();
                        foreach($usuarios as $usuario) {
                          echo '                      
                            <option name="usuario" value="'.$usuario -> getId().'">'.$usuario->getNombre().'</option>';
                        }
                        ?>
                      </select>
                  </div>
                  <div class='mb-3'>
                  <label for='titulo' class='form-label'>Título</label>
                      <select name="libro" id="libro" >
                        <?php
                        $libros = LibroBD::getLibros();
                        foreach($libros as $libro) {
                          echo '                      
                            <option name="libro" value="'.$libro -> getId().'">'.$libro->getTitulo().'</option>';
                        }
                        ?>
                      </select>
                  </div>
                  <div class='mb-3'>
                      <label for='fechaInicio' class='form-label'>Fecha de Inicio</label>
                      <input type="date" name="fechaInicio" id="fechaInicio">
                  </div>
                  <div class='mb-3'>
                    <label for='fechaFin' class='form-label'>Fecha de Fin</label>
                    <input type="date" name="fechaFin" id="fechaFin">
                  </div>
                  <div class='mb-3'>
                  <label for='estado' class='form-label'>Estado</label>
                      <select name="estado" id="estado" >
                          <option name='estado' value="activo">activo</option>
                          <option name='estado' value="devuelto">devuelto</option>
                          <option name='estado' value="sobrepasado1Mes">sobrepasado1Mes</option>
                          <option name='estado' value="sobrepasado1Año">sobrepasado1Año</option>
                      </select>
                  </div>
              </form>
          </div>
          <div class='modal-footer'>
            <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
            <button type='submit' name='insertarPrestamo' class='btn btn-primary' form='formInsertarPrestamo' 
            formaction='enrutador.php' formmethod='get'>Insertar</button>

          </div>
        </div>
      </div>


    </footer>
  </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     
  </body>
</html>