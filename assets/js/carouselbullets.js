jQuery("document").ready(function($){

		var	bullet1 = $('.CarouselBullet1');
		var bullet2 = $('.CarouselBullet2');
		var bullet3 = $('.CarouselBullet3');


		$(".CarouselBullet1").click(function(){   
		var item = 0; 
		$('#myCarousel').carousel(item);
		bullet1.addClass("bulletactive");
		bullet2.removeClass("bulletactive");
		bullet3.removeClass("bulletactive");   
		return false;   
		});   

		$(".CarouselBullet2").click(function(){   
		var item = 1;   
		$('#myCarousel').carousel(item);
		bullet1.removeClass("bulletactive");
		bullet2.addClass("bulletactive");
		bullet3.removeClass("bulletactive");   
		return false;   
		});

		$(".CarouselBullet3").click(function(){   
		var item = 2;   
		$('#myCarousel').carousel(item);
		bullet1.removeClass("bulletactive");
		bullet2.removeClass("bulletactive");
		bullet3.addClass("bulletactive");
		return false;   
		});   


});
