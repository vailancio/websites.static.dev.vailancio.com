/* Author:
Vailancio Rodrigues
*/

$(document).ready(function() {

		$(function(){
				$("#page-wrap").wrapInner("<table class='table-box' cellspacing='0'><tr>");
				$(".page").wrap("<td>");
		});
		
		$('.item a img').hover_caption({
			caption_font_size: '14px',
			caption_color: 'black',
			caption_bold: false,
			caption_default: "Click for more details."
 		}); 
		

		$(document).on("click", function(e) {
		        if ( !$(e.target).closest("a").length ) {
		            // do your thing
		            //console.log(e);
		            //alert("clicked");
		            $('.featured').hide('slow');
		            e.stopPropagation();
		             
		        }
		        
		  });
		    
		$('#toggleone').click(function() {
		      $('.featured').toggle();		
		});	
		    	
		$(".item a").fancybox({
				'transitionIn'	:	'elastic',
				'transitionOut'	:	'elastic',
				'speedIn'		:	600, 
				'speedOut'		:	200, 
				'overlayShow'	:	false,
				'showCloseButton': false,
				'hideOnContentClick':false,
				'overlayColor': '#fff',
				'overlayOpacity':0.7
		});
		
		resizeme();
		
		$(window).resize(function()
		{
			if($(window).height() > 630 && $(window).height() < 811){//Very important
				resizeme();
			} 
		});
		
		$.localScroll({
		   target:'html',
		   axis:'x'
		});
		
});
/*
Vailancio
ReSize Plugin
vailancio248@gmail.com
*/
function eleHeight(element, maxChar) {
	//maxChar within a given div
	var charCount = $(element).html().length;
	var numLine = parseInt(charCount/maxChar, 10)+1;
	return parseInt($(element).css('line-height'), 10)*numLine; 	
};

function resizeme() {
	var page = $('.page');
	
	var default_height = page.height();
	var win_height = $(window).height();
	var new_height = win_height-28; //28 - adjustment
	var heightRatio = galleryHeight/default_height;
	
	var img = $('.thumbnail img.resizeimg');
	
	if($(window).height() > 630 && $(window).height() < 811){
	
		var default_width = 1381;//width of portfolio page
		
		var galleryHeight = win_height - 138 -30; //138 - head height, 30 - footer height
		
		var resizeFactor = 640;//Found by calculating various readings		
		//new Page height
		page.css("min-height", new_height+'px');
		
		$('.gallery').css('height', (new_height - 134)+'px'); //110 padding and 20 footer adjustment
		
		//new Portfolio width
		var new_width = parseInt((default_width*galleryHeight)/resizeFactor, 10);//in resize-jQuery function change * to /
		$('.portfolio').css('width', new_width+'px');
	
		//img resize
		setTimeout(function(){//some bug in jQuery return 0 with and height sometimes. If setTimeout is not used.
			
			var new_imgHeight = parseInt(galleryHeight/5, 10);  
			var new_imgWidth = parseInt((new_width/6)-1, 10);//-1 some adjustment
		   	
			if (new_imgHeight != 0) {
				img.css({
					'height': new_imgHeight +'px',
					'width': new_imgWidth +'px'
				});
			}
		},100);
		
		//Font Resize for caption
		img.each(function() {//or use var img
		
			var image = $(this);
				var imgParent = image.parent();
				
				imgParent.find('h3').css({'font-size': parseInt(galleryHeight/46, 10) + 'px'});
				imgParent.find('p').css({'font-size': parseInt(galleryHeight/48, 10) + 'px'});
				
				imgParent.find('span').hide(); //will hide eye icon
				
				var h3 = imgParent.find('h3');
								
				//20px additional adjustment.
				image.parent().find('p').css({
					'position': 'absolute',
					'top': eleHeight(h3, 24) + 14 + 'px',
					'margin-left': parseInt(galleryHeight/50, 10) + 'px' 
				}).hide();				
			
			})	
	
	}
	else {
		setTimeout(function(){
			
			img.each(function() {
				$(this).parent().find('span').show();//will show eye icon
			});
				
		},200);
	}
	
}