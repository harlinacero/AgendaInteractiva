<?php
 
	require_once "conector.php";
	if (!$conexion->error){
		session_start();
		if ($_SESSION['agendaID']){
			$id=$_POST["id"];
			$fecha_inicio	=date("Y/m/d",strtotime($_POST['start_date']));
			$hora_inicio	=date("H:i:s",strtotime($_POST['start_hour']));
			$fecha_fin	=date("Y/m/d",strtotime($_POST['end_date']));
			$hora_fin	=date("H:i:s",strtotime($_POST['end_hour']));
			
			$update= mysqli_query($conexion, "UPDATE  agenda SET  
									start= '$fecha_inicio', 
									start_hour='$hora_inicio', 
									end = '$fecha_fin',
									end_hour='$hora_fin' 
									where id =  '$id' ");
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
