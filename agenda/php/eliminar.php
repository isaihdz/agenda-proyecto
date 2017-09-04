<?php
session_start();
date_default_timezone_set("America/Mexico_City");

include("conexion.php");

if(isset($_POST['id']) ){ 
$id = $_POST['id']; 
						
$result =mysql_query('
				DELETE FROM `agenda_proyecto`.`contactos_usuario`  WHERE  `contactos_usuario`.`id_contacto` ="'.$id.'";
				');

				
if(mysql_affected_rows()>0)
		{
			$jsondata['ok'] =true;
			
		}
		
		 else{
		$jsondata['ok'] =false;
		
		}

echo json_encode($jsondata);	

}



?>