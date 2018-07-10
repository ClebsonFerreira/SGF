 $( document ).ready(function() {
 	$('#placa').mask('xxx-0000' , {
 		translation: {
 			'x': {
 				pattern: /[a-zA-Z0-9]/
 			}
 		}
 	});

 	$("#cep").blur(function() {
 		var cep = $("#cep").val();
 		var n     = cep.length;
 		if(n == 8){
 			$.ajax({
 			url: "https://viacep.com.br/ws/"+cep+"/json",
 			type: 'GET',
 			contentType: 'application/json',
 			success: function(data) {
 				console.log(data);
 				$("#rua").val(data.logradouro);
 				$("#bairro").val(data.bairro);
 				$("#cidade").val(data.localidade);
 				$("#estado").val(data.uf);
 			}
 		});
 		}else{
 			alert("Digite um cep valido ");
 		}
 		
 	});


 	
 });