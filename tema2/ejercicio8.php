<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
        /*Web videojuego. Intenta hacer con diseño responsive (puedes usar Bootstrap) una web que muestre unas 7 fichas de personajes (o clases) de un videojuego.  Ten en cuenta que toda la información mostrada debe salir de un array. Te recorres el array y muestras el resultado. Decide la información a mostrar, puedes usar alguna web de ejemplo e imitar el estilo. Ten en cuenta también que cada elemento de un array puede ser a su vez un array. */

        $personajes=[
            array("personaje"=> "Mario", "descripcion" => "Primer  videojuego Donkey Kong, bajo el nombre de “Jumpman” y su misión es rescatar a Pauline de las manos de un gorila lanza barriles. Mario Bros una especie de spin-off de Jumpman. En este juego, Mario y Luigi deben exterminar diversas plagas que salen por las tuberías. Esta es la razón por la que Mario y su hermano Luigi, se transforman en fontaneros de tiempo completo.", "foto" => "imgs8/mario.png", "opciones"=>array("imgs8/mario.png", "imgs8/mario2.png","imgs8/mario3.png", "imgs8/mario4.png")),
            array("personaje"=> "Luigi", "descripcion" => "Es el hermano menor de Mario. Se dice que es tímido y cobarde, pero en algunos juegos demuestra lo contrario, en Luigi’s Mansion (GameCube), tiene que rescatar a Mario de una mansión encantada plagada de fantasmas. Luigi y Daisy demuestran cierta atracción mutua en algunos juegos, como Mario Baseball o Mario Golf.", "foto" => "imgs8/luigi.png", "opciones"=>array("imgs8/luigi.png", "imgs8/luigi2.png","imgs8/luigi3.png", "imgs8/luigi4.png")),
            array("personaje"=> "Peach", "descripcion" => " Su primera aparición fue en el año 1985 en Super Mario Bros. y desde entonces, debe ser rescatada por Mario de las garras del malvado Bowser. Hay excepciones, claro, como Super Mario Bros. 2 y otros videojuegos de Mario que no son de plataforma.", "foto" => "imgs8/peach.png", "opciones"=>array("imgs8/peach.png", "imgs8/peach2.png","imgs8/peach3.png", "imgs8/peach4.png")),
            array("personaje"=> "Daisy", "descripcion" => " La princesa Daisy es la hermana de Peach y prima de Rosalina (2 clásicos personajes de Mario Bros). Daisy es inteligente, ruda y no se deja avasallar. Los colores favoritos de Daisy son el amarillo, el naranja y el azul aguamarina, y su flor preferida es, obviamente, la margarita (Daisy en inglés).", "foto" => "imgs8/daisy.png", "opciones"=>array("imgs8/daisy.png", "imgs8/daisy2.png","imgs8/daisy3.png", "imgs8/daisy4.png")),
            array("personaje"=> "Bowser", "descripcion" => " Es el rey de los Koopas y principal antagonista en los videojuego de Super Mario Bros. Ha intentado conquistar el Reino Champiñón (Mushroom Kingdom) en innumerables ocasiones y su más pertinaz argumento es secuestrar a su reina: Peach.", "foto" => "imgs8/bowser.png", "opciones"=>array("imgs8/bowser.png", "imgs8/bowser2.png","imgs8/bowser3.png", "imgs8/bowser4.png")),
            array("personaje"=> "Toad", "descripcion" => " es un pequeño hongo con características humanoides. Es el fiel servidor y protector de la princesa Peach. Debido a que este leal subdito de Peach es un debilucho, siempre termina por suplicar a Mario que sea él quien la rescate a su princesa.", "foto" => "imgs8/toad.png", "opciones"=>array("imgs8/toad.png", "imgs8/toad2.png","imgs8/toad3.png", "imgs8/toad4.png")),
            array("personaje"=> "Donkey Kong", "descripcion" => " El jugador controla al hijo de Donkey Kong, quien tiene que rescatar a su padre que ha sido encerrado por Mario en una jaula. Es una vuelta de mano, por así decirlo. Más tarde, Rare empezó a crear juegos en los que el personaje Donkey Kong era el protagonista, entre los que se incluyen Donkey Kong Country, Donkey Kong Land y Donkey Kong 64.", "foto" => "imgs8/kong.png", "opciones"=>array("imgs8/kong.png", "imgs8/kong2.png","imgs8/kong3.png", "imgs8/kong4.png"))
        ];

       /* function pintarFotos($personaje){

            foreach ( $personaje [ 'opciones' ] as  $imagenes ) {
                echo " <img src='". $imagenes ."' alt='' width='50' height='75' class='my-4' class='img-fluid' > ";
            }
  
        }*/

        function pintarPorPersonaje( $personaje) {
                        
                    echo "<div class='container overflow-hidden text-center'>
                    <div class='row gy-6'>
                      <div class='col-5'>
                        <div class='p-3  bg-secondary ' >
                            <figure class='figure'>
                            <img src='". $personaje["foto"] ."' class='figure-img img-fluid rounded' alt='' width='200' height='250'>
                            <figcaption class='figure-caption'><h4 class='text-light' >".$personaje["personaje"]."</h4></figcaption>
                            </figure>
                        </div>
                      </div>
                      <div class='col-6'>
                        <div class='p-3  bg-secondary '>".$personaje["descripcion"]."</div>
                        <div class='p-3 bg-secondary '>"./*pintarFotos($personaje)*/
                        " <img  src='". $personaje['opciones'][0]."' alt='' width='50' height='75' class='my-4' class='img-fluid' > "
                        ." <img  src='". $personaje['opciones'][1] ."'alt='' width='50' height='75' class='my-4' class='img-fluid' > ".
                        " <img  src='". $personaje['opciones'][2] ."'alt='' width='50' height='75' class='my-4' class='img-fluid' > ".
                        " <img  src='". $personaje['opciones'][3] ."'alt='' width='50' height='75' class='my-4' class='img-fluid' > ".
                        "</div>
                    </div>
                  </div>";  
        }

    echo "<div class='text-bg-secondary  p-3'>
            <div class='text-center'>
            <img src='imgs8/logo.png' class='img-fluid' class='rounded'  alt=''>
            </div>";
    
        foreach($personajes as $personaje){
            pintarPorPersonaje( $personaje);
        }    

   echo "</div>";


        
    ?>
    
</body>
</html>