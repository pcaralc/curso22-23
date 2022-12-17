<?php

class VistaRegalos
{

  public static function render($regalos)
  {

    include "./vistas/cabecera.php";

    if (count($regalos) < 1) {
      echo "<h3 class='text-danger'>No tienes ningún regalo añadido, añade uno.</h3>";
    } else {
      echo '
      <div>
        <form action="" method="get">
          <input type="number" name="yea" class=" rounded border-dark" placeholder="Filtrar Año"/>
          <input type="submit" value="Buscar" name="buscarYear" class="btn btn-outline-white bg-dark text-white">
        </form>
      </div>

      <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Destinatario</th>
            <th scope="col">Precio</th>
            <th scope="col">Estado</th>
            <th scope="col">Año</th>
            <th scope="col">#</th>
            <th scope="col">#</th>
            <th scope="col">#</th>
          </tr>
        </thead>
        <tbody>';

      foreach ($regalos as $regalo) {
        echo ("<tr>");
        echo ' <form action="enrutador.php" method="get">';
        echo '<td><input type="text" name="nombre" id="nombre" value="' . $regalo->getNombre() . '" class="mt-2" style="width:50%"></td>
                  <td><input type="text" name="destinatario" id="destinatario" value="' . $regalo->getDestinatario() . '" class="mt-2" style="width:70%"></td>
                  <td><input type="number" name="precio" id="precio" value="' . $regalo->getPrecio() . '" class="mt-2" style="width:50%"></td>
                  <td><select class="form-select mt-1 border-dark" style="width:90%" name="estado" id="estado" aria-label="Default select example">
                          <option class="bg-secondary" name="estado"  id="estado" value="' . $regalo->getEstado() . '">' . $regalo->getEstado() . '</option>
                          <option name="estado"  id="estado" value="pendiente">pendiente</option>
                          <option name="estado"  id="estado" value="comprado">comprado</option>
                          <option name="estado"  id="estado" value="envuelto">envuelto</option>
                          <option name="estado"  id="estado" value="entregado">entregado</option>
                    </select></td>
                  <td><input type="number" name="year" id="year" value="' . $regalo->getYear() . '" class="mt-2" style="width:50%"></td>';
        echo ("<td><a class='btn btn-secondary btn-circle' href='enrutador.php?accion=verRegalo&id=" . $regalo->getId() . "'>Ver</a></>");
        echo '<input type="hidden" name="id" value="' . $regalo->getId() . '">
                  <td><input type="submit" value="Modificar" name="modificar" class="btn btn-success btn-circle"></td>';
        echo ("<td><a  class='btn btn-danger btn-circle' href='enrutador.php?accion=eliminar&id=" . $regalo->getId() . "'>Eliminar</a></td>");
        echo '</form>';
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
