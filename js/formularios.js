$(function(){
	$('body').on('submit','form',function(){
		var form = $(this);
		$.ajax({
			beforeSend:function(){
				$('.overlay-loading').fadeIn();
			},
			url:'http://localhost/Projeto_01/ajax/formularios.php',
			method:'post',
			dataType:'json',
			data:form.serialize()
		}).done(function(data){
			if(data.sucesso){
				$('.overlay-loading').fadeOut();
				$('.sucesso').fadeIn();
				setTimeout(function(){
					$('.sucesso').fadeOut();
				},1500)
				$('form')[0].reset();
			}else{
				alert("Falha ao enviar!");
				$('.overlay-loading').fadeOut();
				$('.falha').fadeIn();
				setTimeout(function(){
					$('.falha').fadeOut();
				},1500)
				$('form')[0].reset();
			}
		});		
		return false;
	})
})