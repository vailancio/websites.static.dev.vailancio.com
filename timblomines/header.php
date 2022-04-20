<?php include("functions.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="google-site-verification" content="9MB1lWf3RSLriQnaDqPC3fsQvFoSL6Oss5tGR-3QCrc" />
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $meta_desc; ?>" />
<link rel="stylesheet" href="css/reset.css" />
<link rel="stylesheet" href="css/text.css" />
<link rel="stylesheet" href="css/grid.css" />
<link rel="stylesheet" href="css/style.css" />
<!--[if lt IE 8]>
<style>
.caption{padding:10px; margin-left:0;}
</style>
<![endif]-->
<!--[if lt IE 9]>
<script src="js/IE9.js"></script>
<![endif]-->
<!--[if lte IE 6]><script src="js/ie6/warning.js"></script><script>window.onload=function(){e("js/ie6/")}</script><![endif]-->
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/validation.js"></script>
<script type="text/javascript" src="js/preload.cssimages.js"></script>
<script type="text/javascript" src="js/gallery.min.js"></script>
<script type="text/javascript"> 
jQuery(function($) { 
$('ul.gallery').galleria(); 
}); 
</script>
<script type="text/javascript" src="js/paginate.js"></script>  
<script type="text/javascript">
$(function(){ 
				/*$('#gallery-nav').hide(); //edited by vailancio
				$('.thumb').click(function(){
                $('#gallery-nav').show();
                });*/
				
				var wrap2 = $('#paginate');
				$('.action').click(function(){
					var action = $(this).attr('rel'); // get the appropriate action from the rel attribute
					wrap2.trigger(action+'.evtpaginate');
					return false;
				});
				
				$('select[name=perpage]').change(function(){
					wrap2.trigger('refresh.evtpaginate', { perPage : $(this).val() } );
					return false;
				});

				// listen out for events triggered by the plugin to update the counter

				wrap2.bind( 'initialized.evtpaginate', function(e, startnum, totalnum ){
					$('#count2').text(startnum);
					$('#total2').text(totalnum);
				}); 

				wrap2.bind( 'finished.evtpaginate', function(e, num, isFirst, isLast ){ $('#count2').text(num); } ); 	

				wrap2.evtpaginate({perPage:9, atEnd:'loop'}); // call the plugin!	

			});

</script>
<script type="text/javascript">
$(document).ready(function(){
  $.preloadCssImages();
});
</script>
<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-3729829-13']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

</script>
</head>
<body>
<img id="bg-image" src="img/background.jpg" alt="Timblo Mining" />
<div class="container_12">
	<div class="grid_12" id="header">
    <p>Our core business is iron ore. We are currently, one of Goa’s (India), largest producer, seller, shipper of iron ore in the private sector. Having started in Goa in 1990, we also have mining operations in Karnataka India.</p>
	</div>
	<!-- end .grid_12  end #header-->
	<div class="clear"></div>
  <div class="grid_12" id="nav">
    <ul id="menu">
      <li class="page1"><a href="index.php"><span>Home</span></a></li>
      <li class="page2"><a href="objective.php"><span>Objective</span></a></li>
      <li class="page3"><a href="philosophy.php"><span>Philosophy</span></a></li>
      <!--<li class="page4"><a href="executive.php"><span>Executive Team</span></a></li>-->
      <li class="page5"><a href="gallery.php"><span>Gallery</span></a></li>
      <li class="page6"><a href="contact.php"><span>Contact Us</span></a></li>
    </ul>
  </div>
    <!-- end.grid_12 end #nav-->
<div class="clear"></div>