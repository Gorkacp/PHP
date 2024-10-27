<?php
// 3.-Se pide:
//Recorrer el  fichero con fscanf() de las dos maneras posibles mostrando su contenido
//antes de empezar la segunda vuelta sitúa el indicador de posición de nuevo al principio del fichero usando rewind()
	$fich = fopen("Ejer3.txt", "r");
	if ($fich === False){
		echo "No se encuentra el fichero o no se pudo leer<br>";
	}else{
		while( !feof($fich) ){
			$num = fscanf($fich, "%d %d %d %d");
			echo "$num[0] $num[1] $num[2] $num[3] <br>";
		}
	}
	rewind($fich);
	while( !feof($fich) ){
			$num = fscanf($fich, "%d %d %d %d", $num1, $num2, $num3, $num4 );
			echo "$num1 $num2 $num3 $num4 <br>";
		}
	fclose($fich);