//horizontal Scroll
jQuery(function( $ ){

	$('a#aboutus').click(function(){ 
		//$.scrollTo( this.hash, 1500, { easing:'elasout' });
		//$.scrollTo( 450, 800 );
		$.scrollTo( 810, 1600);
		return false;
	});
	$('a#portfolio').click(function(){ 
	//$(...).scrollTo( $('ul').get(2).childNodes[20], 800 );
		$.scrollTo( '50%', 1600);
		return false;
	});
	$('a#team').click(function(){ 
		$.scrollTo( 588, 1600);
		return false;
	});
	$('a#faq').click(function(){ 
		$.scrollTo( '50%', 1600);
		return false;
	});
	$('a#contactus').click(function(){ 
		$.scrollTo( 1300, 1600);
		return false;
	});
	
	//vertical tabs
	$("#questions").verticaltabs({speed: 500,slideShow: false,activeIndex: 2});
	
	//page width fix
	//function windowSize(){
	//var $windowSize = $(window).width() - 60;//30+30 - padding given
	//return $windowsSize;
	//}
	//intial value
	$width = ($(window).width() + 270) + 'px';//300px is width of .sidenote
	$homeWidth = ($(window).width()) + 'px'; //sidenote deleted from firstpage
	$('.section').css("width", $width);
	$('#home-page').css("width", $homeWidth);
	$('.graphics-wrapper').css("width", $(window).width() + 'px');
	//width of .tab_contents .activeContent
	$faqSize =  $(window).width()  - 572 + 'px';
	$('.tab_contents, .activeContent').css("width", $faqSize);
	
	//Total width of page
	$totalWidth = (($(window).width() * 6) + (270 *4) );//6 <- number of pages // 4 <- number of sidenotes
	$('#content').css('width', $totalWidth);
	
	$(window).resize(function() {
	    //$('#fbox1').prepend('<div>' + $(window).width() + '</div>');
		/*if ($(window).width() < 960){ //960 width of graphics
			$totalwidth = 960 + 300 + 'px';
		}
		else{
			if($(window).width()  > 1900){
			$totalwidth = 1900 + 300 + 'px';
			}
		}
		
		$('#home-page').prepend('<div>' + $totalwidth + '</div>');
		*/
		//$('.section').css("width", $totalwidth);
		$('.section').css("width", ($(window).width() + 300) + 'px');
	 	$('.graphics-wrapper').css("width", $(window).width() + 'px');
		$('#home-page').css("width", $homeWidth);
		//$('nav').prepend('<div>'+$window.scrollTop() + '</div>');
		$faqSize =  $(window).width()  - 572 + 'px';
		$('.tab_contents, .activeContent').css("width", $faqSize);
		//Total width of page
		$totalWidth = (($(window).width() * 6) + (270 *4));//6 <- number of pages // 4 <- number of sidenotes
		$('#content').css('width', $totalWidth);
	
	});
	//parallax
	
	///POrfolio
		var theInt = null;
		var $crosslink, $navthumb;
		var curclicked = 0;
		/*
		theInterval = function(cur){
			clearInterval(theInt);
			
			if( typeof cur != 'undefined' )
				curclicked = cur;
			
			$crosslink.removeClass("active-thumb");
			$navthumb.eq(curclicked).parent().addClass("active-thumb");
				$(".stripNav ul li a").eq(curclicked).trigger('click');
			
			theInt = setInterval(function(){
				$crosslink.removeClass("active-thumb");
				$navthumb.eq(curclicked).parent().addClass("active-thumb");
				$(".stripNav ul li a").eq(curclicked).trigger('click');
				curclicked++;
				if( 6 == curclicked )
					curclicked = 0;
				
			}, 3000);
		};*/
		
		theInterval = function(cur){
			//clearInterval(theInt);
			
			if( typeof cur != 'undefined' )
				curclicked = cur;
			
			$crosslink.removeClass("active-thumb");
			$navthumb.eq(curclicked).parent().addClass("active-thumb");
				$(".stripNav ul li a").eq(curclicked).trigger('click');
			
		};
		
		$(function(){
			
			$("#main-photo-slider").codaSlider();
			
			$navthumb = $(".nav-thumb");
			$crosslink = $(".cross-link");
			
			$navthumb
			.click(function() {
				var $this = $(this);
				theInterval($this.parent().attr('href').slice(1) - 1);
				return false;
			});
			
			theInterval();
		});
		
		$(function() {
			// OPACITY OF BUTTON SET TO 50%
			//$(".cross-link").css("top", 0);
			 
			// ON MOUSE OVER
			$(".cross-link").hover(function () {
			 
			// SET property
			$(this).stop().animate({
			top: '-20px'
			}, "slow");
			},
			 
			// ON MOUSE OUT
			function () {
			 
			// SET BACK TO orginal
			$(this).stop().animate({
			top: '0'
			}, "slow");
			});
		});
	
	
	
});























