<?php

/*********************/
/***** VARIABLES *****/
/*********************/

$barajas = array(
				array(
					"name" => "heroes",
					"excel" => "https://docs.google.com/spreadsheets/d/1WcXCMSf09t5KRDTN9uPve-E-wskxYpr4dDvsrJvL0V4/gviz/tq?tqx=out:csv&gid=0",
					"edit" => "https://docs.google.com/spreadsheets/d/1WcXCMSf09t5KRDTN9uPve-E-wskxYpr4dDvsrJvL0V4/edit?usp=sharing",
				),
				array(
					"name" => "acciones",
					"excel" => "https://docs.google.com/spreadsheets/d/1v1rxBe0orI-tpi-dtb_i8vJ_WS3pUJ9rGvJOrRLMnp0/gviz/tq?tqx=out:csv&gid=0",
					"edit" => "https://docs.google.com/spreadsheets/d/1v1rxBe0orI-tpi-dtb_i8vJ_WS3pUJ9rGvJOrRLMnp0/edit?usp=sharing",
				),
				array(
					"name" => "lugares",
					"excel" => "https://docs.google.com/spreadsheets/d/1sqtFPFqdppY49M4aR6LGlMHVckH8y7zxknhhIhkfVs8/gviz/tq?tqx=out:csv&gid=0",
					"edit" => "https://docs.google.com/spreadsheets/d/1sqtFPFqdppY49M4aR6LGlMHVckH8y7zxknhhIhkfVs8/edit?usp=sharing",
				),
				array(
					"name" => "enemigos",
					"excel" => "https://docs.google.com/spreadsheets/d/16THcAEiI_lJyXQhj2Nxpu22d--ioJgoHqo_zxnR25qY/gviz/tq?tqx=out:csv&gid=0",
					"edit" => "https://docs.google.com/spreadsheets/d/16THcAEiI_lJyXQhj2Nxpu22d--ioJgoHqo_zxnR25qY/edit?usp=sharing",
				),
				array(
					"name" => "acciones-enemigos",
					"excel" => "https://docs.google.com/spreadsheets/d/1rGaNhEPYKeDjTK_rD8VtIjzvoDxKYB3OJYEfTa-6S0I/gviz/tq?tqx=out:csv&gid=0",
					"edit" => "https://docs.google.com/spreadsheets/d/1rGaNhEPYKeDjTK_rD8VtIjzvoDxKYB3OJYEfTa-6S0I/edit?usp=sharing",
				),
				array(
					"name" => "objetos",
					"excel" => "https://docs.google.com/spreadsheets/d/1KcxAIT9ycaHVOQ39S_Y_4JUz_3AWTqo6ljLrKfwmgRk/gviz/tq?tqx=out:csv&gid=0",
					"edit" => "https://docs.google.com/spreadsheets/d/1KcxAIT9ycaHVOQ39S_Y_4JUz_3AWTqo6ljLrKfwmgRk/edit?usp=sharing",
				),
				array(
					"name" => "mazmorra",
					"excel" => "https://docs.google.com/spreadsheets/d/1sar2FGNF23kc_wJ0q1vXImHKhXTkgOpY5GfxkKHdqHg/gviz/tq?tqx=out:csv&gid=0",
					"edit" => "https://docs.google.com/spreadsheets/d/1sar2FGNF23kc_wJ0q1vXImHKhXTkgOpY5GfxkKHdqHg/edit?usp=sharing",
				),
			);


$formatoCartas = array(
				array(
					"name" => "Euro",
					"h-mm" => "88",
					"w-mm" => "63.5",
					"h-px" => "1110",
					"w-px" => "821",	
				),
				array(
					"name" => "Bridge",
					"h-mm" => "87",
					"w-mm" => "56",
					"h-px" => "1098",
					"w-px" => "732",
				),
				array(
					"name" => "Mini",
					"h-mm" => "63",
					"w-mm" => "41",
					"h-px" => "815",
					"w-px" => "555",
				),
			);

$sizeCardBig = array(
				"alto" => "1116",
				"ancho" => "732",
				"alto-sangre" => "1045",
				"ancho-sangre" => "661",
				"alto-margen" => "974",
				"ancho-margen" => "591",
			);

