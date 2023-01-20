$(document).ready(function(){
	


	$(window).scroll(function(){
		if($(window).width() > 1000 {
		if($(window).scrollTop() > 50){


		$('.rollingdos').css({
			marginRight: '-2000px',
			opacity: 0
		});

		$('.rollingdos').animate({
			marginRight: '0px',
			opacity: 1
		},2000);



		$('.rollinguno').css({
			marginLeft: '-2000px',
			opacity: 0
		});

		$('.rollinguno').animate({
			marginLeft: '0px',
			opacity: 1
		},1800);


				}
}

		


	});
				

		if($(window).scrollTop() > 1000){

			$('.javascript-content').css({
			opacity: 0,
		
			});


			$('.javascript-content').animate({
				opacity: 1
			},1000);
			console.log('hola');
		}

	$('#maleimg').css({
		opacity: 0
	});

	$('#maleimg').animate({
		opacity: 1
	},2000);



$('.intro').css({
		opacity: 0
	});

	$('.intro').animate({
		opacity: 1
	},2000);



$('.todo').css({
		opacity: 0
	});

	$('.todo').animate({
		opacity: 1
	},2000);






 	$('.works-link').on('click', function(){
	 		$('html, body').animate({
 				scrollTop: 900
	 		},500);

 		});



 	$('.contact-link').on('click', function(){
	 		$('html, body').animate({
 				scrollTop: 900
	 		},500);

 		});











});

