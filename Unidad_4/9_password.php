<?php	
	function comprobarClave($cadena){
		$minus = FALSE;
		$mayus = FALSE;
		$numeros = FALSE;
		$noalfanumerico = FALSE;
		
		if (strlen($cadena) < 6 or strlen($cadena) > 15) return FALSE;
		
		for( $i = 0; $i < strlen($cadena); $i++){
			if(ctype_upper($cadena[$i])) $mayus = TRUE;
			elseif(ctype_lower($cadena[$i])) $minus = TRUE;
			elseif(ctype_digit($cadena[$i])) $numeros = TRUE;
			elseif(!ctype_alnum($cadena[$i])) $noalfanumerico = TRUE;//sobra la función?
		}
		return $minus and $mayus and $numeros and $noalfanumerico;
	}
	function comprobarClaveER($clave){
		if (strlen($clave) < 6 or strlen($clave	) > 15) return FALSE;
		$mayu = preg_match("/[A-Z]/", $clave);
		$minu = preg_match("/[a-z]/", $clave);
		$nume = preg_match("/[0-9]/", $clave);
		$noalfa = preg_match("/[!-\\\\]/", $clave);
		return $minu and $mayu and $nume and $noalfa;
	}
	$cad = "hol";
	$r = comprobarClave($cad);
	if($r){
		echo "La cadena $cad vale como clave<br>";
	}else{
		echo "La cadena $cad no vale como clave<br>";
	}
	$r = comprobarClaveER($cad);
	if($r){
		echo "La cadena $cad vale como clave<br>";
	}else{
		echo "La cadena $cad no vale como clave<br>";
	}
	$cad = "hola1H_";
	$r = comprobarClave($cad);
	if($r){
		echo "La cadena $cad vale como clave<br>";
	}else{
		echo "La cadena $cad no vale como clave<br>";
	}
	$r = comprobarClaveER($cad);
	if($r){
		echo "La cadena $cad vale como clave<br>";
	}else{
		echo "La cadena $cad no vale como clave<br>";
	}