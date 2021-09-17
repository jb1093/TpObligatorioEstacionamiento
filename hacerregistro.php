<?php
include "funciones.php";
if(isset($_POST['correo']) && isset($_POST['password']) && isset($_POST['copiapassword']))
{
	$mail=$_POST['correo'];
	$clave=$_POST['password'];
	$copiaClave=$_POST['copiapassword'];	
}
else
{
	die();
}

if($clave==$copiaClave)
{
	
	$ahora=date("Y-m-d H:i:s");
	$renglon="\n".$mail."=>".$clave. "=> ".$ahora ;

	guardar($renglon, "usuariosLogin.txt");
	header("location: login.php");

} 
else{
	echo "ERROR en clave";
}

?>