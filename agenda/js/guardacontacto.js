$(document).ready(function(e){

	$('#btnGuardar').click( function(){
          nombre = $('#nombre').val();
          telefono = $('#telefono').val();
          email = $('#email').val();
          clave = $('#clave').val();

          
          letras =  /^[a-zA-Z\s]*$/;
          mail = /\w+@\w+\.+[a-z]/;

         if ($('#nombre').val() === '' || $('#telefono').val() === '' || $('#email').val() === '' || $('#clave').val() === '' )
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
                     $.post("php/guardacontacto.php",{nombre:nombre,telefono:telefono,email:email,clave:clave,rand:Math.random()},function(data){
                      if (data.ok){
                           alert('Contacto Guardado');
                           location.reload(true);
                           }
                       else{
                         alert('Error, contacto no guardado');
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