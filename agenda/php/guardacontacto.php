<?php
  include("conexion.php");

  if (isset($_POST['nombre'])) {

      $nombre = $_POST['nombre'];
      $telefono = $_POST['telefono'];
      $email = $_POST['email'];
      $clave = $_POST['clave'];
      $foto = " ";



      if (preg_match("/^[a-z]+$/i", $nombre)) 
       {
        if (preg_match("/[0-9]{9}$/", $telefono)) 
        {
          if (preg_match("/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/", $email)) 
          {
                  $result = mysql_query('
  	  	                                INSERT INTO 
  	  	                                `agenda_proyecto`.`contactos_usuario` (
						                            `nombre_contacto`,
						                            `telefono_contacto`,
						                            `email_contacto`,
                                        `foto_contacto`,
                                        `id_user_contacto`
                                        )
						                          VALUES (
					                          	"'.$nombre.'","'.$telefono.'","'.$email.'","'.$foto.'","'.$clave.'" );');
  	                    if (!$result)
  	                             {
  	  	                            die('Invalid query:' .mysql_error());
  	                             }

  	                    if (mysql_affected_rows()>0)
  	                       {
  	                          $jsondata['ok'] = true;	
  	                       }
  	                    else
                        {
  	    	                $jsondata['ok'] = false;
  	                     }

  	                 echo json_encode($jsondata);
                   }
                   else{
                         echo "<script language='javascript'>alert('Error en el email');</script>";
                   }
          }
          else
          {
             echo "<script language='javascript'>alert('Error en el telé  fono');</script>";
          }
       }
       else
           {
          echo "<script language='javascript'>alert('Error en el Nombre');</script>";
           }

  }

  ?>