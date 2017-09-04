<?php
  include("conexion.php");

  if (isset($_POST['nombre'])) {

      $nombre = $_POST['nombre'];
      $telefono = $_POST['telefono'];
      $email = $_POST['email'];
      $foto = $_POST['ruta'];;
      $id = $_POST['id'];


                  $result = mysql_query('
  	  	                                UPDATE 
  	  	                                `agenda_proyecto`.`contactos_usuario` 

                                     SET `nombre_contacto` = "'.$nombre.'" ,
						                            `telefono_contacto` ="'.$telefono.'" ,
						                            `email_contacto` = "'.$email.'" ,
                                        `foto_contacto` = "'.$foto.'"
                                        
						                    
					                          	 WHERE  `contactos_usuario`.`id_contacto` = "'.$id.'" ;');


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

  ?>