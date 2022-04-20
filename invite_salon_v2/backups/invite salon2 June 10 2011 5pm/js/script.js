/* Author: 
Vailancio Rodrigues
*/

$(function(){
	$("#page-wrap").wrapInner("<table class='table'><tr>");
	$(".page").wrap("<td>");
	
	//Warning Message
	function resWarning(){
		if($(window).width() < 1266){
		//alert("Sorry www.invitesalon.com cannot be viewed on smaller resolution or browser size");
		var $element = $('.warning');
			$element.html('<h1>Sorry <a href="http://www.invitesalon.com/">www.invitesalon.com</a> cannot be viewed on smaller sreen resolution or browser window.</h2>').show("fast");
			
			
			$('body').css({
				'overflow-x': 'hidden',
			});	
						
		}
		else if ($(window).width() > 1266){
				$('.warning').hide("fast");
				
				$('body').css({
					'overflow-x': 'visible',
				});
//			
        }		
	}
	
	resWarning();
	
	//vertical tabs
	$("#questions").verticaltabs({speed: 500,slideShow: false,activeIndex: 2});
	$homeWidth = ($(window).width()) + 'px'; //sidenote deleted from firstpage
	///Page Width
	$width = ($(window).width() + 270) + 'px';//270 px is width of .sidenote
	//$width = 1700 + 'px';
	//$conHeight = $(window).height() - (90 + 18) + 'px';
	//$conHeight = $('html').css('height');
	$pageHeight = $('html').height() - (93) + 'px';
	$('.page').css({
		"width": $width,
		"height": $pageHeight
	});
	
	$('.left').css('width', ($(window).width()) + 'px');
	$('#img14, #img15').css('width', ($(window).width()) + 'px');
	//$('.graphics-wrapper').css("width", $(window).width() + 'px');
	$('#home-page,#contact-page').css("width", $homeWidth);
	$faqSize =  $(window).width()  - 572 - 100 + 'px';
	$('.tab_contents, .activeContent').css("width", $faqSize);
	$('#bcol').css("width",  ($(window).width()) - 270 + 'px');
	$('#panel img').css("width",$(window).width() + 'px');
	 
	$('#gallery, .sidenote, .team-wrap, #fbox1').css('height', $pageHeight); 
	
	$(window).resize(function() {
	
		$pageHeight = $('html').height() - (93) + 'px';
		$pageWidth = ($(window).width() + 270) + 'px';
		$('.page').css({
			"width": $pageWidth,
			"height": $pageHeight
		});	
		
		$('#gallery, .sidenote, .team-wrap, #fbox1').css('height', $pageHeight);
		
		$('.left').css('width', ($(window).width()) + 'px');
		$('#img14, #img15').css('width', ($(window).width()) + 'px');
		$homeWidth = ($(window).width()) + 'px';
		$('#home-page, #contact-page').css("width", $homeWidth);
		//$('.graphics-wrapper').css("width", $(window).width() + 'px');
	    $faqSize =  $(window).width()  - 572 - 100 + 'px';
	    $('.tab_contents, .activeContent').css("width", $faqSize);
		//$('#fbox1').css('margin-left', '30px');
		$('#bcol').css("width",  ($(window).width()) - 270 + 'px');
		$('#panel img').css("width",$(window).width() + 'px'); 
		resWarning();
	});

	
	$('#thumbs img').click(function(){
		$('#largeImage').attr('src',$(this).attr('src').replace('thumb','large'));
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
	
	
	
	//tooltip
	////$('.coup-wrap p').hide();
	//$('p#buro').hide();
	$('#cimg').mouseover(function () {
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
			
		})
	
	//$('p#buro1').hide();
	$('#cimg2').mouseover(function () {
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
			
		})
		
	  $("body").mousewheel(function(event, delta) {
	
	      this.scrollLeft -= (delta * 30);
	
	      event.preventDefault();
	
	  });
	
});

///Custom Scroll

/*$(function()
{
	var win = $(window);
	// Full body scroll
	var isResizing = false;
	win.bind(
		'resize',
		function()
		{
			if (!isResizing) {
				isResizing = true;
				var container = $('#main');
				// Temporarily make the container tiny so it doesn't influence the
				// calculation of the size of the document
				container.css(
					{
						'width': 1,
						'height': 1
					}
				);
				// Now make it the size of the window...
				container.css(
					{
						'width': win.width(),
						'height': win.height()
					}
				);
				isResizing = false;
				container.jScrollPane(
					{
						'showArrows': true,
						arrowScrollOnHover: true,
						hijackInternalLinks: true,
						animateScroll: true
					}
				);
			}
		}
	).trigger('resize');

	// Workaround for known Opera issue which breaks demo (see
	// http://jscrollpane.kelvinluck.com/known_issues.html#opera-scrollbar )
	$('body').css('overflow', 'hidden');

	// IE calculates the width incorrectly first time round (it
	// doesn't count the space used by the native scrollbar) so
	// we re-trigger if necessary.
	if ($('#main').width() != win.width()) {
		win.trigger('resize');
	}

	// Internal scrollpanes
	$('.scroll-pane').jScrollPane({showArrows: true, arrowScrollOnHover: true,hijackInternalLinks: true});
});*/

/*Notes
Do not use any other plugin for animated srrolling, conflicts with this one. This plugin has animated scroll functionality built in.
*/



//inview
    $(window).bind("scroll", function(event) {
		
		var $activeClass = 'active';
		//homepage
		//This href Element is hidden in navigation
		//Need it for keyboard navigation
		var $aboutLink = $('#home-href');
		$("#home-page :in-viewport").each(function() {
		  $aboutLink.addClass($activeClass);
		});
		
		$("#home-page :out-viewport").each(function() {
		  $aboutLink.removeClass($activeClass);
		});
		
		//About Us Page
		var $aboutLink = $('#aboutus-href');
		$("#aboutus :in-viewport").each(function() {
          $aboutLink.addClass($activeClass);
        });
        
        $("#aboutus :out-viewport").each(function() {
          $aboutLink.removeClass($activeClass);
        });
        
//        $("#quote1:in-viewport").each(function() {
//          $aboutLink.removeClass($activeClass);
//        });
        
        //Porfolio page
        var $portfolioLink = $('#portfolio-href');
        $("#portfolio :in-viewport").each(function() {
          $portfolioLink.addClass($activeClass);
        });
        
        $("#portfolio :out-viewport").each(function() {
          $portfolioLink.removeClass($activeClass);
        });
        
        //Team Page
        var $teamLink = $('#team-href');
        $("#team :in-viewport").each(function() {
          $teamLink.addClass($activeClass);
        });
		
		$("#team :out-viewport").each(function() {
          $teamLink.removeClass($activeClass);
        });
        
        $("#quote5:in-viewport").each(function() {
          $teamLink.removeClass($activeClass);
        });
        
        //Faq Page
		var $faqLink =  $('#faq-href');
		$("#faq :in-viewport").each(function() {
          $faqLink.addClass($activeClass);
        });
		
		$("#faq :out-viewport").each(function() {
          $faqLink.removeClass($activeClass);
        });
        
        //Contact Page
		var $contactLink = $('#contactus-href');
		$("#contact :in-viewport").each(function() {
          $contactLink.addClass($activeClass);
        });
		
		$("#contact :out-viewport").each(function() {
          $contactLink.removeClass($activeClass);
        });       
    });
    
    
//function limit(value,max,min){
//	switch (true) {
//	case (value >= max):
//	    return max;
//	    break;
//	case (value <= min):
//		return min;
//		break;
//	case (value < min && value > max):
//		return value;
//		break; 
//	}
//}   
//
//alert(limit(232,323,32));


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





    
    

    





























































