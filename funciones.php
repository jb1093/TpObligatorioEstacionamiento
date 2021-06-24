<?php

function DiferenciaDeFechas($fecha1 , $fecha2 , $formato = '%i' )
{
    $fechaHora1 = date_create($fecha1);
    $fechaHora2 = date_create($fecha2);
   
    $interval = date_diff($fechaHora1, $fechaHora2);
   
    return $interval->format($formato);
}
//la funcion guarda sirve para guardar datos que ingresan como los que salen 
function guardar($renglon, $nombreDeArchivo)
{
	$archivo=fopen($nombreDeArchivo, "a");
	fwrite($archivo, $renglon); 
	fclose($archivo);
}

//funcion de usuario

function quitarCaracter($dato)
{
	$totalCaracteres=strlen($dato);
	if($totalCaracteres==17)
	{
		$totalCaracteres--;
	}
	return substr($dato, 0, $totalCaracteres);// va a sacar un caracter siempre y cuando el total de caracteres sea de 17, ya que si es fin de archivo va a tener 16 caracteres. 

	//para sacar el salto de renglon uso la funcion substr, srtlen me dice la cantidad de caracteres, con esto evito el salto de renglon y me queda todo en uno
}


function leerArchivo($nombreDeArchivo)//lee el archivo que esta en la variable $nombreDeArchivo
{
	$matrizDeRetorno=array();//matriz temporal que guarda todo el contenido del archivo para después de guardarlo
	$archivo=fopen($nombreDeArchivo, "r");

	while (!feof($archivo)) 
	{
		$renglon=fgets($archivo);//lee el renglon y lo asigna a la variable $renglon
		$datosDePatente=explode("=>", $renglon); //subdivide lo que lee en campos que estan separados por el delimitador => 
		if(isset($datosDePatente[1]))
		{
			$matrizDeRetorno[]=$datosDePatente;
		}
	}

	fclose($archivo);
	return $matrizDeRetorno;

}

function crearArchivo($nombreDeArchivo) //crea un archivo en blanco
{
	$archivo=fopen($nombreDeArchivo, "w");
	fwrite($archivo, ""); 
	fclose($archivo);


}

function mostrar ($fechaE , $fechaS , $patente , $valor, $tiempo)//ticket 
{	
		echo "<h3>COMPROBANTE</h3>";
		echo "Patente: " .$patente."<br>";
		echo "Fecha de ingreso: ".$fechaE."<br>Fecha de salida: ".$fechaS."<br>";
		echo "Tiempo de guardado: ". $tiempo. "' <br>";
		echo "Precio a pagar: $". $valor. "<br><br>";
		echo "FIN***";
		
}

























date_default_timezone_set("America/Argentina/Buenos_Aires");

?>