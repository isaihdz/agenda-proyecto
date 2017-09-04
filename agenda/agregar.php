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

 <div id="content" class="container_16 clearfix">

    <div class="row">
    <h1>Nuevo Contacto </h1>

    <div class="grid_4">
     <p>  
        
        <input class="form-control" id="nombre"  name="nombre" type="text" pattern="[a-zA-Z]" title="El nombre solo debe contener letras" placeholder="Nombre Contacto" />
     </p>     
     </div> 

   <div class="grid_6">
     <p>  
        
        <input class="form-control" id="telefono"  name="telefono" type="tel" maxlength="10" pattern="[0-9]{5,10}" placeholder="Número de Teléfono" title="Número Invalido o contiene caracteres" />
     </p>     
  </div>  
 
  <div class="grid_5">
     <p>  
        
        <input class="form-control" id="email"  name="email" type="email"  placeholder="Dirección de correo" />
     </p>     
  </div>

     <div class="grid_16">
     <p class="submit">
                       
                       <input type="submit" id="btnGuardar" name="btnGuardar" value="Agregar" />
       </p>
     </div>
  </div>

  <div class="grid_16" >  
  <h2> Agregar Foto</h2> 
      <center>  <p> 
          ***Nota: Antes de adjuntar la foto de contacto primero tienes que agregarlo como contacto
        </p></center>
       <center> <form enctype='multipart/form-data' action='' method='post'>
           <h3>Adjuntar Archivos</h3>
           <input name='archivo' type='file'><br>
           <input type='submit' name="subir" value='Subir Foto '>
      </form></center>
       <?php
          include("php/uploader.php"); 
       ?> 
     </div>
    



</div>

  <div id="foot">
    <a href="http://www.motormascash.com" target="_blank"></a> | <a href="#">Declaración de Privacidad </a> | <a href="#"> Condiciones de uso</a> |     
  </div>

  <script language="javascript" type="text/javascript" src="js/jquery.js"></script>
  <script language="javascript" type="text/javascript" src="js/guardacontacto.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>