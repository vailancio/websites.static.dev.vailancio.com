
// usage: log('inside coolFunc', this, arguments);
// paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
window.log = function(){
  log.history = log.history || [];   // store logs to an array for reference
  log.history.push(arguments);
  arguments.callee = arguments.callee.caller;  
  if(this.console) console.log( Array.prototype.slice.call(arguments) );
};
// make it safe to use console.log always
(function(b){function c(){}for(var d="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,markTimeline,profile,profileEnd,time,timeEnd,trace,warn".split(","),a;a=d.pop();)b[a]=b[a]||c})(window.console=window.console||{});


// place any jQuery/helper plugins in here, instead of separate, slower script files.



//Jquery-easing
/*
 * jQuery Easing v1.3 - http://gsgd.co.uk/sandbox/jquery/easing/
 *
 * Uses the built in easing capabilities added In jQuery 1.1
 * to offer multiple easing options
 *
 * TERMS OF USE - jQuery Easing
 * 
 * Open source under the BSD License. 
 * 
 * Copyright © 2008 George McGinley Smith
 * All rights reserved.
 * 
 * Redistribution and use in source and binary forms, with or without modification, 
 * are permitted provided that the following conditions are met:
 * 
 * Redistributions of source code must retain the above copyright notice, this list of 
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list 
 * of conditions and the following disclaimer in the documentation and/or other materials 
 * provided with the distribution.
 * 
 * Neither the name of the author nor the names of contributors may be used to endorse 
 * or promote products derived from this software without specific prior written permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 *  COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 *  EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
 *  GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED 
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
 *  NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED 
 * OF THE POSSIBILITY OF SUCH DAMAGE. 
 *
*/

// t: current time, b: begInnIng value, c: change In value, d: duration
jQuery.easing['jswing'] = jQuery.easing['swing'];

jQuery.extend( jQuery.easing,
{
	def: 'easeOutQuad',
	swing: function (x, t, b, c, d) {
		//alert(jQuery.easing.default);
		return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
	},
	easeInQuad: function (x, t, b, c, d) {
		return c*(t/=d)*t + b;
	},
	easeOutQuad: function (x, t, b, c, d) {
		return -c *(t/=d)*(t-2) + b;
	},
	easeInOutQuad: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t + b;
		return -c/2 * ((--t)*(t-2) - 1) + b;
	},
	easeInCubic: function (x, t, b, c, d) {
		return c*(t/=d)*t*t + b;
	},
	easeOutCubic: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t + 1) + b;
	},
	easeInOutCubic: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t + b;
		return c/2*((t-=2)*t*t + 2) + b;
	},
	easeInQuart: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t + b;
	},
	easeOutQuart: function (x, t, b, c, d) {
		return -c * ((t=t/d-1)*t*t*t - 1) + b;
	},
	easeInOutQuart: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
		return -c/2 * ((t-=2)*t*t*t - 2) + b;
	},
	easeInQuint: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t*t + b;
	},
	easeOutQuint: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t*t*t + 1) + b;
	},
	easeInOutQuint: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
		return c/2*((t-=2)*t*t*t*t + 2) + b;
	},
	easeInSine: function (x, t, b, c, d) {
		return -c * Math.cos(t/d * (Math.PI/2)) + c + b;
	},
	easeOutSine: function (x, t, b, c, d) {
		return c * Math.sin(t/d * (Math.PI/2)) + b;
	},
	easeInOutSine: function (x, t, b, c, d) {
		return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
	},
	easeInExpo: function (x, t, b, c, d) {
		return (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;
	},
	easeOutExpo: function (x, t, b, c, d) {
		return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
	},
	easeInOutExpo: function (x, t, b, c, d) {
		if (t==0) return b;
		if (t==d) return b+c;
		if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
		return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
	},
	easeInCirc: function (x, t, b, c, d) {
		return -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;
	},
	easeOutCirc: function (x, t, b, c, d) {
		return c * Math.sqrt(1 - (t=t/d-1)*t) + b;
	},
	easeInOutCirc: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
		return c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;
	},
	easeInElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
	},
	easeOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
	},
	easeInOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		if (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
		return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
	},
	easeInBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*(t/=d)*t*((s+1)*t - s) + b;
	},
	easeOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
	},
	easeInOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158; 
		if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
		return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
	},
	easeInBounce: function (x, t, b, c, d) {
		return c - jQuery.easing.easeOutBounce (x, d-t, 0, c, d) + b;
	},
	easeOutBounce: function (x, t, b, c, d) {
		if ((t/=d) < (1/2.75)) {
			return c*(7.5625*t*t) + b;
		} else if (t < (2/2.75)) {
			return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
		} else if (t < (2.5/2.75)) {
			return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
		} else {
			return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
		}
	},
	easeInOutBounce: function (x, t, b, c, d) {
		if (t < d/2) return jQuery.easing.easeInBounce (x, t*2, 0, c, d) * .5 + b;
		return jQuery.easing.easeOutBounce (x, t*2-d, 0, c, d) * .5 + c*.5 + b;
	}
});

