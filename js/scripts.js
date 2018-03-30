$(document).ready(function(){	

	$('.language').click(function(){
	  $(this).toggleClass('is-open');
	});

	$('.language__el').click(function(){    
	  $('.language__el').removeClass('is-active');
	  $(this).toggleClass('is-active');
	});

	$('.main__slider').slick({
		arrows: false,
		dots: true,
		customPaging: function(){
			return '<div class="main__slider-pag"></div>';
		},
		autoplay: true,
		autoplaySpeed: 5000
	});

	$('.news__slider').slick({
		//appendArrows: '$(".content-after-title")',
		prevArrow: '<button type="button" class="slick-prev"><span class="icon-angle-left"></span></button>',
		nextArrow: '<button type="button" class="slick-next"><span class="icon-angle-right"></span></button>',
		slidesToShow: 3
	});

	$('.gallery__slider').slick({
		prevArrow: '<button type="button" class="slick-prev"><span class="icon-angle-left"></span></button>',
		nextArrow: '<button type="button" class="slick-next"><span class="icon-angle-right"></span></button>',
		slidesToShow: 4
	})

	var slide_height = $('.slide-full-height').height();
	$('.slide-full-height').find('.slick-slide').height(slide_height);

});
