

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registro</title>

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
        <h1 id="head" align="center">Registro</h1>
       <p><img align="right" src="img/inicio.png" width="104" height="59"  /></p>
     
     <br>

      <div class="btn-group">  
      <div class="dropdown" >
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        Menú
        <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" >

          <li><a href="index.html">Inicio</a></li>
        </div>
    </div>

  
    
    

 <div id="content" class="container_16 clearfix">

    <div class="row">
    <h1>Nuevo Registro </h1>

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
        
        <input class="form-control" id="email"  name="email" type="email"  placeholder="Dirección de correo" required="required" />
     </p>     
  </div>
   <div class="grid_4">
     <p>  
        
        <input class="form-control" id="user"  name="user" type="text" pattern="[a-zA-Z0-9]" title="El nombre solo debe contener letras y numeros" placeholder="Nombre Usuario" />
     </p>     
     </div> 
      <div class="grid_5A">
       <p> 
          <input name="contra" type="text" id="contra" pattern="[a-zA-Z0-9]" title="El nombre solo debe contener letras y numeros"  maxlength="20" placeholder="Contraseña" />
       </p> 
       </div> 


     <div class="grid_16">
     <p class="submit">
                       
                       <input type="submit" id="btnGuarda" name="btnGuarda" value="Registrar" />
       </p>
     </div>
  </div>

</div>

  <div id="foot">
    </a> | <a href="#">Declaración de Privacidad </a> | <a href="#"> Condiciones de uso</a> |     
  </div>

  <script language="javascript" type="text/javascript" src="js/jquery.js"></script>
  <script language="javascript" type="text/javascript" src="js/nuevoregistro.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>