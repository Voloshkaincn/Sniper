$(document).ready(function(){
	$('.language').click(function(){
	  $(this).toggleClass('is-open');
	});

	$('.language__el').click(function(){    
	  $('.language__el').removeClass('is-active');
	  $(this).toggleClass('is-active');
	});
});
