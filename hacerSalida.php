<?php
include "funciones.php";


$salida=$_POST['txtPatente'];

//$patenteLista=array();
$patenteLista=leerArchivo("patentes.txt");//aca va la funcion que busca el auto estacionado y lo vuelca en un array

$guardado= "no guardado";

foreach ($patenteLista as $dato ) //el foreach es como el mientras pero de los arrays, $dato es el que recorre el foreach es como el a++
{
	if ($dato[0]==$salida) //$dato[0] es el primer campo, no el primer renglon-- campo 0 sería la patente, campo 1 sería la fecha y hora de inicio, los campos están separados por el separador de campos que en este caso es => 
	{
		$guardado="guardado";

		date_default_timezone_set("America/Argentina/Buenos_Aires");
		$fechaEntrada=$dato[1];
		$fechaSalida=date("Y-m-d H:i");
		$minutos=DiferenciaDeFechas($fechaEntrada, $fechaSalida, "%i");
		$precio=$minutos*2.50;
		
		echo "<h3>COMPROBANTE</h3>";
		echo "Patente: " .$salida."<br>";
		echo "Fecha de ingreso: ".$fechaEntrada."<br>Fecha de salida: ".$fechaSalida."<br>";
		echo "Tiempo de guardado: ". $minutos. "' <br>";
		echo "Precio a pagar($2,50/minuto): $". $precio. "<br><br>";
		echo "FIN***";

		
		guardar("\n".$salida."=>".quitarCaracter($fechaEntrada)."=>".$fechaSalida."=>". $precio,"cobrados.txt");
		break;

	}	

}
if ($guardado=="no guardado") 
{
	echo "NO REGISTRADO";
} 
else
{
	crearArchivo("patentes.txt"); // crea un archivo en blanco sobre el archivo patentes.txt 

	foreach ($patenteLista as $dato ) 
	{
		if ($dato[0]!=$salida) 
		{
						
			guardar("\n".$dato[0]."=>".quitarCaracter($dato[1]),"patentes.txt");
			

		}	

	}


}





























?>