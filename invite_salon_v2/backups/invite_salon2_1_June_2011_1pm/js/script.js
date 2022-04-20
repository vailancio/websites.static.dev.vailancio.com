/* Author: 
Vailancio Rodrigues
*/

$(function(){
	$("#page-wrap").wrapInner("<table><tr>");
	$(".page").wrap("<td>");
	
	//vertical tabs
	$("#questions").verticaltabs({speed: 500,slideShow: false,activeIndex: 2});
	$homeWidth = ($(window).width()) + 'px'; //sidenote deleted from firstpage
	///Page Width
	$width = ($(window).width() + 270) + 'px';//270 px is width of .sidenote
	//$width = 1700 + 'px';
	$('.page').css("width", $width);
	$('.left').css('width', ($(window).width()) + 'px');
	$('.graphics-wrapper').css("width", $(window).width() + 'px');
	$('#home-page,#contact-page').css("width", $homeWidth);
	$faqSize =  $(window).width()  - 572 - 100 + 'px';
	$('.tab_contents, .activeContent').css("width", $faqSize);
	$(window).resize(function() {
		$('.page').css("width", ($(window).width() + 300) + 'px');
		$('.left').css('width', ($(window).width()) + 'px');
		$('#home-page, #contact-page').css("width", $homeWidth);
		$('.graphics-wrapper').css("width", $(window).width() + 'px');
	    $faqSize =  $(window).width()  - 572 - 100 + 'px';
	    $('.tab_contents, .activeContent').css("width", $faqSize);
		$('#fbox1').css('margin-left', '30px');
	});
	
	//tooltip
	//$('.coup-wrap p').hide();
	$('p#buro').hide();
	$('#cimg').click(function () {
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
		}, 300);
		
		
		$('p#buro').show("slow");
		
		return false;
		
		}	
	)
	
	$('p#buro1').hide();
	$('#cimg2').click(function () {
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
		}, 300);
		
		
		$('p#buro1').show("slow");
		
		return false;
		
		}	
	)
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


























































