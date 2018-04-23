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
		slidesToShow: 3,
		adaptiveHeight: false, 
		responsive: [
		    {
		      breakpoint: 768,
		      settings: {
		        slidesToShow: 2,
		      },
		  },
		  {
		      breakpoint: 461,
		      settings: {
		        slidesToShow: 1,
		      }
		   }
		]
	});

	$('.gallery__slider').slick({
		prevArrow: '<button type="button" class="slick-prev"><span class="icon-angle-left"></span></button>',
		nextArrow: '<button type="button" class="slick-next"><span class="icon-angle-right"></span></button>',
		slidesToShow: 4,
		appendArrows: $('.main__gallery-top'),
		responsive: [
		    {
		      breakpoint: 768,
		      settings: {
		        slidesToShow: 3,
		      },
		  },
		  {
		      breakpoint: 461,
		      settings: {
		        slidesToShow: 2,
		      }
		   }
		]
	})

	var slide_height = $('.slide-full-height').height();
	$('.slide-full-height').find('.slick-slide').height(slide_height);

	$('.header__humburger').on('click', function(event){
		 $('html').one('click',function() {
            $('.header').removeClass('show');
        });
		$('.header__collapse').on('click', function(event){
			event.stopPropagation();
		})
		$('.header').toggleClass('show');
		event.stopPropagation();
	});

	//paralax effect in main promo section
	var main = $('.main__promo').length;//if page is main
	if(main){
		$(window).scroll(function() {			
				var parallax = $('.main__promo').offset().top,
				scrollTop = $(this).scrollTop(),
				scrollBottom = scrollTop + $(window).height();	
				if (scrollBottom >= (parallax) && scrollTop <= (parallax + $('.main__promo').height())) {
					$(".main__promo-bg").css({'top': -($(window).scrollTop() - parallax)/3});	
				}	
		});	
	}

	$("input[name=phone]").mask("+38 (999) 999-9999");

	$('.input-hoshi input').on('focusout', function(){

		//if field is NOT empty
		if($(this).val().trim() != ''){
			$(this).removeClass('error')
					.parent('.input-hoshi').addClass('focus')
					.find('.error__mess').hide();
		}

		//if field is empty and data has not yet been submitted 
		else if(!$(this).hasClass('error')){
			$(this).parent('.input-hoshi').removeClass('focus')
		}
	});

	$('#recallForm').submit(function(event){
		var error = false;
		$(this).find('.required').each(function(){
			if($(this).val().trim() == ''){
				$(this).parent('.input-hoshi').addClass('error')
						.find('.error__required').show();
				error = true;
			}
		});
		if(error == true){
			event.preventDefault();	
			return false;
		}
	});


});

