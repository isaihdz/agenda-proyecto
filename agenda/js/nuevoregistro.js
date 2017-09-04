$(document).ready(function(e){

	$('#btnGuarda').click( function(){
          nombre = $('#nombre').val();
          telefono = $('#telefono').val();
          email = $('#email').val();
          user = $('#user').val();
          contra = $('#contra').val();
          

          
          letras =  /^[a-zA-Z\s]*$/;
          mail = /\w+@\w+\.+[a-z]/;

         if ($('#nombre').val() === '' || $('#telefono').val() === '' || $('#email').val() === '' || $('#user').val() === '' || $('#contra').val() === ''  )
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
                     $.post("php/guardaregistro.php",{nombre:nombre,telefono:telefono,email:email,user:user,contra:contra,rand:Math.random()},function(data){
                      if (data.ok){
                           alert('Registro Exitoso');
                           location.reload(true);
                           }
                       else{
                         alert('Error, No se pudo registrar');
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