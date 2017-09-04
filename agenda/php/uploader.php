<?php 
include("conexion.php");

if (isset($_POST['subir']) && empty($_POST['archivo'])) {

   $rs = mysql_query("SELECT MAX(id_contacto) AS id FROM contactos_usuario");
          if ($row = mysql_fetch_row($rs)) {
          $id = trim($row[0]);
         }


   foreach ($_FILES['archivo'] as $archivo => $valor) {
   }
   $archivo = $_FILES['archivo']['tmp_name'];
   $destino = "fotoupload/".$_FILES['archivo']['name']; 
    if ($_FILES['archivo']['size'] < 10000) {
    
   if ($_FILES['archivo']['type'] == 'image/png' || $_FILES['archivo']['type'] == 'image/jpeg') {
      move_uploaded_file($archivo,$destino);
      $result = mysql_query(' 
        UPDATE `agenda_proyecto`.`contactos_usuario`
        
       SET  `contactos_usuario`.`foto_contacto`= "'.$destino.'"
       WHERE  `contactos_usuario`.`id_contacto` ="'.$id.'";') or die(mysql_error());
      echo "<script language='javascript'>alert('Archivo Subido correctamente');</script>";
    }
   else{
     echo "<script language='javascript'>alert('Error al subir el Archivo');</script>";
    }
  }  

   

}
?>		