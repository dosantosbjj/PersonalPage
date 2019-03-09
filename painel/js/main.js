



$(function(){
	var open = true;
	var windowSize = $(window)[0].innerWidth;
	var targetSizeMenu = (windowSize <= 400) ? 200 : 300;
	if(windowSize <= 768){
		$('.menu').css('width','0').css('padding','0');
		open = false;
	}
	$('.menu-btn').click(function(){
		if(open){
			$('.menu').animate({'width':'0','padding':'0'},function(){
				open = false;
			});
			// $('.content, header').css('width','100%');
			$('.content, header').animate({'left':0,'margin-left':0},function(){
				open = false;
			});			
			}else{
				$('.menu').css('display','block');
				$('.menu').animate({'width':'200px'},function(){
				open = true;
				});									
			$('.content, header').animate({'left':'200px','width':'calc(100% - 200px'},function(){
				open = true;
				});	
			}	
		})
	})