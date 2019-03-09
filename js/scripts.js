$(function(){
	$('nav.mobile').click(function(){
		var listaMenu = $('nav.mobile ul');		
		if(listaMenu.is(':hidden')==true){
			var icone = $('.botao-menu-mobile').find('i');
			icone.removeClass('fa fa-bars');
			icone.addClass('fas fa-times');
			listaMenu.slideToggle();
		}else{
			var icone = $('.botao-menu-mobile').find('i');
			icone.removeClass('fas fa-times');
			icone.addClass('fa fa-bars');
			listaMenu.slideToggle();
		}				
	});

	if($('target').length > 0){
		var elemento = '#'+$('target').attr('target');
		var divScroll = $(elemento).offset().top;
		$('html,body').animate({'scrollTop':divScroll},1000);
	}

	carregarDinamico();
	function carregarDinamico(){
		$('[realtime]').click(function(){
			var pagina = $(this).attr('realtime');
			$('.container-principal').load('/Projeto_01/pages/'+ pagina +'.php');
			return false;
		})
	}
})
