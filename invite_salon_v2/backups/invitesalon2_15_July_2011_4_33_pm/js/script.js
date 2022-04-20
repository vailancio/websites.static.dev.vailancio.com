/* Author: 
Vailancio Rodrigues
*/

$(function(){
	$("#page-wrap").wrapInner("<table class='table'><tr>");
	$(".page").wrap("<td>");
	//fancy box
	$(".iframe").fancybox({
			//'transitionIn'	:	'elastic',
			//'transitionOut'	:	'elastic',
			'speedIn'		:	600, 
			'speedOut'		:	200,
			'width'			:	1000,
			'height'		:	530, 
			'overlayShow'	:	true,
			'padding'		:	1,
			'autoDimensions'     :   true,
			'overlayColor'  :   '#000',
			'overlayOpacity':   0.8,
			'scrolling'     :   'no'
		});
		
	$("#map").fancybox({
			//'transitionIn'	:	'elastic',
			//'transitionOut'	:	'elastic',
			'speedIn'		:	900, 
			'speedOut'		:	300,
			'width'			:	515,
			'height'		:	480, 
			'overlayShow'	:	true,
			'padding'		:	1,
			'autoDimensions'     :   true,
			'overlayColor'  :   '#000',
			'overlayOpacity':   0.8,
			'scrolling'     :   'no'
		});	
	//Warning Message
	function resWarning(){
		if($(window).width() < 1200){
		//alert("Sorry www.invitesalon.com cannot be viewed on smaller resolution or browser size");
		var $element = $('.warning');
			$element.html('<h1>Sorry <a href="http://www.invitesalon.com/">www.invitesalon.com</a> cannot be viewed on smaller sreen resolution or browser window.</h2><p>Press CTRL + Key (-) on Windows or COMMAND + Key (-) on Mac OS X.</p> to veiw this website</p>').show("fast");
			
			
			$('body').css({
				'overflow-x': 'hidden',
			});	
						
		}
		else if ($(window).width() > 1000){
				$('.warning').hide("fast");
				
				$('body').css({
					'overflow-x': 'visible',
				});
//			
        }		
	}
	
	//Netbook fix
//	if($(window).width() < 1266){
//		$('body').css({
//			'zoom': '70%',
//	    });
//	 }  		
	
	resWarning();
	
	//vertical tabs
	$("#questions").verticaltabs({speed: 0,slideShow: false,activeIndex: 1});
	
	function sizes(){
		$homeWidth = ($(window).width()) + 'px'; //sidenote deleted from firstpage
		///Page Width
		$width = ($(window).width() + 270) + 'px';//270 px is width of .sidenote
		//$width = 1700 + 'px';
		//$conHeight = $(window).height() - (90 + 18) + 'px';
		//$conHeight = $('html').css('height');
		$pageHeight = $('html').height() - (96) + 'px';
		$('.page').css({
			"width": $width,
			//"height": $pageHeight
		});
		//$('#gallery, .sea, .sidenote, .team-wrap, #fbox1').css('height', $pageHeight);
		$('#panel').css('width', ($(window).width()) + 'px');  
		$('#gallery').css('width', ($(window).width())-10 + 'px'); 
		$('.left').css('width', ($(window).width()) + 'px');
		//$('#img14, #img15').css('width', ($(window).width()) + 'px');
		//$('.graphics-wrapper').css("width", $(window).width() + 'px');
		$('#home-page,#contact-page').css("width", $homeWidth);
		$faqSize =  $(window).width()  - 572 - 100 + 'px';
		$('.tab_contents, .activeContent').css("width", $faqSize);
		$('#bcol').css("width",  ($(window).width()) - 270 + 'px');
		//about us page
		//$('#myheart').css("width",  ($(window).width()) - 230 + 'px');
		//$('#largeImage').css("height", $('.sidenote').css('height'));//sidenote has 10px botto padding
		/*var marginLeft = -(($(window).width() + 270)*0.35) + 'px'
		$('#thumbs').css({
				"marginLeft": marginLeft,
				});*/
	}
	//intialize
	sizes();
	
	$(window).resize(function() {
		sizes();
		resWarning();
	});

	
	$('#thumbs img').click(function(){
		$('#largeImage').attr('src',$(this).attr('src').replace('thumb','large')).addClass('largeImg');
		$('#description').html($(this).attr('alt'));
		$(this).css("bottom", '35px');
	}).mouseout(function(){
		$(this).animate({
			bottom: '0',
		}, 300)
	});
	
	$('#thumbs img').mouseover(function(){
		$(this).animate({
			bottom: '35px',
		}, 300)
	}).mouseleave(function (){
		$(this).animate({
			bottom: '0',
		}, 300)
	});
//debug
//$('#k').show();
	$('#a ul, #k ul').hide();
	$('#img14, #img15').css('background', 'none');
	 
	$('#img14').mouseover(function(){
		$('#a ul').show();
		$(this).css({
		'backgroundImage': 'url(img/red_band.png)',
		'backgroundPosition': '23px 56%',
		'backgroundRepeat': 'no-repeat',
		});
	}).mouseleave(function (){
		$('#a ul').hide();
		$(this).css('background', 'none');
    });
	
	$('#img15').mouseover(function(){
		$('#k ul').show();
		$(this).css({
		'backgroundImage': 'url(img/yellow_band.png)',
		'backgroundPosition': '102px -9%',
		'backgroundRepeat': 'no-repeat',
		});
	}).mouseleave(function (){
		$('#k ul').hide();
		$(this).css('background', 'none');
    });
	//Contact Page tooltip
	
	//$('.bcol:first-child').$('.tooltip').show();
	var $active = $('.onvodka');
	var activeClass = 'onvodka';
	var tooltip = $('.tooltip');
	tooltip.corner("6px").hide();
	//intial pop-up
	$('#villap-text').show()
	$('#villap').css({'backgroundPosition': 'center 94px'})
	function imgHoverClick(hrefID, text, siblings){
			$(hrefID).click(function(){
				tooltip.hide();
				$(text).show();
				$(this).addClass(activeClass).css({'backgroundPosition': 'center 94px'});
				$(siblings).css({'backgroundPosition': 'bottom center'});
				//$siblings().css({'backgroundPosition': 'bottom center'});
				//$active.siblings().resizemoveClass(activeClass).removeAttr("style");
				
				return false;
		});
	}
	
	//intialize functions
	imgHoverClick('#villap', '#villap-text', ('#pptsalon, #kingschair, #vodka'));
	imgHoverClick('#pptsalon', '#pptsalon-text', ('#villap, #kingschair, #vodka'));
	imgHoverClick('#kingschair', '#kingschair-text', ('#pptsalon, #villap, #vodka'));
	imgHoverClick('#vodka', '#vodka-text', ('#pptsalon, #kingschair, #villap'));
//    $('#villap, #kingschair, #vodka, #pptsalon').mouseover(function(){
//    	$(this).css({'background-position':'center 90px'}).mouseleave(function(){
//    		$(this).css({'background-position':'center bottom'});
//    	});
//    });	
    	
	//tooltip
	////$('.coup-wrap p').hide();
	//$('p#buro').hide();
	/*$('#cimg').mouseover(function () {
		//$(this).slideUp();
		//$('#tooltip-sm').css('bottom', '0').toggle(1, 3.0);
		
		$(this).animate({
			bottom: 0
		}, 23);
		
		$('#img12').animate({
			width:'151px',
			height:'187px',
			top: '-26px',
			left: '0'
		}, 23);
		
		}).mouseout(function(){
			$(this).css("bottom", "");
			var parameters = {
				'width': '',
				'height': '',
				'top': '',
				'left': ''
			}
			$("#img12").css(parameters);
			
		})*/
	
	//$('p#buro1').hide();
	/*$('#cimg2').mouseover(function () {
		//$(this).slideUp();
		//$('#tooltip-sm').css('bottom', '0').toggle(1, 3.0);
		
		$(this).animate({
			bottom: 0
		}, 23);
		
		$('#img13').animate({
			width:'156px',
			height:'220px',
			top: '-26px',
			left: '0'
		}, 23);
		
		
		//$('p#buro1').show("slow");
		
		
		}	
	).mouseout(function(){
			$(this).css("bottom", "");
			var parameters = {
				'width': '',
				'height': '',
				'top': '',
				'left': ''
			}
			$("#img13").css(parameters);
			
		})*/
		
	  $("body").mousewheel(function(event, delta) {
	
	      this.scrollLeft -= (delta * 30);
	
	      event.preventDefault();
	
	  });
	
});

