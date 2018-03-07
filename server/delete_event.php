<?php
	require_once "conector.php";
	if (!$conexion->error){
		session_start();
		if ($_SESSION['agendaID']){
			$id=$_POST["id"];
			$borrar= mysqli_query($conexion, "DELETE FROM  agenda where id =  '$id' ");
			$php_reponse["msg"]="OK";
			$php_reponse["extra"]=$_POST["id"];
			
		}else{
			$php_reponse["msg"]="Debe volver a iniciar sesión";
		}
	
	}else{
		$php_reponse["msg"]="No se pudo conectar con el servidor";

	}
	echo json_encode($php_reponse);


 ?>
