<?php

    class VistaUsuariosTodos {

        public static function render($usuarios) {

            include("./vistas/cabecera.php");

            echo ' 
            <div class="row align-items-md-stretch">

            <div class="container">
        
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">';

            //Para cada película, la pinto en un card
            foreach($usuarios as $usuario) {


                echo'
                <div class="col-md-6">
                  <div class="h-100 p-5 bg-dark text-white rounded-3">
                    <h2>'.$usuario->getNombre().' '.$usuario->getApellidos().'</h2>
                    <p>DNI: '.$usuario->getDni().'</p>

                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="enrutador.php?accion=verUsuario&id='.$usuario->getId().'" type="button" class="btn btn-sm btn-outline-info">View</a>
                        </div>
                        <small class="text-white">Email: '.$usuario->getEmail().'</small>
                    </div>

                  </div>
                </div>';
            }

            echo "</div></div></div>";


            include("./vistas/pie.php");
        }

    }
?>