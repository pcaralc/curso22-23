<?php

    class VistaPrestamosTodos {

        public static function render($prestamos) {

            include("./vistas/cabecera.php");

            echo '            
            <div class="row align-items-md-stretch">

            <div class="container">
            <div class="input-group">
              <div class="input-group" style="width:30%">
              <form action="" method="get">
                <select name="buscarEstado" id="buscarEstado" class="rounded ">
                <option class="text-secondary" name="buscarEstado"  id="buscarEstado" value="Buscar por Estado">Buscar por Estado</option>
                  <option name="buscarEstado" id="buscarEstado" value="activo">activo</option>
                  <option name="buscarEstado" id="buscarEstado" value="devuelto">devuelto</option>
                  <option name="buscarEstado" id="buscarEstado" value="sobrepasado1Mes">sobrepasado1Mes</option>
                  <option name="buscarEstado" id="buscarEstado" value="sobrepasado1Año">sobrepasado1Año</option>
                </select>
                <input type="submit" value="Buscar" name="buscarE" class="btn btn-outline-white bg-dark text-white">
              </form>
              </div>
              <div class="input-group ms-3" style="width:30%">
              <form action="" method="get">
                <input type="text" name="dni" class=" rounded border-dark" placeholder="Buscar DNI"/>
                <input type="submit" value="Buscar" name="buscarDNI" class="btn btn-outline-white bg-dark text-white">
              </form>
              </div>
            </div>
            <nav  class="d-flex flex-row-reverse">
            <button type="button" class="btn btn-outline-white bg-dark text-white mb-3" data-bs-toggle="modal" data-bs-target="#nuevoPrestamo" style="float:right">Insertar prestamo</button>
          </nav>
        
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">';
              $array = array("activo, devuelto, sobrepasado1Mes, sobrepasado1Año");
            //Para cada película, la pinto en un card
          foreach($prestamos as $prestamo) {
            echo '                
            <div class="col-md-6">
            <div class="h-100 p-5 bg-dark text-white rounded-3">
              <h2>Libro: '.$prestamo->titulo.'</h2>
              <p>Usuario: '.$prestamo->nombre.'</p>
              
              <form action="" method="get">
                Fecha Inicio: <input type="date" name="fechaInicio" id="fechaInicio" value="'.$prestamo->getFechaInicio().'" class="ms-2"><br>
                Fecha Fin: <input type="date" name="fechaFin" id="fechaFin" value="'.$prestamo->getFechaFin().'" class="mt-2 ms-4"><br>
                Estado: <select class="form-select mt-1" style="width:35%" name="estado" id="estado" aria-label="Default select example">
                  <option class="bg-secondary" name="estado"  id="estado" value="'.$prestamo->getEstado().'">'.$prestamo->getEstado().'</option>
                  <option name="estado"  id="estado" value="activo">activo</option>
                  <option name="estado"  id="estado" value="devuelto">devuelto</option>
                  <option name="estado"  id="estado" value="sobrepasado1Mes">sobrepasado1Mes</option>
                  <option name="estado"  id="estado" value="sobrepasado1Año">sobrepasado1Año</option>
                </select>
                <input type="hidden" name="id" value="' . $prestamo->getId() . '">
                <input type="submit" value="Modificar" name="modificar" class="rounded-3 mt-3 bg-dark text-white border-white">
            </form>



            </div>
          </div>';
          }

      echo "</div></div></div>";


            include("./vistas/pie.php");
        }

    }
?>