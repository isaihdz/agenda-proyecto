<?php 
include("php/conexion.php");
session_start();
date_default_timezone_set("America/Mexico_City");
        if (!isset($_SESSION['id_user'])){
              header('Location: index.html');
    } 
     else 
      $clave = $_SESSION['id_user'];

    echo "<input type='hidden' name='clave' id='clave' value='".$clave."'>";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>Agenda</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="css/960.css" type="text/css" media="screen" charset="utf-8" />
    <link rel="stylesheet" href="css/template.css" type="text/css" media="screen" charset="utf-8" />
    <link rel="stylesheet" href="css/colour.css" type="text/css" media="screen" charset="utf-8" />
    <link type="text/css" rel="stylesheet" href="css/jquery-ui-1.8.4.custom.css" />
   
  </head>
  <body>

    

  <div id="content" class="container_16 clearfix">
    <div class="row">

    <h1 id="head" align="center">Agenda</h1>

    <p><img align="right" src="img/inicio.png" width="104" height="59"  /></p>
     <br>

    <div class="btn-group">  
      <div class="dropdown" >
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        Contactos
        <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" >

          <li><a href="inicio.php">Mostrar Todos</a></li>
          <li><a href="agregar.php"> Agregar Contacto</a> </li>
          <li><a href="buscar.php">Buscar o Editar Contacto</a> </li>  
          <li><a href="mensaje.php">Enviar mensaje</a> </li>      
        </ul>
        </div>
    </div>

    <div class="btn-group">    
       <div class="dropdown" >
         <button class="btn btn-default dropdown-toggle" type="button" id="Dos" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        Sesión
        <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="Dos" >
          <li><a href="php/logout.php">Cerrar sesión</a></li>
        </ul>
      </div>
    </div> 

  </div>
 </div>  


 < <div id="content" class="container_16 clearfix">
    <div class="row">
    <h1>Todos los contactos </h1>
 <div class="grid_16">
            <table class="table"> 
              <thead>
                <tr>
                  <th > Nombre </th>
                  <th > Teléfono </th>
                  <th > Email</th>
                </tr>   
              </thead>

                <?php

                include("php/conexion.php");
                $query='SELECT * FROM `agenda_proyecto`.`contactos_usuario`  WHERE id_user_contacto="'.$clave.'"';
                $result= mysql_query("$query") or die("Error en la consulta <b>$query</b>:".mysql_error());
                if(mysql_num_rows($result)>0){
                  while($row = mysql_fetch_array($result)){
                    $id= $row[0];
                    $nombre = $row[1];
                    $telefono = $row[2];
                    $email = $row[3];

                    echo "
                      <tr>
                        <td >$nombre</td>                       
                        <td >$telefono</td>
                        <td >$email</td>
                        
                      </tr>";
                  }
                }
                else

                  echo "<script language='javascript'>alert('Aun no tienes contactos registrado');</script>";
                
              ?>
              
            </table> 
          </div>    
    </div>
</div>

  <div id="foot">
    <a href="#" target="_blank"><img src="img/inicio.png" width="104" height="59"  alt=""/></a> | <a href="#">Declaración de Privacidad </a> | <a href="#"> Condiciones de uso</a> |     
  </div>

  <script language="javascript" type="text/javascript" src="js/jquery.js"></script>
  <script language="javascript" type="text/javascript" src="js/getguardacliente.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>