/**
 * jQuery.ScrollTo - Easy element scrolling using jQuery.
 * Copyright (c) 2007-2009 Ariel Flesler - aflesler(at)gmail(dot)com | http://flesler.blogspot.com
 * Dual licensed under MIT and GPL.
 * Date: 5/25/2009
 * @author Ariel Flesler
 * @version 1.4.2
 *
 * http://flesler.blogspot.com/2007/10/jqueryscrollto.html
 */
;(function(d){var k=d.scrollTo=function(a,i,e){d(window).scrollTo(a,i,e)};k.defaults={axis:'xy',duration:parseFloat(d.fn.jquery)>=1.3?0:1};k.window=function(a){return d(window)._scrollable()};d.fn._scrollable=function(){return this.map(function(){var a=this,i=!a.nodeName||d.inArray(a.nodeName.toLowerCase(),['iframe','#document','html','body'])!=-1;if(!i)return a;var e=(a.contentWindow||a).document||a.ownerDocument||a;return d.browser.safari||e.compatMode=='BackCompat'?e.body:e.documentElement})};d.fn.scrollTo=function(n,j,b){if(typeof j=='object'){b=j;j=0}if(typeof b=='function')b={onAfter:b};if(n=='max')n=9e9;b=d.extend({},k.defaults,b);j=j||b.speed||b.duration;b.queue=b.queue&&b.axis.length>1;if(b.queue)j/=2;b.offset=p(b.offset);b.over=p(b.over);return this._scrollable().each(function(){var q=this,r=d(q),f=n,s,g={},u=r.is('html,body');switch(typeof f){case'number':case'string':if(/^([+-]=)?\d+(\.\d+)?(px|%)?$/.test(f)){f=p(f);break}f=d(f,this);case'object':if(f.is||f.style)s=(f=d(f)).offset()}d.each(b.axis.split(''),function(a,i){var e=i=='x'?'Left':'Top',h=e.toLowerCase(),c='scroll'+e,l=q[c],m=k.max(q,i);if(s){g[c]=s[h]+(u?0:l-r.offset()[h]);if(b.margin){g[c]-=parseInt(f.css('margin'+e))||0;g[c]-=parseInt(f.css('border'+e+'Width'))||0}g[c]+=b.offset[h]||0;if(b.over[h])g[c]+=f[i=='x'?'width':'height']()*b.over[h]}else{var o=f[h];g[c]=o.slice&&o.slice(-1)=='%'?parseFloat(o)/100*m:o}if(/^\d+$/.test(g[c]))g[c]=g[c]<=0?0:Math.min(g[c],m);if(!a&&b.queue){if(l!=g[c])t(b.onAfterFirst);delete g[c]}});t(b.onAfter);function t(a){r.animate(g,j,b.easing,a&&function(){a.call(this,n,b)})}}).end()};k.max=function(a,i){var e=i=='x'?'Width':'Height',h='scroll'+e;if(!d(a).is('html,body'))return a[h]-d(a)[e.toLowerCase()]();var c='client'+e,l=a.ownerDocument.documentElement,m=a.ownerDocument.body;return Math.max(l[h],m[h])-Math.min(l[c],m[c])};function p(a){return typeof a=='object'?a:{top:a,left:a}}})(jQuery);

// jquery.jparallax.js
// 0.9.1
// Stephen Band
//
// Dependencies:
// jQuery 1.2.6 (jquery.com)
//
// Project and documentation site:
// http://webdev.stephband.info/parallax.html


// CLOSURE

