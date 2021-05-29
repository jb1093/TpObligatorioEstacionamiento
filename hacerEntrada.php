<?php
include "funciones.php";
date_default_timezone_set("America/Argentina/Buenos_Aires");
$entrada=$_POST['txtPatente'];

if ($entrada!="") 
{
	$hora=date("Y-m-d H:i");
	$registro="\n".$entrada."=>".$hora;
	//funcion para guardar las patentes cuando ingresan al estacionamiento
	guardar($registro , "patentes.txt");
	echo "Registro guardado exitosamente!";

}
else
{
	echo "ERROR AL CARGAR";

}




























?>