$(document).ready(function(e){

	$('#btnEnviar').click( function(){

          email = $('#email').val();
          mensaje = $('#mensaje').val();
          asunto = $('#asunto').val();

           mail = /\w+@\w+\.+[a-z]/;

     

         if ($('#email').val() === '' || $('#mensaje').val() === '' || $('#asunto').val() === ''  )
               {
 
                  alert('Llena el campo de mensaje');
               }
         else
         {  
             if (mail.test(email)) 
                    {
                     $.post("php/enviomensaje.php",{email:email,mensaje:mensaje,asunto:asunto,rand:Math.random()},function(data){
                      if (data.ok){
                           alert('Mensaje enviado');
                           location.reload(true);
                           }
                       else{
                         alert('Error, mensaje no enviado ');
                           }
                       },"json");
                     }
                    else
                      {
                       alert('Error, en el email');
                      }
       
             
        }

          
	});
     

});