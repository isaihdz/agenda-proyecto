<?php 

  $link = mysql_connect('localhost', 'root', ''); //Conexión con la base de datos

  if (!$link) {  //chequeo de conexión con la base de datos
  	  die('Error al conectar con la base de datos'.mysql_error());
  }

  mysql_query("SET NAMES 'utf8'"); 

  mysql_select_db('agenda_proyecto'); //Selecciona la base de datos a utilizar 

 ?>