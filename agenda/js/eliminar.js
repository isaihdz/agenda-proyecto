$(document).ready(function(e) {
	

 $('#btnEliminar').click(function(){
	
        id = $('#id').val();
	

	$.post("php/eliminar.php",{id:id,  rand:Math.random()},function(data){
	  if(data.ok){
				alert('Contacto Eliminado');
				location.reload(true);
				   
			}else{
				alert('No se Elimino el contacto ');
			}
			},"json"); 
 });
 

      
 

});