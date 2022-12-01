<?php

    class VistaLibroDetalle {

        public static function render($libro) {

            include("./vistas/cabecera.php");

            echo '<div class=" p-3 text-white">            
            <nav  class="d-flex flex-row-reverse"><button type="button" class="btn btn-outline-white bg-dark ms-3"><a href="./enrutador.php?accion=inicio" style="text-decoration:none" class="text-white">Volver a biblioteca</a></button>
            <button type="button" class="btn btn-outline-white bg-dark"><a href="./enrutador.php?accion=libros" style="text-decoration:none" class="text-white">Volver a Libros</a></button>
            </nav>
                  </div>
             <div class="row align-items-md-stretch bg-dark rounded-3">
                <div class="col-md-6">
                  <div class="h-100 p-5 text-white text-center">
                    <h2>'.$libro->getTitulo().'</h2>
                    <h4>'.$libro->getSubtitulo().'</h4>
                    <p>'.$libro->getDescripcion().'</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="h-100 p-5 text-white">
                    <h5>Autor: '.$libro->getTitulo().'</h5>
                    <h5>Editorial: '.$libro->getEditorial().'</h5>
                    <h5>Categoria: '.$libro->getCategoria().'</h5>
                    <h5>Ejemplares Totales: '.$libro->getEjemplaresTotales().'</h5>
                    <h5>Ejemplares Disponibles: '.$libro->getEjemplaresDisponibles().'</h5>
                  </div>
                </div>
              </div>';

            include("./vistas/pie.php");
        }


    }