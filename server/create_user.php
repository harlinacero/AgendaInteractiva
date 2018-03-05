<?php
require_once "conector.php";
if ($php_response["msg"]=="OK"){
	$u_exiten = mysqli_query($conexion, "SELECT * FROM usuarios");
	if (mysqli_num_rows($u_exiten) > 0 ){
		$php_response['obser']= "los usaurios ya existen ";
	
	}else{

		$email = "harlin@mail.com";
		$nombre="Harlin Acero ";
		$password =md5("123456");
		$fecha_nacimiento = "1982/07/08";
		$crear = $conexion->prepare("INSERT INTO usuarios (email, nombre, password, fecha_nacimiento) VALUES (?,?,?,?)"); 
		$crear->bind_param("ssss", $email, $nombre, $password, $fecha_nacimiento);
		$crear->execute();

		$email = "fernando@mail.com";
		$nombre="Fernando Gil";
		$password =md5("123456");
		$fecha_nacimiento = "1982/07/08";
		$crear->bind_param("ssss", $email, $nombre, $password, $fecha_nacimiento);
		$crear->execute();

		$email = "rober@mail.com";
		$nombre="Rober Ruiz";
		$password =md5("123456");
		$fecha_nacimiento = "1982/07/08";
		$crear->bind_param("ssss", $email, $nombre, $password, $fecha_nacimiento);
		$crear->execute();
	}	
	$cumple = date('Y/m/d',strtotime("1982/07/08"));
	



}
