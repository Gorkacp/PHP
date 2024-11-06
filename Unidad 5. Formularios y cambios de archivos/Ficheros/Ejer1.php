<?php
// 1.-Crea un script para abrir un fichero de texto para lectura. 
// Debes de asegurarte que el fichero existe y en caso contrario mostrar un mensaje de error. 
// Pon dos ejemplos, con un fichero que existe y con otro que no existe.

	$fich = fopen("fichero_ejemplo.txt", "r");
	if ($fich === False){
		echo "No se encuentra fichero_ejemplo.txt<br>";
	}else{
		echo "fichero_ejemplo.txt se abrió con éxito<br>";
	}
	$fich = fopen("fichero_no_existe.txt", "r");
	if ($fich === False){
		echo "No se encuentra fichero_no_existe.txt<br>";
	}else{
		echo " fichero_no_existe.txt se abrió con éxito<br>";
	} 