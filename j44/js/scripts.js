enquire.register("screen and (min-width:992px)", function() {
 
    //execute for large-screen devices
     $(function() {
     	wow = new WOW(
     	    {
     	      boxClass:     'wow',      // default
     	      animateClass: 'animated', // default
     	      offset:       0,          // default
     	      mobile:       false,       // default
     	      live:         true        // default
     	    }
     	 )
	     function bindApperEvent(section,target) {
	     		$(section).appear();
	     		$(document.body).on('appear', section, function() {
	     		    $('a#btn-next').attr("href", target);
	     		});
	     }
     		bindApperEvent('#section-one','#section-two');
     		bindApperEvent('#section-two','#section-three');
     		bindApperEvent('#section-three','#section-four');
     		bindApperEvent('#section-four','#section-five');
     		bindApperEvent('#section-five','#section-six');
     		bindApperEvent('#section-six','#section-seven');
     		bindApperEvent('#section-seven','#about');
     		bindApperEvent('#about','#contact');
     		
     		$(window).on("scroll mousewheel", function() {
     		    
     		    if(($('body').scrollTop()) > 1024){
     		    		$('.btn-up').fadeIn();
     		    }else{
     		    		$('.btn-up').fadeOut();
     		    }
     		    
     		    if(($('body').scrollTop()) < 5750){
     		    		$('#btn-next').show();
     		    }else{
     		    		$('#btn-next').hide();
     		    }
     		    
     		    if($('body').scrollTop() > 500){
     		    		$('#btn-next span').fadeOut(200);
     		    }else{
     		    		$('#btn-next span').fadeIn(200);
     		    }
     		});
     		
     		wow.init();
     });

}, true);

//Mobile Devices
enquire.register("screen and (max-width:992px)", function() {
		$(function() {
				$('.sb header img').removeAttr('style');
				$('.parallax-window').removeAttr('data-parallax');
		});
});

/// All Devices
$(function() {
  
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        $(window).scroll();
        return false;
      }
    }
  });
  
  //Slider
  $('#slider ul').bxSlider();
	
});

function initialize() {
  var myLatlng = new google.maps.LatLng(18.514460, 73.832155);
  var mapOptions = {
    zoom: 18,
    center: myLatlng
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      animation: google.maps.Animation.DROP,
      title: 'J44 Prabhat'
  });
}

google.maps.event.addDomListener(window, 'load', initialize);
