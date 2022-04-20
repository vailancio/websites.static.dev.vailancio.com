/* Author: 
*HORIZONTAL SROLL
*/

$(function(){
	$("#page-wrap").wrapInner("<table><tr>");
	$(".page").wrap("<td>");
	
	///Page Width
	$width = ($(window).width() + 270) + 'px';//300px is width of .sidenote
	$homeWidth = ($(window).width()) + 'px'; //sidenote deleted from firstpage
	$('.page').css("width", $width);
	$(window).resize(function() {
		$('.page').css("width", ($(window).width() + 300) + 'px');
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
				var container = $('#page-wrap');
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
						'arrowScrollOnHover': true
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
	if ($('#page-wrap').width() != win.width()) {
		win.trigger('resize');
	}

	// Internal scrollpanes
	$('.scroll-pane').jScrollPane({showArrows: true});
});






