$sizeCardSmall = array(
				"alto" => "815",
				"ancho" => "555",
				"alto-sangre" => "744",
				"ancho-sangre" => "484",
				"alto-margen" => "673",
				"ancho-margen" => "413",
			);

/*********************/
/***** FUNCIONES *****/
/*********************/


function varDump($variable){
	echo '<pre>';
	var_dump($variable);
	echo '</pre>';
}


function csvToArray($csvFile) {
	$lines = file($csvFile);
	$header = array_shift($lines);
	$csvArray = array_map(
					function ($line) use ($header) {
						$formarArray = array_combine(str_getcsv($header), str_getcsv($line)); 
						return $formarArray; 
					}
					, 
					$lines
				);
	return $csvArray;
}


/* Selecciona los valores unicos dentro de la hoja de calculo dentro del campo pasado por $key */
function uniqueMultidimArray($array, $key) {
    $temp_array = array();
    $i = 0;
    $key_array = array();
    foreach($array as $val) {
        if (!in_array($val[$key], $key_array)) {
            $key_array[$i] = $val[$key];
      		$temp_array[$i] = $val;
        }
        $i++;
    }
    return $temp_array;
}


/* Genera los enlaces del menu lateral */
function sidebarUniqueLinks($section, $uniqueKey) {
	$excel = localizeExcel($section);
	$csvArray = csvToArray($excel);
	$results = uniqueMultidimArray($csvArray,$uniqueKey);
	foreach ($results as $result) {
		echo '<li><a class="sidebar-link text-decoration-none d-inline-block rounded" href="index.php?page=baraja&deck='.$section.'&uniqueKey='.$uniqueKey.'&uniqueVal='.$result[$uniqueKey].'">'.$result[$uniqueKey].'</a></li>';
	}
} 


/* Devuelve el array de las cartas segun el enlace del menu lateral */
function buildArrayCards($excelName, $uniqueKey, $uniqueVal) {
	$excel = localizeExcel($excelName);
	$csvArray = csvToArray($excel);
	$filterArray = filterArray($csvArray, $uniqueKey, $uniqueVal);
	return $filterArray;
}


/* Filtrar el array de las cartas segun el campo del excel definido en $filterValue */
function filterArray($array, $filterKey, $filterValue) {
	foreach ($array as $key => $val) {
		if ($val[$filterKey] === $filterValue) {
			$arrayCards[] = $array[$key];
		}
	}
	return $arrayCards;
}


/* Selecciona la hoja de calculo solicitada */
function localizeExcel($name) {
	global $barajas;
	foreach ($barajas as $key => $val) {
        if ($val["name"] === $name) {
        	return $barajas[$key]["excel"];
        }
    }
}


/* Define el enlace a la hoja de calculo mostrado en el componente header-deck */
function linkExcel($name) {
	global $barajas;
	foreach ($barajas as $key => $val) {
        if ($val["name"] === $name) {
        	return $barajas[$key]["edit"];
        }
    }
}


/* Muestra las acciones de la carta */
function buscaAcciones($carta) {
	$i = 1;
	while (!empty($carta["Accion$i"])) {
	 	echo '<li>'.$carta["Accion$i"].'</li>';
	    $i++;
	}
}


/* Muestra las acciones de los enemigos */
function listaAccionesEnemigos($carta) {
	$i = 1;
	while (!empty($carta["Accion$i"])) {
	 	//echo '<div class="col item-accion-enemigo">'.$carta["Accion$i"].'</div>';
	 	echo '<th class="item-accion-enemigo text-center">'.$carta["Accion$i"].'</th>';
	    $i++;
	}
}


/* Muestra el texto de ambientacion de la carta */
function buscaFlavor($carta) {
	$i = 1;
	while (!empty($carta["Flavor$i"])) {
		/*si la carta tiene el icono de prepara darle margen por la derecha*/
		if (isset($carta["Preparacion"]) && $carta["Preparacion"] == "1") {
			$var = "padding-preparacion";
		}
	 	echo '<p class="flavor text-centerr '.$var.'">'.$carta["Flavor$i"].'</p>';
	    $i++;
	}
}


