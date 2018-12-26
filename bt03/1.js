$(function(){
	$('.navbar-right li:nth-child(2) a')
	.click(function(){
			$('body').animate({scrollTop:750});
			return false
		})
})
