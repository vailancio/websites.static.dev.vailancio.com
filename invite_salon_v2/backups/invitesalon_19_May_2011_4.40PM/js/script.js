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
	
	//page width fix
	//function windowSize(){
	//var $windowSize = $(window).width() - 60;//30+30 - padding given
	//return $windowsSize;
	//}
	//intial value
	$width = ($(window).width() + 300) + 'px';//300px is width of .sidenote
	$('.section').css("width", $width);
	$('.graphics-wrapper').css("width", $(window).width() + 'px');
	
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
		//$('nav').prepend('<div>'+$window.scrollTop() + '</div>');
	});
	//parallax
	jQuery('#graphics').jparallax({}, {width: 1000}, {width:900}, {width:950});
	
	
});























