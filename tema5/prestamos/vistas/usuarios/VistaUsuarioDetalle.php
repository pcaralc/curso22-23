<?php

    class VistaUsuarioDetalle {

        public static function render($usuario) {

            include("./vistas/cabecera.php");

            echo '<div class=" p-3 text-white">            
                    <nav  class="d-flex flex-row-reverse"><button type="button" class="btn btn-outline-white bg-dark ms-3"><a href="./enrutador.php?accion=inicio" style="text-decoration:none" class="text-white">Volver a biblioteca</a></button>
                    <button type="button" class="btn btn-outline-white bg-dark"><a href="./enrutador.php?accion=usuarios" style="text-decoration:none" class="text-white">Volver a Usuarios</a></button>
                    </nav>
                  </div>
             <div class="row align-items-md-stretch bg-dark rounded-3"> 
                <div class="col-md-6">
                  <div class="h-100 p-5 text-white text-center">
                    <h2>'.$usuario->getNombre().'</h2>
                    <h4>Dni: '.$usuario->getDni().'</h4>
                    <p>Edad: '.$usuario->getEdad().'</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="h-100 p-5 text-white">
                    <h5>Nombre: '.$usuario->getNombre().'</h5>
                    <h5>Apllidos: '.$usuario->getApellidos().'</h5>
                    <h5>Dirección: '.$usuario->getDireccion().'</h5>
                    <h5>Población: '.$usuario->getPoblacion().'</h5>
                    <h5>Teléfono: '.$usuario->getTelefono().'</h5>
                    <h5>Email: '.$usuario->getemail().'</h5>
                  </div>
                </div>
              </div>';


            include("./vistas/pie.php");
        }


    }