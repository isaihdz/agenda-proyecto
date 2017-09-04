$(document).ready(function(e){

	$('#btnActualizar').click( function(){
          nombre = $('#nombre').val();
          telefono = $('#telefono').val();
          email = $('#email').val();
          id= $('#id').val();
          ruta = $('#ruta').val();

          
          letras =  /^[a-zA-Z\s]*$/;
          mail = /\w+@\w+\.+[a-z]/;

         if ($('#nombre').val() === '' || $('#telefono').val() === '' || $('#email').val() === '' || $('#id').val() === '' || $('#ruta').val() === '' )
               {
 
                  alert('Llena Todos los Campos antes de Registrar');
               }
         else
         { 
             if (letras.test(nombre)) 
               {
               if ( !isNaN($('#telefono').val())) 
                   { 
                    if (mail.test(email)) 
                    {
                     $.post("php/actualizar.php",{nombre:nombre,telefono:telefono,email:email,id:id,ruta:ruta,rand:Math.random()},function(data){
                      if (data.ok){
                           alert('Contacto Actualizado');
                           location.reload(true);
                           }
                       else{
                         alert('Error al editar el contacto ');
                           }
                       },"json");
                     }
                    else
                      {
                       alert('Error, en el email');
                      }
       
                  }
               else
                  {
                   alert('Error, en el número de teléfono');
                  }
              }
           else
              {
               alert('Error, en el nombre');
              }
        }

          
	});
     

});