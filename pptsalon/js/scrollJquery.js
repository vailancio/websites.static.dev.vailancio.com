// JavaScript Document
jQuery(function( $ ){
	/**
	 * Demo binding and preparation, no need to read this part
	 */
	//borrowed from jQuery easing plugin
	//http://gsgd.co.uk/sandbox/jquery.easing.php
	$.easing.elasout = function(x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
	};
	$('a#aboutus').click(function(){ 
		//$.scrollTo( this.hash, 1500, { easing:'elasout' });
		//$.scrollTo( 450, 800 );
		$.scrollTo( 810, 1600);
		return false;
	});
	$('a#services').click(function(){ 
		$.scrollTo( 588, 1600);
		return false;
	});
	$('a#portfolio').click(function(){ 
		$.scrollTo( 340, 1600);
		return false;
	});
	$('a#contactus').click(function(){ 
		$.scrollTo( 1300, 1600);
		return false;
	});
	$('.getppt a').click(function(){ 
		$.scrollTo( 1300, 1600);
		return false;
	});
});
