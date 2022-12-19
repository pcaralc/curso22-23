<?php

class VistaPartidas{

  public static function render($partidas)
  {

    include "./vistas/cabecera.php";

    if (count($partidas) < 1) {
      echo "<h3 class='text-danger'>No hay ninguna partida añadida, añade una.</h3>";
    } else {
      echo '
      <div>
        <form action="" method="get">
          <input type="date" name="fecha" class=" rounded border-dark" placeholder="Buscar Fecha"/>
          <input type="submit" value="Buscar" name="buscarFecha" class="btn btn-outline-white bg-dark text-white">
          
          <input type="text" name="ciudad" class=" rounded border-dark" placeholder="Buscar Ciudad"/>
        <input type="submit" value="Buscar" name="buscarCiudad" class="btn btn-outline-white bg-dark text-white">
        </form>
      </div>


      <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">Fecha</th>
            <th scope="col">Hora</th>
            <th scope="col">Ciudad</th>
            <th scope="col">Lugar</th>
            <th scope="col">Está Cubierto</th>
            <th scope="col">Estado</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>';
        foreach ($partidas as $partida) {
          echo ("<tr>");
          echo '<td>' . $partida->getFecha() . '</td>
                    <td>' . $partida->getHora() . '</td>
                    <td>' . $partida->getCiudad() . '</td>
                    <td>'.$partida->getLugar().'</td>
                    <td>'; if($partida->getCubierto()==1){
                              echo "Si";
                            } else{
                              echo "No";
                            }
                    echo'</td>';
          echo ("<td>".$partida->getEstado()."</td>");
          echo ("<td><a class='btn btn-success btn-circle' href='enrutador.php?accion=verPartida&id=" . $partida->getId() . "'>Ver</a>
          <a  class='btn btn-danger btn-circle' href='enrutador.php?accion=eliminar&id=" . $partida->getId() . "'>Eliminar</a></>");
          echo ("</tr>");
  
  
        }
    }

    echo '
        </tbody>
      </table>
      </div>';

    include "./vistas/pie.php";
  }
}
