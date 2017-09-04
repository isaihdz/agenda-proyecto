<?php
include("php/conexion.php");

class Usuarios
{
   
    public function buscarUsuario($nombreUsuario){
        $datos = array();

        $sql = "SELECT * FROM `agenda_proyecto`.`contactos_usuario`
                WHERE nombre_contacto LIKE '$nombreUsuario%'";

        $resultado = mysql_query($sql);

        while ($row = mysql_fetch_array($resultado, MYSQL_ASSOC)){
            $datos[] = array("value" => $row['nombre_contacto'].' '.$row['email_contacto'],
                   "email" => $row['email_contacto']
                             );
        }

        return $datos;
    }
}



?>
