window.log=function(){log.history=log.history||[];log.history.push(arguments);if(this.console){arguments.callee=arguments.callee.caller;console.log(Array.prototype.slice.call(arguments))}};(function(e){function h(){}for(var g="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,markTimeline,profile,profileEnd,time,timeEnd,trace,warn".split(","),f;f=g.pop();){e[f]=e[f]||h}})(window.console=window.console||{});(function(c){var a=c.scrollTo=function(d,f,g){c(window).scrollTo(d,f,g)};a.defaults={axis:"xy",duration:parseFloat(c.fn.jquery)>=1.3?0:1};a.window=function(d){return c(window)._scrollable()};c.fn._scrollable=function(){return this.map(function(){var d=this,f=!d.nodeName||c.inArray(d.nodeName.toLowerCase(),["iframe","#document","html","body"])!=-1;if(!f){return d}var g=(d.contentWindow||d).document||d.ownerDocument||d;return c.browser.safari||g.compatMode=="BackCompat"?g.body:g.documentElement})};c.fn.scrollTo=function(f,e,d){if(typeof e=="object"){d=e;e=0}if(typeof d=="function"){d={onAfter:d}}if(f=="max"){f=9000000000}d=c.extend({},a.defaults,d);e=e||d.speed||d.duration;d.queue=d.queue&&d.axis.length>1;if(d.queue){e/=2}d.offset=b(d.offset);d.over=b(d.over);return this._scrollable().each(function(){var n=this,l=c(n),m=f,j,k={},h=l.is("html,body");switch(typeof m){case"number":case"string":if(/^([+-]=)?\d+(\.\d+)?(px|%)?$/.test(m)){m=b(m);break}m=c(m,this);case"object":if(m.is||m.style){j=(m=c(m)).offset()}}c.each(d.axis.split(""),function(q,r){var t=r=="x"?"Left":"Top",s=t.toLowerCase(),v="scroll"+t,p=n[v],g=a.max(n,r);if(j){k[v]=j[s]+(h?0:p-l.offset()[s]);if(d.margin){k[v]-=parseInt(m.css("margin"+t))||0;k[v]-=parseInt(m.css("border"+t+"Width"))||0}k[v]+=d.offset[s]||0;if(d.over[s]){k[v]+=m[r=="x"?"width":"height"]()*d.over[s]}}else{var u=m[s];k[v]=u.slice&&u.slice(-1)=="%"?parseFloat(u)/100*g:u}if(/^\d+$/.test(k[v])){k[v]=k[v]<=0?0:Math.min(k[v],g)}if(!q&&d.queue){if(p!=k[v]){i(d.onAfterFirst)}delete k[v]}});i(d.onAfter);function i(g){l.animate(k,e,d.easing,g&&function(){g.call(this,f,d)})}}).end()};a.max=function(g,j){var n=j=="x"?"Width":"Height",k="scroll"+n;if(!c(g).is("html,body")){return g[k]-c(g)[n.toLowerCase()]()}var o="client"+n,f=g.ownerDocument.documentElement,d=g.ownerDocument.body;return Math.max(f[k],d[k])-Math.min(f[o],d[o])};function b(d){return typeof d=="object"?d:{top:d,left:d}}})(jQuery);