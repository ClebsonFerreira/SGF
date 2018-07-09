 $( document ).ready(function() {
 	$('#placa').mask('xxx-0000' , {
 		translation: {
 			'x': {
 				pattern: /[a-zA-Z0-9]/
 			}
 		}
 	});
 });