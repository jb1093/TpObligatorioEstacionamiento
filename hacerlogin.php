<?php
include "funciones.php";
if (isset($_POST['correo']) && isset($_POST['password']))
{
	$mail=$_POST['correo'];
	setcookie("usuarioCookie",$mail ,time()+60*60*24*30);
	$clave=$_POST['password'];
}
else
{
	die();
}



$listadoDeUsuarios=leerArchivo("usuariosLogin.txt");


$ingreso="No ingreso";
foreach ($listadoDeUsuarios as $datos)
 {
	if($datos[0]==$mail)
	{
		if ($datos[1]==$clave) 
		{
			header("location: estacionar.php?usuarioCookie=$mail");
			$ingreso="Ingreso";
			break;
		}
	}	
 }

 if($ingreso=="No ingreso")
 {
 	echo "ERROR-- datos erroneos";
 }

?>