(function(jQuery) {


// PRIVATE FUNCTIONS

function stripFiletype(ref) {
  var x=ref.replace('.html', '');
  return x.replace('#', '');
}

function initOrigin(l) {
  if (l.xorigin=='left')	{l.xorigin=0;}	else if (l.xorigin=='middle' || l.xorigin=='centre' || l.xorigin=='center')	{l.xorigin=0.5;}	else if (l.xorigin=='right')	{l.xorigin=1;}
  if (l.yorigin=='top')		{l.yorigin=0;}	else if (l.yorigin=='middle' || l.yorigin=='centre' || l.yorigin=='center')	{l.yorigin=0.5;}	else if (l.yorigin=='bottom')	{l.yorigin=1;}
}

function positionMouse(mouseport, localmouse, virtualmouse) {

  var difference = {x: 0, y: 0, sum: 0};
  
	// Set where the virtual mouse is, if not on target
  if (!mouseport.ontarget) {
    
    // Calculate difference
    difference.x    = virtualmouse.x - localmouse.x;
    difference.y    = virtualmouse.y - localmouse.y;
    difference.sum  = Math.sqrt(difference.x*difference.x + difference.y*difference.y);
    
    // Reset virtualmouse
    virtualmouse.x = localmouse.x + difference.x * mouseport.takeoverFactor;
    virtualmouse.y = localmouse.y + difference.y * mouseport.takeoverFactor;
    
    // If mouse is inside the takeoverThresh set ontarget to true
    if (difference.sum < mouseport.takeoverThresh && difference.sum > mouseport.takeoverThresh*-1) {
    	mouseport.ontarget=true;
    }
  }
  // Set where the layer is if on target
  else {
    virtualmouse.x = localmouse.x;
    virtualmouse.y = localmouse.y;
  }
}

function setupPorts(viewport, mouseport) {

	var offset = mouseport.element.offset();
		
  jQuery.extend(viewport, {
    width: 		viewport.element.width(),
    height: 	viewport.element.height()
  });
  
  jQuery.extend(mouseport, {
    width:		mouseport.element.width(),
    height:		mouseport.element.height(),
    top:			offset.top,
    left:			offset.left
  });
}

function parseTravel(travel, origin, dimension) {
  
  var offset;
  var cssPos;
  
  if (typeof(travel) === 'string') {
    if (travel.search(/^\d+\s?px$/) != -1) {
      travel = travel.replace('px', '');
      travel = parseInt(travel, 10);
      // Set offset constant used in moveLayers()
      offset = origin * (dimension-travel);
      // Set origin now because it won't get altered in moveLayers()
      cssPos = origin * 100 + '%';   
      return {travel: travel, travelpx: true, offset: offset, cssPos: cssPos};
    }
    else if (travel.search(/^\d+\s?%$/) != -1) {
      travel.replace('%', '');
      travel = parseInt(travel, 10) / 100;
    }
    else {
      travel=1;
    }
  }
  // Set offset constant used in moveLayers()
  offset = origin * (1 - travel);
  return {travel: travel, travelpx: false, offset: offset}
}

function setupLayer(layer, i, mouseport) {

  var xStuff;
  var yStuff;
  var cssObject = {};

  layer[i]=jQuery.extend({}, {
  	width:		layer[i].element.width(),
  	height:		layer[i].element.height()
  }, layer[i]);

  xStuff = parseTravel(layer[i].xtravel, layer[i].xorigin, layer[i].width);
  yStuff = parseTravel(layer[i].ytravel, layer[i].yorigin, layer[i].height);

  jQuery.extend(layer[i], {
  	// Used in triggerResponse
  	diffxrat:    mouseport.width / (layer[i].width - mouseport.width),
  	diffyrat:    mouseport.height / (layer[i].height - mouseport.height),
  	// Used in moveLayers
  	xtravel:     xStuff.travel,
  	ytravel:     yStuff.travel,
  	xtravelpx:   xStuff.travelpx,
  	ytravelpx:   yStuff.travelpx,
  	xoffset:     xStuff.offset,
  	yoffset:     yStuff.offset
  });
  
  // Set origin now if it won't be altered in moveLayers()
  if (xStuff.travelpx) {cssObject.left = xStuff.cssPos;}
  if (yStuff.travelpx) {cssObject.top = yStuff.cssPos;}
  if (xStuff.travelpx || yStuff.travelpx) {layer[i].element.css(cssObject);}
}

function setupLayerContents(layer, i, viewportOffset) {

  var contentOffset;

  // Give layer a content object
  jQuery.extend(layer[i], {content: []});
  // Layer content: get positions, dimensions and calculate element offsets for centering children of layers
  for (var n=0; n<layer[i].element.children().length; n++) {
	  
	  if (!layer[i].content[n])          layer[i].content[n]             = {};
	  if (!layer[i].content[n].element)  layer[i].content[n]['element']  = layer[i].element.children().eq(n);
	  
	  // Store the anchor name if one has not already been specified.  You can specify anchors in Layer Options rather than html if you want.
    if(!layer[i].content[n].anchor && layer[i].content[n].element.children('a').attr('name')) {
    	layer[i].content[n]['anchor'] = layer[i].content[n].element.children('a').attr('name');
	  }
	  
	  // Only bother to store child's dimensions if child has an anchor.  What's the point otherwise?
	  if(layer[i].content[n].anchor) {
      contentOffset = layer[i].content[n].element.offset();
	  	jQuery.extend(layer[i].content[n], {
	  		width: 		layer[i].content[n].element.width(),
	  		height:		layer[i].content[n].element.height(),
	  		x:			  contentOffset.left - viewportOffset.left,
	  		y:			  contentOffset.top - viewportOffset.top
	  	});
	  	jQuery.extend(layer[i].content[n], { 
	  	  posxrat:  (layer[i].content[n].x + layer[i].content[n].width/2) / layer[i].width,
	  	  posyrat:  (layer[i].content[n].y + layer[i].content[n].height/2) / layer[i].height
      });
	  }
  }
}

function moveLayers(layer, xratio, yratio) {

	var xpos;
	var ypos;
	var cssObject;
	
	for (var i=0; i<layer.length; i++) {
    
    // Calculate the moving factor
  	xpos = layer[i].xtravel * xratio + layer[i].xoffset;
    ypos = layer[i].ytravel * yratio + layer[i].yoffset;
    cssObject = {};
  	// Do the moving by pixels or by ratio depending on travelpx
    if (layer[i].xparallax) {
      if (layer[i].xtravelpx) {
        cssObject.marginLeft = xpos * -1 + 'px';
      } 
      else {
        cssObject.left = xpos * 100 + '%';
        cssObject.marginLeft = xpos * layer[i].width *-1 + 'px';
      }
	  }
	  if (layer[i].yparallax) {
      if (layer[i].ytravelpx) {
        cssObject.marginTop = ypos * -1 + 'px';
      }
      else {
        cssObject.top = ypos * 100 + '%';
        cssObject.marginTop = ypos * layer[i].height * -1 + 'px';
      }
    }
    layer[i].element.css(cssObject);
	}
}

// PLUGIN DEFINITION **********************************************************************

jQuery.fn.jparallax = function(options) {
	
	// Organise settings into objects (Is this a bit of a mess, or is it efficient?)
	var settings = jQuery().extend({}, jQuery.fn.jparallax.settings, options);
	var settingsLayer = {
  			xparallax:				settings.xparallax,
  			yparallax:				settings.yparallax,
  			xorigin:					settings.xorigin,
  			yorigin:					settings.yorigin,
  			xtravel:          settings.xtravel,
  			ytravel:          settings.ytravel
  		};
  var settingsMouseport = {
  			element:					settings.mouseport,
				takeoverFactor:		settings.takeoverFactor,
				takeoverThresh:		settings.takeoverThresh
			};
	if (settings.mouseport) settingsMouseport['element'] = settings.mouseport;
	
	// Populate layer array with default settings
	var layersettings = [];
	for(var a=1; a<arguments.length; a++) {
		layersettings.push( jQuery.extend( {}, settingsLayer, arguments[a]) );
	}
	
	// Iterate matched elements
	return this.each(function() {

    // VAR
    
		var localmouse = {
					x:				0.5,
					y:				0.5
		};
		
    var virtualmouse = {
					x:				0.5,
					y:				0.5
		};
		
		var timer = {
		  running:		false,
		  frame:			settings.frameDuration,
		  fire:				function(x, y) {
		  	  				  positionMouse(mouseport, localmouse, virtualmouse);
                    moveLayers(layer, virtualmouse.x, virtualmouse.y);
		  	  				  this.running = setTimeout(function() {
		  	  				  	if ( localmouse.x!=x || localmouse.y!=y || !mouseport.ontarget ) {
		  	  				  		timer.fire(localmouse.x, localmouse.y);
		  	  				  	}
		  	  				  	else if (timer.running) {
		  	  				  		timer.running=false;
		  	  				  	}
		  	  				  }, timer.frame);
		  	  				}
		};

		var viewport	=	{element: jQuery(this)};		

		var mouseport = jQuery.extend({}, {element: viewport.element}, settingsMouseport, {
		  xinside:          false,		// is the mouse inside the mouseport's dimensions?
			yinside:	        false,
			active:		        false,		// are the mouse coordinates still being read?
			ontarget:         false			// is the top layer inside the takeoverThresh?
		});
    
		var layer			= [];
    
    // FUNCTIONS
    
    function matrixSearch(layer, ref, callback) {
      for (var i=0; i<layer.length; i++) {
        var gotcha=false;
        for (var n=0; n<layer[i].content.length; n++) {
          if (layer[i].content[n].anchor==ref) {
            callback(i, n);
            return [i, n];
          }
        }
      }
      return false;
    }
    
    // RUN
    
    setupPorts(viewport, mouseport);
		
		// Cycle through and create layers
    for (var i=0; i<viewport.element.children().length; i++) {
			// Create layer from settings if it doesn't exist
			layer[i]=jQuery.extend({}, settingsLayer, layersettings[i], {
				element:	viewport.element.children('*:eq('+i+')')
			});
			
		  setupLayer(layer, i, mouseport);
      
      if (settings.triggerResponse) {
		    setupLayerContents(layer, i, viewport.element.offset());
		  }
		}
		
		
    
    // Set up layers CSS and initial position
    viewport.element.children().css('position', 'absolute');
		moveLayers(layer, 0.5, 0.5);
		
		// Mouse Response
		if (settings.mouseResponse) {
			jQuery().mousemove(function(mouse){
				// Is mouse inside?
				mouseport.xinside = (mouse.pageX >= mouseport.left && mouse.pageX < mouseport.width+mouseport.left) ? true : false;
				mouseport.yinside = (mouse.pageY >= mouseport.top  && mouse.pageY < mouseport.height+mouseport.top)  ? true : false;
				// Then switch active on.
				if (mouseport.xinside && mouseport.yinside && !mouseport.active) {
					mouseport.ontarget = false;
					mouseport.active = true;
				}
				// If active is on give localmouse coordinates
				if (mouseport.active) {
					if (mouseport.xinside) { localmouse.x = (mouse.pageX - mouseport.left) / mouseport.width; }
					else { localmouse.x = (mouse.pageX < mouseport.left) ? 0 : 1; }
					if (mouseport.yinside) { localmouse.y = (mouse.pageY - mouseport.top) / mouseport.height; } 
					else { localmouse.y = (mouse.pageY < mouseport.top) ? 0 : 1; }
				}
				
				// If mouse is inside, fire timer
				if (mouseport.xinside && mouseport.yinside)  { if (!timer.running) timer.fire(localmouse.x, localmouse.y); }
				else if (mouseport.active) { mouseport.active = false; }			
			});
		}
		
		// Trigger Response
		if (settings.triggerResponse) {
		  viewport.element.bind("jparallax", function(event, ref){
		    
		    ref = stripFiletype(ref);
		          
        matrixSearch(layer, ref, function(i, n) {
          localmouse.x = layer[i].content[n].posxrat * (layer[i].diffxrat + 1) - (0.5 * layer[i].diffxrat);
          localmouse.y = layer[i].content[n].posyrat * (layer[i].diffyrat + 1) - (0.5 * layer[i].diffyrat);
  
          if (!settings.triggerExposesEdges) {
            if (localmouse.x < 0) localmouse.x = 0;
            if (localmouse.x > 1) localmouse.x = 1;
            if (localmouse.y < 0) localmouse.y = 0;
            if (localmouse.y > 1) localmouse.y = 1;
          }
          
          mouseport.ontarget = false;
          
          if (!timer.running) timer.fire(localmouse.x, localmouse.y);
        });
		  });
		}
		
		// Window Resize Response
		jQuery(window).resize(function() {

		  setupPorts(viewport, mouseport);
		  for (var i=0; i<layer.length; i++) {
		    setupLayer(layer, i, mouseport);
      }
		});
		
		
	});
};

// END OF PLUGIN DEFINITION **********************************************************************

// PLUGIN DEFAULTS

jQuery.fn.jparallax.settings = {
	mouseResponse:		    true,						// Sets mouse response
	mouseActiveOutside:		false,					// Makes mouse affect layers from outside of the mouseport. 
	triggerResponse:	    true,					  // Sets trigger response
  triggerExposesEdges:  false,          // Sets whether the trigger pulls layer edges into view in trying to centre layer content.
	xparallax:				    true,						// Sets directions to move in
	yparallax:				    false,						//
	xorigin:					    0.5,				    // Sets default alignment - only comes into play when travel is not 1
	yorigin:					    0.5,				    //
	xtravel:              1,              // Factor by which travel is amplified
	ytravel:              1,              //
	takeoverFactor:		    0.65,						// Sets rate of decay curve for catching up with target mouse position
	takeoverThresh:		    0.002,					// Sets the distance within which virtualmouse is considered to be on target, as a multiple of mouseport width.
	frameDuration:        25							// In milliseconds
};

// RUN

initOrigin(jQuery.fn.jparallax.settings);

jQuery(function() {
	
});


// END CLOSURE

})(jQuery);