/* Author: 
Vailancio Rodrigues
*/

$(function(){
	$("#page-wrap").wrapInner("<table><tr>");
	$(".page").wrap("<td>");
	
	//vertical tabs
	$("#questions").verticaltabs({speed: 500,slideShow: false,activeIndex: 2});
	
	///Page Width
	$width = ($(window).width() + 270) + 'px';//300px is width of .sidenote
	$homeWidth = ($(window).width()) + 'px'; //sidenote deleted from firstpage
	$('.page').css("width", $width);
	$('.left').css('width', ($(window).width()) + 'px');
	$(window).resize(function() {
		$('.page').css("width", ($(window).width() + 300) + 'px');
		$('.left').css('width', ($(window).width()) + 'px');
	});
});

///Custom Scroll

$(function()
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
});

/*Notes
Do not use any other plugin for animated srrolling, conflicts with this one. This plugin has animated scroll functionality built in.
*/
























































