$(document).ready(function(){
	$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
		$(this).toggleClass('open');
	});

	$('#nav-icon3').click(function(){

		$('.navigation').slideToggle(800);

	});

});