//inview
    $(window).bind("scroll", function(event) {
		
		var $activeClass = 'active';
		
        
        var scrollLeft = $(document).scrollLeft();
        var bodyWidth = $('.table').width();
        var percentage = 0;
        percent = (scrollLeft/bodyWidth)*100;
        //debug
        //$('#dove1').html('<p>Scroll:'+scrollLeft+'Width:'+bodyWidth+' %'+percent+'</p>');   
        
        if(percent <= 14.61){
        	$('#home-href').addClass($activeClass);
        }else{
        	$('#home-href').removeClass($activeClass);
        }
        
        if(percent >= 14.61 && percent <= 29.24){
        	$('#aboutus-href').addClass($activeClass);
        }else{
        	$('#aboutus-href').removeClass($activeClass);
        }
        
        if(percent >= 29.24 && percent <= 35.32){
        	$('#portfolio-href').addClass($activeClass);
        }else{
        	$('#portfolio-href').removeClass($activeClass);
        }
        
        if(percent >= 35.32 && percent <= 53.04){
        	$('#faq-href').addClass($activeClass);
        }else{
        	$('#faq-href').removeClass($activeClass);
        }
        
        if(percent >= 53.04 && percent <= 70.73){
        	$('#team-href').addClass($activeClass);
        }else{
        	$('#team-href').removeClass($activeClass);
        }
        
        if(percent >= 70.73){
        	$('#contactus-href').addClass($activeClass);
        }else{
        	$('#contactus-href').removeClass($activeClass);
        }
        
    });


//Smooth Scroll
$(function() {
	$('nav.menu a, .first a').bind('click',function(event){
		var $anchor = $(this);
		/*
		if you want to use one of the easing effects:
		$('html, body').stop().animate({
			scrollLeft: $($anchor.attr('href')).offset().left
		}, 1500,'easeInOutExpo');
		 */
		/*$('html, body').stop().animate({
			scrollLeft: $($anchor.attr('href')).offset().left
		}, 1000);*/
		$('html, body').stop().animate({
			scrollLeft: $($anchor.attr('href')).offset().left
		}, 1300,'easeInOutExpo');
		event.preventDefault();
	});
	
	$(document.documentElement).keydown(function (event) {
	  // handle cursor keys
	    if (event.keyCode == 37) {
	      // go left
	      direction = 'prev';
	    } else if (event.keyCode == 39) {
	      // go right
	      direction = 'next';
	    }
	    
	    if (direction != null) {
	      $('nav.menu a.active').parent()[direction]().find('a').click();
	      return false;
	    }
	 })
});


    

    





























































