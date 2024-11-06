<?php
	function matriculaValida($matricula){
		/*4 numeros, 3 consonantes mayúsculas 9999XYZ*/
		// comprobar que la longitud es 7
		if(strlen($matricula)!=7) return FALSE;
		/* coger los números */
		$num = substr( $matricula, 0, 4);
		$todonumeros = ctype_digit($num);
		if( !$todonumeros ) return FALSE;
		/* coger las letras */
		$letras = substr( $matricula, 4, 3);
		/* comprobar que todas sean mayúsculas*/
		$mayus = ctype_upper( $letras );		
		if (!$mayus) return FALSE;
		/* comprobar que no aparezcan las vocales*/
		$vocales = strpbrk( $letras, "AEIOU");
		if($vocales === FALSE) return TRUE;
		else return FALSE;		
	}
	$cad = "12345RS";
	if(matriculaValida($cad)){
		echo "La cadena $cad vale como matricula<br>";
	}else{
		echo "La cadena $cad NO vale como matricula<br>";
	}
	$cad = "1234PRS";
	if(matriculaValida($cad)){
		echo "La cadena $cad vale como matricula<br>";
	}else{
		echo "La cadena $cad NO vale como matricula<br>";
	}