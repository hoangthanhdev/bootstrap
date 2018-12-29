$(function(){
	//console.log($('.row3').offset().top);
	$('.row1 a.btn.btn-dark.btn-lg').click(function(){
		$('html, body').animate({scrollTop:$('.row2').offset().top});
		return false;
	})

	$('.n1').click(function(){
		$('html, body').animate({scrollTop:0});
		$('.sidebar-wrapper').removeClass('open');
		return false;
	})
	$('.n2').click(function(){
		$('html, body').animate({scrollTop:$('.row3').offset().top});
		$('.sidebar-wrapper').removeClass('open');
		return false;
	})
$('.n3').click(function(){
		$('html, body').animate({scrollTop:$('.row4').offset().top});
		$('.sidebar-wrapper').removeClass('open');
		return false;
	})
$('.n4').click(function(){
		$('html, body').animate({scrollTop:$('.row5').offset().top});
		$('.sidebar-wrapper').removeClass('open');
		return false;
	})
$('.n5').click(function(){
		$('html, body').animate({scrollTop:$('.row6').offset().top});
		$('.sidebar-wrapper').removeClass('open');
		return false;
	})

	var docao= $(window).height();
	$('.row1').css({'height':docao});

	$(window).resize(function(){
		var docao= $(window).height();
		$('.row1').css({'height':docao});
	});

	//khi click vao nut
	$("#menu-toggle").click(function(){
		$('.sidebar-wrapper').addClass('open');
		return false;
	});

	$("#nut-close").click(function(){
		$('.sidebar-wrapper').removeClass('open');
		return false;
	});

})
