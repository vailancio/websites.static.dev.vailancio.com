<?php
 // Figure out which browser the user is using
 $user_agent = $_SERVER['HTTP_USER_AGENT'];
 if (preg_match('/Firefox.2/i', $user_agent)){
 $browser = "ff ff2";
 } else if (preg_match('/Firefox.3/i', $user_agent)) {
 $browser = "ff ff3";
 } else if (preg_match('/Firefox.3.0/i', $user_agent)) {
 $browser = "ff ff30";
 } else if (preg_match('/MSIE.8/i', $user_agent)) {
 $browser = "ie ie8";
} else if (preg_match('/MSIE.7/i', $user_agent)) {
 $browser = "ie ie7";
 } else if (preg_match('/MSIE.6/i', $user_agent)) {
 $browser = "ie ie6";
 } else if (preg_match('/Chrome/i', $user_agent)) {
 $browser = "chrome";
 } else if (preg_match('/Safari/i', $user_agent)) {
 $browser = "safari";
 } else {
 $browser = "in_unknown";
 }
 ?>
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Expoentia Capital</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">


  <!-- CSS: implied media="all" -->
  <link rel="stylesheet" href="css/style.css?v=2">
  <link href="http://kernest.com/fonts/league-gothic.css" media="screen" rel="stylesheet" type="text/css" />

  <!-- Uncomment if you are specifically targeting less enabled mobile browsers
  <link rel="stylesheet" media="handheld" href="css/handheld.css?v=2">  -->

  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <script src="js/libs/modernizr-1.7.min.js"></script>

</head>

<body class="<?php echo $browser ?>">

  <div id="container">
    <header>
    <div id="header">
    <div class="head-wrap">
    <div id="logo"><a href="index.html" class="ir">Expoentia Capital</a></div>
		<div class="nav">
        	<ul class="menu">
                <li><a href="team.html">Our Team</a></li>
                <li><a href="partner.html">Partner with us</a></li>
                <li><a href="invest.html">Invest with us</a></li>
                <li><a href="work.html">Work with us</a></li>
                <li><a href="news.html">In the News</a></li>
                <li><a href="contact.html">Contact us</a></li>
                <li class="glog"><a href="blog.html">Blog</a></li>
            </ul>  
        </div>
    </div><!-- end of .head-wrap-->          
    </div>    
    </header>
    <div id="main" role="main">
        <div id="wrapper" style="background: url(img/00_Exponentia_Homepage.png) no-repeat 20% top">
        	<div class="content">
            <div class="homepage">
            	<div class="jar1">
                <p class="hidden"><strong>Powering</strong> <span>Entrepreneuers</span></p>
                </div>
                <div class="jar2">
                <p><span class="highlight">Exponentia Capital is a Leading Venture Capital firm </span>focused on powering Indian entrepreneurs who need between $20-40 million in capital to grow their business.</p>
                <p>We love the clean energy, technology products and mobile services space.</p>
                </div>
              
            </div><!-- end of homepage-->   
            </div><!-- end of content-->
                
        </div>
        
        </div>
        <div class="push"></div>
    </div>
    <footer>
		<div class="social">
		<p><a href="#" style="background-position:top left">Facbook</a><a style="background-position:top right" href="#">Twitter</a></p>
		</div> 
		
		<p class="bblock"></p>
    </footer>
  </div> <!--! end of #container -->


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
  <script>window.jQuery || document.write("<script src='js/libs/jquery-1.5.1.min.js'>\x3C/script>")</script>


  <!-- scripts concatenated and minified via ant build script-->
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <!-- end scripts-->


  <!--[if lt IE 7 ]>
    <script src="js/libs/dd_belatedpng.js"></script>
    <script>DD_belatedPNG.fix("img, .png_bg"); // Fix any <img> or .png_bg bg-images. Also, please read goo.gl/mZiyb </script>
  <![endif]-->


  <!-- mathiasbynens.be/notes/async-analytics-snippet Change UA-XXXXX-X to be your site's ID -->
  <script>
    var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
    g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
    s.parentNode.insertBefore(g,s)}(document,"script"));
  </script>

</body>
</html>