<?php 
session_start();
date_default_timezone_set("America/Mexico_City");

include("conexion.php");

if(isset($_POST['email'])){

$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$asunto = $_POST['asunto'];



$shtml='Estimado '.$email;
	
	$sfrom= "iasiher13@gmail.com" ; //cuenta que envia 
	//echo $mailejecutivo;
	$sdestinatario= $email; //cuenta destino 
	$ssubject= $asunto.$mensaje;//subject  
	$sheader="From:".$sfrom."\nReply-To:".$sfrom."\n"; 
	$sheader=$sheader."X-Mailer:PHP/".phpversion()."\n"; 
	$sheader=$sheader."Mime-Version: 1.0\n"; 
	$sheader=$sheader."Content-Type: text/html"; 

		if(mail($sdestinatario,$ssubject,$shtml,$sheader))
		{
			$jsondata['ok'] =true;
		}else{
			$jsondata['ok'] =false;
		}		
	echo json_encode($jsondata);		
	
}



?> 
