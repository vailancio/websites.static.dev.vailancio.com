      function showPanel($panel){

      		if(!$panel.hasClass('active')){
                $panel.addClass('active');
                $panel.siblings().each(function(index,ele){
                	$(ele).removeClass('active');
                });
            }
      }

      // extension:
      $.fn.scrollEnd = function(callback, timeout) {          
        $(this).scroll(function(){
          var $this = $(this);
          if ($this.data('scrollTimeout')) {
            clearTimeout($this.data('scrollTimeout'));
          }
          $this.data('scrollTimeout', setTimeout(callback,timeout));
        });
      };

      $(window).on( 'scroll', function(){

        if(!$('.background-overlay').hasClass('pause-animation')){
          $('.background-overlay').addClass('pause-animation');
        }
          
      });

      $(window).scrollEnd(function(){
          $('.background-overlay').removeClass('pause-animation');
      }, 400);

      $.fn.isOnScreen = function(){

          var win = $(window);

          var viewport = {
              top : win.scrollTop(),
              left : win.scrollLeft()
          };
          viewport.right = viewport.left + win.width();
          viewport.bottom = viewport.top + win.height();

          var bounds = this.offset();
          bounds.right = bounds.left + this.outerWidth();
          bounds.bottom = bounds.top + this.outerHeight();

          return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));

      };

      $(window).scroll(function() {
         if ($('#section-4').isOnScreen() == true) {
           //console.log('visibe');  
         }
      });

      $( document ).ready(function() {
            $('.work-samples img').each(function(){
              var caption = $(this).attr('title');

              if(caption != undefined){
                $('<span class="caption">'+caption+'</span>').insertAfter($(this));
              }
              
            });

            $("#portfolio-nav").hcSticky({
              responsive: true
            });

            $('.lightbox-image' ).swipebox( {
              useCSS : true, // false will force the use of jQuery for animations
              useSVG : true, // false to force the use of png for buttons
              initialIndexOnArray : 0, // which image index to init when a array is passed
              hideCloseButtonOnMobile : false, // true will hide the close button on mobile devices
              removeBarsOnMobile : true, // false will show top bar on mobile devices
              hideBarsDelay : 3000, // delay before hiding bars on desktop
              videoMaxWidth : 1140, // videos max width
              beforeOpen: function() {}, // called before opening
              afterOpen: null, // called after opening
              afterClose: function() {}, // called after closing
              loopAtEnd: false // true will return to the first image after the last image is reached
            } );


            $('#portfolio-nav a').click(function(e){
              e.preventDefault();
              $(this).siblings().removeClass('active');
              $(this).addClass('active');
              showPanel($($(this).context.hash));
            });

            $('#portfolio-cat a').click(function(e){
              e.preventDefault();
              showPanel($($(this).context.hash));

              $('html, body').animate({
				        scrollTop: $("#portfolio-nav").offset().top - 100
			        }, 1000);
			  
            });

            $('.work-samples img').click(function(e){
            	var $target = $($($(this).data('target')+' a')[0]);
            	console.log($(this).data('target'));
            	e.preventDefault();
            	$target.trigger('click');
            });

            $('#contact-form').submit(function(e){
              e.preventDefault();

              var $form = $(this);

              var data = {};

              data.email = $form.find('input[name=email]').val();
              data.name = $form.find('input[name=name]').val();
              data.message = $form.find('textarea[name=message]').val()
              
              console.log("Sending Message", data);

              $.ajax({
                  url: "https://formspree.io/vailancio248@gmail.com", 
                  method: "POST",
                  data: data,
                  dataType: "json",
                  beforeSend: function(){
                    //$form.prepend('<p>Sending.</p>');
                  },
                  success: function(){
                    $form.html('<p><span style="color:#da1845">Thanks 😊</span> for contacting us. <br>We will get back to you shortly.</p>');
                  },
                  error: function(jqXHR, textStatus, errorThrown){
                    console.log(jqXHR);
                    $form.prepend('<p>Something went wrong ! '+jqXHR.responseJSON.error+'</p>');
                  }
              });

              return false;
            });
      });

      function initMap() {
        var uluru = {lat: 15.6002778, lng: 73.7941446};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: uluru,
          scrollwheel: false,
          navigationControl: false,
          mapTypeControl: false,
          scaleControl: false,
          draggable: true
        });

          var pinIcon = new google.maps.MarkerImage("images/svgs/drop-pin.svg",
              new google.maps.Size(52, 72),
              new google.maps.Point(0,0),
              new google.maps.Point(10, 34)
          );

        var marker = new google.maps.Marker({
          position: uluru,
          icon: pinIcon,
          map: map,
          title: 'Unfuck Design Office',
          url: "https://goo.gl/maps/sRVdV4Swdpr"
        });

        google.maps.event.addListener(marker, 'click', function() {
            window.open(
              this.url,
              '_blank' // <- This is what makes it open in a new window.
            );
        });
      }