<?php

if (isset($_POST['correo']) )
{
	$mail=$_POST['correo'];
}
else
{
	die();
}


$clave=$_POST['password'];
$listadoDeUsuarios=array();

$archivo=fopen("usuariosLogin.txt", "r");
//DE LA 14 A LA 30 TRANSFIERO INFORMACION FISICA A MEMORIA 
while ( !feof($archivo)) {

	$renglon=fgets($archivo);
	$datosDeUnUsuario=explode("=>", $renglon);
	if(isset($datosDeUnUsuario[1]))
	{
		$listadoDeUsuarios[]=$datosDeUnUsuario;
	}
	
}

fclose($archivo);


$ingreso="No ingreso";
foreach ($listadoDeUsuarios as $datos)
 {
	if($datos[0]==$mail)
	{
		if ($datos[1]==$clave) 
		{
			header("location: entrada.php");
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