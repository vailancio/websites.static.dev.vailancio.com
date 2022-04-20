/* Author:Vailancio Rodrigues
	Email:vailancio248@gmail.com
*/
jQuery(function( $ ){
	$.easing.elasout = function(x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
	};
	$('a#logo').click(function(){
		$.scrollTo( 17, 1500);
		return false;
	});
	$('a#aboutus').click(function(){
		$.scrollTo( 988, 1700);
		return false;
	});
	$('a#offering').click(function(){ 
		$.scrollTo( 1660, 1900);
		return false;
	});
	$('a#process').click(function(){ 
		$.scrollTo( 2310, 1900);
		return false;
	});
	$('a#contactus').click(function(){ 
		$.scrollTo( 3200, 1900);
		return false;
	});
	//fonts
	Cufon.replace('#tr1 h2, #tr3 h2, #tr4 h2, #tr5 h2,#contact h2, #contact p, #tr2 h3, #gtext p small, #mtext ul li,#stext ul li,h4, #tr4 p,#tr3 p,#tr5 p');
	Cufon.now(); //IE flickring fix
});

//inview
    $(window).bind("scroll", function(event) {
		
		var $activeClass = 'active';
		
        var scroll = $(document).scrollTop();
        //debug
        //$('#tr3').html('<p style="position:fixed; bottom:0; z-index:7000;">Scroll:'+scroll+'</p>');   
        
        if(scroll >= 827 && scroll <=1416){
        	$('#aboutus').delay(4000).addClass($activeClass);
        }else{
        	$('#aboutus').removeClass($activeClass);
        }
        
        if(scroll>= 1417 && scroll <= 2000){
        	$('#offering').delay(4000).addClass($activeClass);
        }else{
        	$('#offering').removeClass($activeClass);
        }
        
        if(scroll >= 2001 && scroll <= 2554){
        	$('#process').delay(4000).addClass($activeClass);
        }else{
        	$('#process').removeClass($activeClass);
        }
        
        if(scroll >= 2555){
        	$('#contactus').delay(4000).addClass($activeClass);
        }else{
        	$('#contactus').removeClass($activeClass);
        }
        
    });








