<?php

$mail=$_POST['correo'];


$clave=$_POST['password'];
$copiaClave=$_POST['copiapassword'];



if($clave==$copiaClave)
{
	date_default_timezone_set("America/Argentina/Buenos_Aires");
	$ahora=date("Y-m-d H:i:s");
	$renglon="\n".$mail."=>".$clave. "=> ".$ahora ;

	$archivo=fopen("usuariosLogin.txt", "a");
	fwrite($archivo, $renglon);
	fclose($archivo);
	header("location: entrada.php");

} 
else{
	echo "ERROR en clave";
}










?>