/* Muesta el icono del tipo de accion de los heroes */
function imagenTipoAccion($tipoAccion) {
	$tipoAcciones = array(
					"Exploración" => "explorar",
					"Ataque" => "atacar",
					"Descanso" => "descansar",
					"Apoyo" => "apoyar",
				);
	foreach ($tipoAcciones as $key => $val) {
		if($key == $tipoAccion) {
			echo $val;
		}
	}
}


/* Muestra la plantilla de los enemigos segun el numero de acciones */
function fondoEnemigo($carta) {
	$i = 1;
	while (!empty($carta["Accion$i"])) {
	    $i++;
	}
	$i--;
	if ($carta["Tipo"] == "Antagonista") {
		echo 'ant-'.$i;
	}elseif ($carta["Tipo"] == "Élite") {
		echo 'eli-'.$i;
	}else{
		echo 'ene-'.$i;
	}
}


/* Muestra el texto de las acciones de los enemigos */
function buscaAccionesEnemigo($carta) {
	$excel = localizeExcel("acciones-enemigos");
	$csvArray = csvToArray($excel);	
	$i = 1;
	while (!empty($carta["Accion$i"])) {
	 	foreach ($csvArray as $key => $value) {
	 		//varDump($value);
	 		if ($value["Nombre"] === $carta["Accion$i"] && !empty($value["Texto"])) {
				echo '<li><b>'.$value["Nombre"].': </b>'.$value["Texto"].'</li>';
			}
	 	}
	    $i++;
	}
}


/* Muestra los efectos de la carta */
function buscaEfectos($carta) {
	$i = 1;
	while (!empty($carta["Efecto$i"])) {
	 	echo '<li>'.$carta["Efecto$i"].'</li>';
	    $i++;
	}
}


/* Muestra la accion de Antagonista */
function buscaAccionNemesis($carta) {
	if (!empty($carta["Nemesis"])) {
	 	echo $carta["Nemesis"];
	}
}


/* Agrega la clase nemesis en la carta de Enemigo */
function esNemesis($carta) {
	if (!empty($carta["Nemesis"])) {
		echo '-nemesis';
	}
}



/* Genera el subtitulo de la carta de Enemigos */
function subtituloEnemigo($carta) {
	if (!empty($carta["Tipo"])) {
	 	echo $carta["Familia"].' · '.$carta["Tipo"];
	}else{
		echo $carta["Familia"];
	}
}


/* Muestra el texto en las cartas de Lugar */
function buscaTexto($carta) {
	$i = 1;
	while (!empty($carta["Texto$i"])) {
	 	echo '<li>'.$carta["Texto$i"].'</li>';
	    $i++;
	}
}


/* Modifica el texto sustituyendo espacios por guiones, quitando acentos y mayusculas */
function transformarTexto($texto) {
	//cambiar espacios por guiones
	$texto = strtr($texto, " ", "-");
	//pasar a minusculas
	$texto = strtolower($texto);
	//eliminar acentos y caracteres especiales
	setlocale(LC_ALL, "en_US.utf8");
	$texto = iconv("utf-8", "ascii//TRANSLIT", $texto);
	return $texto;
}


/* Devuelve el nombre del archivo de imagen basandose en el titulo de la carta */
function imagenLugar($carta) {
	$texto = transformarTexto($carta["Titulo"]);
	$img = $texto.'.png';
	$file = 'img/lugares/'.$img;
	if (file_exists($file)) {
	    echo $file;
	} else {
	    echo "img/lugares/default-lugar.png";
	}
}


/***************************/
/***** ACCIONES HEROES *****/
/***************************/

/* Devuelve el nombre del archivo de imagen basandose en el titulo de la carta */
function imagenFondoAccionTop($carta) {
	$heroe = transformarTexto($carta["Heroe"]);
	$tipo = transformarTexto($carta["Tipo"]);
	$nivel = substr(transformarTexto($carta["Nivel"]), 0, 1);
	$img = $heroe.'-'.$tipo.'-'.$nivel.'.png';
	$file = 'img/acciones-heroes/'.$heroe.'/'.$img;
	if (file_exists($file)) {
	    echo $file;
	} else {
	    echo "img/acciones-heroes/default-accion-heroe-bg.png";
	}
}

