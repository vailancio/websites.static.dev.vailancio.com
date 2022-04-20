/* Author: 
Vailancio Rodrigues
*/

//
this.toons = function() {  
	var xOffset = 0; // x distance from mouse
    var yOffset = -140; // y distance from mouse 
	
	$("#story-toons").unbind().hover(    
        function(e) {
            this.t = this.title;
            this.title = ''; 
            this.top = (yOffset); 
			this.left = (xOffset);
            
            $(this).append( '<p id="vtip"><img id="vtipArrow" /><img id="vtipArrow2" />' + this.t + '</p>' );
                        
            $('p#vtip #vtipArrow').attr("src", 'img/arrow.png');
			$('p#vtip #vtipArrow2').attr("src", 'img/arrow2.png');
            $('p#vtip').css("top", this.top+"px").css("left", this.left+"px").fadeIn("slow");
            
        },
        function() {
            this.title = this.t;
            $("p#vtip").fadeOut("slow").remove();
        }
    );
	
	///
	
	$("#toon5").unbind().hover(    
        function(e) {
            this.t = this.title;
            this.title = ''; 
            this.top = -65; 
			this.left = 50;
            
            $("#story-pl-toons").append( '<p id="vtip"><img id="vtipArrow" />' + this.t + '</p>' );
                        
            $('p#vtip #vtipArrow').attr("src", 'img/arrow-left-purple.png');
            $('p#vtip').css({
				"top": this.top+"px",
				"left": this.left+"px"
				
			}).fadeIn("slow");
            
        },
        function() {
            this.title = this.t;
            $("p#vtip").fadeOut("slow").remove();
        }
    );  
	    
	//
	    $("#toon6").unbind().hover(    
        function(e) {
            this.t = this.title;
            this.title = ''; 
            this.top = -65; 
			this.left = 660;
            
            $("#story-pl-toons").append( '<p id="vtip-r"><img id="vtipArrow" />' + this.t + '</p>' );
                        
            $('p#vtip-r #vtipArrow').attr("src", 'img/arrow-right-purple.png');
            $('p#vtip-r').css("top", this.top+"px").css("left", this.left+"px").fadeIn("slow");
            
        },
        function() {
            this.title = this.t;
            $("p#vtip-r").fadeOut("slow").remove();
        }
    );    
	
	//
    
    $("#toon7").unbind().hover(    
        function(e) {
            this.t = this.title;
            this.title = ''; 
            this.top = -69; 
			this.left = 26;
            
            $("#photos-pl-toons").append( '<p id="vtip"><img id="vtipArrow" />' + this.t + '</p>' );
                        
            $('p#vtip #vtipArrow').attr("src", 'img/arrow.png');
            $('p#vtip').css("top", this.top+"px").css("left", this.left+"px").fadeIn("slow");
            
        },
        function() {
            this.title = this.t;
            $("p#vtip").fadeOut("slow").remove();
        }
    );     
	
	//
	
	$("#toon8").unbind().hover(    
        function(e) {
            this.t = this.title;
            this.title = ''; 
            this.top = -65; 
			this.left = 710;
            
            $("#photos-pl-toons").append( '<p id="vtip-r"><img id="vtipArrow" />' + this.t + '</p>' );
                        
            $('p#vtip-r #vtipArrow').attr("src", 'img/arrow2.png');
            $('p#vtip-r').css("top", this.top+"px").css("left", this.left+"px").fadeIn("slow");
            
        },
        function() {
            this.title = this.t;
            $("p#vtip-r").fadeOut("slow").remove();
        }
    );                    
	
	//  
	
	 $("#footer-toons").unbind().hover(    
        function(e) {
            this.t = this.title;
            this.title = ''; 
            this.top = -120; this.left = 660;
            
            $("#fmcontent").append( '<p id="vtip"><img id="vtipArrow" />' + this.t + '</p>' );
                        
            $('p#vtip #vtipArrow').attr("src", 'img/arrow2.png');
            $('p#vtip').css("top", this.top+"px").css("left", this.left+"px").fadeIn("slow");
            
        },
        function() {
            this.title = this.t;
            $("p#vtip").fadeOut("slow").remove();
        }
    );                   
    
};

function bgCenter(){
 	var windowWidth = $(window).width();
	if(windowWidth < 1512){
			
			$('#cloud-wrap').css({
			    'margin-left':'-756px',
				'left':'50%',
				'position':'absolute'
			});
 		}
 	if(windowWidth >= 1512){
 			$('#cloud-wrap').css({
 				'margin-left':'0',
 				'left':'0',
 				'position':'relative'
 			});
 	}	
//alert($(window).width());
//alert(winWidthPer);
}
//
jQuery(document).ready(function($){
	toons();
	
	//clouds
	//bgCenter();
	
	$(window).resize(function() {
		bgCenter();
	});
	
	bgCenter();
	
	$("a.zoom").fancybox({
			'overlayShow'	:	true,
			'transitionIn' : 'fade',
			'transitionOut' : 'fade',
			'overlayOpacity':	0.2,
			'showCloseButton': 	false,
			'hideOnContentClick': true
		})/*.hover(clickit)*/;
		
		//function clickit(){ $(this).click();}
		
	$('a#logo-href').click(function(){
		$.scrollTo( 0, 1700);
		return false;
	});
	$('a#story-href').click(function(){
		$.scrollTo( 1128, 1700);
		return false;
	});
	$('a#photos-href').click(function(){ 
		$.scrollTo( 2150, 1900);
		return false;
	});
	$('a#function-href').click(function(){ 
		$.scrollTo( 2940, 1900);
		return false;
	});
	$('a#family-href').click(function(){ 
		$.scrollTo( 4100, 1900);
		return false;
	});
	}) 
	




















