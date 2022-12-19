<?php
    class VistaPartidaJugadores {

        public static function render($partida) {

            include("./vistas/cabecera.php");

            foreach($partida->getJugadores() as $jugador){
                echo '

                <div class=" p-3 text-white">            
                </nav>
                      </div>
    
                 <div class="row align-items-md-stretch bg-dark rounded-3">
                    <div class="col-md-6">
                      <div class="h-100 p-5 text-white text-center">
                        <h2>Nombre:'.$jugador->getNombre().'</h2>
                        <h4>Nivel:'.$jugador->getNivel().'</h4>
                      </div>
                    </div>
                  </div>';
            }


            include("./vistas/pie.php");
        }


    }
?>