/* Devuelve el nombre del archivo de imagen basandose en el titulo de la carta */
function imagenFondoAccionBottom($carta) {
	$heroe = transformarTexto($carta["Heroe"]);
	$nivel = substr(transformarTexto($carta["Nivel"]), 0, 1);
	$img = $heroe.'-'.$nivel.'.png';
	$file = 'img/acciones-heroes/'.$heroe.'/'.$img;
	if (file_exists($file)) {
	    echo $file;
	} else {
	    echo "img/acciones-heroes/default-accion-heroe-bg.png";
	}
}

/* Devuelve el nombre del archivo de imagen basandose en el titulo de la carta */
function imagenAccion($carta) {
	$texto = transformarTexto($carta["Titulo"]);
	$img = $texto.'.png';
	$file = 'img/acciones-heroes/'.$img;
	if (file_exists($file)) {
	    echo $file;
	} else {
	    echo "img/acciones-heroes/default-accion-heroe.png";
	}
}


/* Devuelve el nombre del archivo de imagen basandose en el titulo de la carta */
function imagenFondoAccion($carta) {
	$texto = transformarTexto($carta["Heroe"]);
	$img = $texto.'.png';
	$file = 'img/acciones-heroes/'.$img;
	if (file_exists($file)) {
	    echo $file;
	} else {
	    echo "img/acciones-heroes/default-accion-heroe-bg.png";
	}
}

function buscaPreparar($carta) {
	if ($carta["Preparacion"] == "1") {
		echo '<img class="img-preparar" src="img/iconos/preparar.png">';
	}
}

/***************************/
/***** CARTAS DE HEROE *****/
/***************************/

/* Devuelve el nombre del archivo de imagen basandose en el titulo de la carta */
function imagenHeroe($carta) {
	$texto = transformarTexto($carta["Clase"]);
	$img = $texto.'.png';
	$file = 'img/heroes/'.$img;
	if (file_exists($file)) {
	    echo $file;
	} else {
	    echo "img/heroes/default-heroe.png";
	}
}


/* Devuelve el nombre del archivo de imagen basandose en el titulo de la carta */
function imagenFondoHeroe($carta) {
	$texto = transformarTexto($carta["Clase"]);
	$img = $texto.'-'.$carta["Jugadores"].'.png';
	$file = 'img/heroes/'.$img;
	if (file_exists($file)) {
	    echo $file;
	} else {
	    echo "img/heroes/default-heroe-bg.png";
	}
}




/***************************/
/***** ENEMIGOS *****/
/***************************/

/* Devuelve el nombre del archivo de imagen basandose en el titulo de la carta */
function imagenEnemigo($carta) {
	$texto = transformarTexto($carta["Titulo"]);
	$img = $texto.'.png';
	$file = 'img/enemigos/'.$carta["Familia"].'/'.$img;
	if (file_exists($file)) {
	    echo $file;
	} else {
	    echo "img/enemigos/default-enemigo.png";
	}
}


/***************************/
/***** OBJETOS *****/
/***************************/

function imagenFondoObjeto($carta) {
	$texto = transformarTexto($carta["Titulo"]);
	$img = $texto.'.png';
	$file = 'img/objetos/'.$img;
	if (file_exists($file)) {
	    echo $file;
	} else {
	    echo "img/objetos/default-objeto-bg.png";
	}
}

function objetoBasico($carta) {
	if ($carta["Subtitulo"] === '') {
		echo '-basico';
	}
}


/***************************/
/***** MAZMORRA *****/
/***************************/

function imagenFondoMazmorra($carta) {
	$texto = transformarTexto($carta["Titulo"]);
	$img = $texto.'.png';
	$file = 'img/mazmorra/'.$img;
	if (file_exists($file)) {
	    echo $file;
	} else {
	    echo "img/mazmorra/default-mazmorra-bg.png";
	}
}















?>