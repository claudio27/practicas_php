$(document).ready(function(){
	
	console.log('Listo para funcionar :D');
	var elem_agregados = 0;

	// elemento al que agregar el evento
	boton_agregar = $('.thumbnail').find('button');
      
  $(boton_agregar).on('click',function(){
 
  	// recuperar datos desde data-id
  	 _id = $(this).closest('.thumbnail').data('id');

    $.get("index.php",{producto : _id},
     function(){
     	elem_agregados++;
     	$('#ver-carro').find('span').text('#'+elem_agregados);
        console.log('agregado '+ _id);
      });
  });

  // boton para enviar correo
  $('#enviar').on('click', function(){

  	$.get("index.php",{correo : 1}, function(){

  		console.log('Correo enviado');
  		// TODO
  		// recuperar lo que nos devuelve el servidor e imprimirlo en pantalla con js
  		// o probar alterativa de que usuario llene un formulario con datos para enviar
  		// enviar con phpmailer smtp de gmail

  	});

  });

  // boton para eliminar los datos de sesion
  $('#borrar').on('click', function(){

  		$.get("index.php", {eliminar : 1}, function(){
  			elem_agregados = 0;
  			$('#ver-carro').find('span').text('#'+elem_agregados);
  			console.log('Todos los elementos eliminados');
  		});

  });



});