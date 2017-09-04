<?php session_start();

	include("conexion.php");
	
//Obtiene los valores enviados
$user_name=htmlspecialchars($_POST['user_name'],ENT_QUOTES);
$pass=htmlspecialchars($_POST['password']);


//Valida el usuario y la contraseña
$sql="SELECT id_usuario, user_nombre, password_usuario FROM usuarios_agenda WHERE user_nombre='".$user_name."'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);

//Verifica si el usuario existe 
if(mysql_num_rows($result)>0)
{
	//Compara la contraseña
	if(strcmp($row['password_usuario'],$pass)==0)
	{
		$id_user = $row['id_usuario'];		
		//Obtiene valores en caso de usar como variables de sesión
		$_SESSION['u_name']=$user_name;
		$_SESSION['id_user']=$id_user; 
		echo "yes";
	}
	else
		echo "no"; // la contraseña es incorrecta
}
else
	echo "no"; //Login Invalido 


?>