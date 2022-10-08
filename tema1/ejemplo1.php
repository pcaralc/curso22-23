<?php
    include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");
?>

      <div class="col-md-8 themed-grid-col">
		<div class="flex-shrink-0 p-3 bg-white">
			<?php
				echo "Primer ejemplo";
				/* Hacer una tabla 5*3 desde php y rellenarla con*/
				echo "<table>";
				$contador = 1;
				for($i=0; $i<5; $i++){
					echo "<tr>";

					for($j=0; $j<3; $j++){
						echo "<td>" . $contador. "</td>";
						$contador++;
					}

					echo "</tr>";
				}
				echo "</table>";

				echo "<br>";
				echo "Segundo ejemplo";
				echo "<br>";
				//Muestra la tabla de multiplicar de una variable $numero
				$numero=2;
				echo "<table>";
				for($i=0; $i<10; $i++){
					
					echo $numero . "x". $i. "=" . $numero*$i ."<br>"; 
				}
				echo "</table>";
				echo "<br>";

				echo "Tercer ejemplo";
				echo "<br>";
				//Muestra una cadena al revés
				//strlen - devuelve la longitud de la cadena
				$cadena = "En un lugar de la mancha de cuto nombre";
				//echo strlen($cadena);
				//echo $cadena[1];
				for($i=strlen($cadena)-1; $i>=0; $i--){
					echo $cadena[$i];
				}


			?>
		</div>
	</div>

<?php
    include_once("../pie.php");
?>
