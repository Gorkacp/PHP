<?php
// 2.-Recorrer un fichero de texto carácter a carácter y mostrar su contenido. Usa fgetc()
	$fich = fopen("fichero_ejemplo.txt", "r");
	if ($fich === False){
		echo "No se encuentra el fichero o no se pudo leer<br>";
	}else{
		while( !feof($fich) ){
			$car = fgetc($fich);			
			echo $car;
		}
	}
	fclose($fich); 