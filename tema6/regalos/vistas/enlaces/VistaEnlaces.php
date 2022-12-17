<?php

    class VistaEnlaces {

        public static function render($enlaces) {

            include("./vistas/cabecera.php");

            echo'<button type="button" class="btn btn-outline-dark mb-4" data-bs-toggle="modal" data-bs-target="#nuevoEnlace">Nuevo Enlace</button>';
            echo'<a class="btn btn-outline-dark btn-circle mb-4 ms-3" href="enrutador.php?accion=ordenarprecio">Ordenar por Precio</a>';

            echo'<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">';
            foreach($enlaces as $enlace){
                $_SESSION['enlace'] = serialize($enlace);
                echo '  
                <div class="card bg-dark text-white rounded-3 ms-3 " style="width: 18rem;">
                    <img src="'.$enlace->getImagen().'" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="mt-2">Nombre: ' . $enlace->getNombre() . '</h5>
                        <span class="mt-2" style="width:70%">Precio: ' . $enlace->getPrecio() . '</span><br>
                        <span class="mt-2" style="width:70%">Prioridad: ' . $enlace->getPrioridad() . '</span><br>
                        <a href="' . $enlace->getWeb() . '" class="link-light">Enlace a tienda</a><br>
                        <a  class="btn btn-outline-light btn-circle mt-4" href="enrutador.php?accion=eliminarEnlace&id=' . $enlace->getId() . '">Eliminar</a>
                    </div>
                </div>';
            }
            echo'</div>';





            include("./vistas/pie.php");
        }


    }

?>