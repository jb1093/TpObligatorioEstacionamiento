<?php
include_once "estacionamiento.php";
//date_default_timezone_set("America/Argentina/Buenos_Aires");
if(isset($_POST['txtPatente']))
{
	$entrada=$_POST['txtPatente'];
	
}
else
{
	die();
}

if(isset($_POST['gnc']))
{
	$valorgnc=$_POST['gnc'];
}
else
{
	$valorgnc="no gnc";
	
}
if(isset($_POST['vehiculo']))
{
	$vehiculo=$_POST['vehiculo'];
}
else
{
	$vehiculo="";
	
}

//--------------------------------------------------------------------
if ($entrada!="" && !($vehiculo=="moto" && $valorgnc=="gnc")) 
{
	if($valorgnc=="gnc")
	{
		$guardaDato="CON GNC";
	}
	else
	{
		$guardaDato="SIN GNC";
	}

	$hora=date("Y-m-d H:i");
	$registro="\n".$entrada."=>".$hora."=>".$guardaDato."=>".$vehiculo."=>x";
	
	//funcion para guardar las patentes cuando ingresan al estacionamiento
	guardar($registro , "patentes.txt");
	echo "Registro guardado exitosamente!";
	estacionamiento::CrearTablaEstacionamiento();
	estacionamiento::CrearTablaCobrados();
	include "generarautocompletar.php";
	
}
else
{
	echo "ERROR AL CARGAR";

}




























?>