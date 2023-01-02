
// Menu
var Menu = function(){
	$('.menu').find("ul li").each(function() {
		if($(this).find("ul>li").length > 0){
			$(this).addClass('menu-c2');
		}
	});
}


// Menu mobile
var Menu_mobile=function(){
	$('.menu-mobile').find("ul li").each(function() {
		if($(this).find("ul>li").length > 0){
			$(this).addClass('color');
			$(this).append('<span>+</span>');
			$(this).children('span').addClass('menu-c3');
		}
	});

	// $('.menu-c3>a').click(function(e){
	// 	e.preventDefault();
	// 	$(this).parent().children('ul').stop().slideToggle(500);
	// });
	// $('.menu-c3').click(function(e){
	// 	$(this).children('ul').stop().slideToggle(500);
	// });

	$('.menu-c3').click(function(){
		$(this).parent().children('ul').stop().slideToggle(300);
	});


	$('.btn-bars').click(function(e){
		$('.menu-mobile').toggleClass('open');
	})
}

// Email mobile
var Email_mb=function(){
	$(window).scroll(function(){
		if($(window).scrollTop() != 0){
			$('.email').addClass('hide');
		}
		else{
			$('.email').removeClass('hide');
		}
	});
}

// Back to top
var Backtotop = function(){
	$('.back-to-top').click(function(){
		$("html, body").animate({scrollTop: 0}, 500);
	});
};

// Slider - Client List
var Slider_client_list = function(){
	if($('.slider-client-list').length>0){
		$('.slider-client-list').slick({
			slidesToShow: 2,
			infinite: false,
			speed: 400,
			arrows: true,
			dots: false,
			prevArrow: '<button class="btn-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
			nextArrow: '<button class="btn-next"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
			// responsive: [
			// 	{
			// 		breakpoint: 1024,
			// 		settings: {
			// 			slidesToShow: 3,
			// 			slidesToScroll: 3,
			// 			infinite: true,
			// 			dots: true
			// 		}
			// 	},
			// 	{
			// 		breakpoint: 600,
			// 		settings: {
			// 			slidesToShow: 2,
			// 			slidesToScroll: 2
			// 		}
			// 	},
			// 	{
			// 		breakpoint: 480,
			// 		settings: {
			// 			slidesToShow: 1,
			// 			slidesToScroll: 1
			// 		}
			// 	}
			// ]
		});
	}
};

var Slider_client_list_detail = function(){
	if($('.slider-client-list-detail').length>0){
		$('.slider-client-list-detail').slick({
			slidesToShow: 1,
			infinite: false,
			speed: 400,
			arrows: false,
			dots: false,
			autoplay: true,
			autoplaySpeed: 1000,
		});
	}
};

$(function(){
	Menu_mobile();
	Menu();
	Email_mb();
	Backtotop();
	Slider_client_list();
	Slider_client_list_detail();
});