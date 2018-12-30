$(function(){
	$('.n1').click(function(){
		$('html,body').animate({scrollTop:$('#portfolio').offset().top},2000);
	})
	$('.n2').click(function(){
		$('html,body').animate({scrollTop:$('#about').offset().top});
	})
	$('.n3').click(function(){
		$('html,body').animate({scrollTop:$('#contact').offset().top});
	})


	$(window).scroll(function(){
		var vitrihientai= $('html, body').scrollTop();
		if(vitrihientai>250){
			$('.header').addClass('chuotrut');
		}
		if(vitrihientai<250){
			$('.header').removeClass('chuotrut');
		}
		
	})
})
