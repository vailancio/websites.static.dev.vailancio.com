<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">

<head>
<?php
include 'library/functions.php';
?>
    <link rel="shortcut icon" href="img/favicon.gif" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="alexaVerifyID" content="rCSN6EYUmd69fHnkHZlO1Eakyoc" />
    <meta name="description" content="Beautiful Presentations designed and delivered in 48 hours. Presentation Design for Conferences, Investor Meets, Financial Results, Corporate Profiles, Sales Pitches, Student Projects" /> 
    <meta name="keywords" content="presentation design, powerpoint presentation design, presentation slide design, presentation design ideas, powerpoint presentation slides, powerpoint slides design, ppt slide design, design templates for powerpoint" /> 
    <title>PPT Salon | Presentation Design Service</title>

    <!-- Framework CSS -->
    <link rel="stylesheet" href="css/blueprint/screen.css" type="text/css" media="screen, projection" />
    <link rel="stylesheet" href="css/blueprint/print.css" type="text/css" media="print" />
	<link rel="stylesheet" href="css/custom.css" type="text/css" />
    
    <!--[if lt IE 8]><link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->

    <!-- Import fancy-type plugin for the sample page. -->
    <link rel="stylesheet" href="css/blueprint/plugins/fancy-type/screen.css" type="text/css" media="screen, projection">
	
	
	
	<!--Make sure page contains valid doctype at the very top!-->
<!--jquerySet start-->

<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8" />
<script type="text/javascript" src="js/jquery.min.js" ></script>
<!--<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js'></script>-->

<script type="text/javascript" src="js/stepcarousel.js"></script>
<script type="text/javascript" src="js/lightbox.js"></script>
<script type="text/javascript" src="js/jquery.simplemodal-1.3.5.js"></script>
<!--
//non Jquery Scroll
<script type="text/javascript" src="js/scroll.js"></script>
-->
<script type="text/javascript" src="js/jquery.scrollTo-min.js"></script>
<script type="text/javascript" src="js/scrollJquery.js"></script>
<script type="text/javascript">

stepcarousel.setup({
galleryid: 'mygallery', //id of carousel DIV
beltclass: 'belt', //class of inner "belt" DIV containing all the panel DIVs
panelclass: 'panel', //class of panel DIVs each holding content
panelbehavior: {speed:300, wraparound:true, persist:true},
autostep: {enable:false, moveby:1, pause:3000},
defaultbuttons: {enable: true, moveby: 1, leftnav: ['img/arrowl.gif', 15, 140], rightnav: ['img/arrowr.gif', -50, 140]},
statusvars: ['statusA', 'statusB', 'statusC'], // Register 3 "status" variables
contenttype: ['inline'] // content type <--No comma following the very last parameter, always!
})


stepcarousel.setup({
    galleryid: 'mygallery1', //id of carousel DIV
    beltclass: 'belt', //class of inner "belt" DIV containing all the panel DIVs
    panelclass: 'panel', //class of panel DIVs each holding content
    panelbehavior: { speed: 300, wraparound: true, persist: true },
    autostep: { enable: false, moveby: 1, pause: 3000 },
    defaultbuttons: { enable: true, moveby: 1, leftnav: ['img/arrowl.jpg', -20, 70], rightnav: ['img/arrowr.jpg', 0, 70] },
    statusvars: ['statusA', 'statusB', 'statusC'], // Register 3 "status" variables
    contenttype: ['inline'] // content type <--No comma following the very last parameter, always!
})

</script>
<style type="text/css">

.stepcarousel1
{
margin-top:20px;
position: relative; /*leave this value alone*/
width: 690px;
height: 200px; /*Height should enough to fit largest content's height*/
}

.stepcarousel1 .belt{
position: absolute; /*leave this value alone*/
left: 0;
top: 0;
}

.stepcarousel1 .panel{
float: left; /*leave this value alone*/
overflow: hidden; /*clip content that go outside dimensions of holding panel DIV*/
width:220px;
padding:5px;
}

.stepcarousel1 img.gallery-img{
			border:2px solid #000000;		
        }
		
.stepcarousel1 img.gallery-img:hover{
	border:2px solid #38C6F4;		
}

.stepcarousel{
position: relative; /*leave this value alone*/
width: 950px;
height: 330px; /*Height should enough to fit largest content's height*/
}

.stepcarousel .belt{
position: absolute; /*leave this value alone*/
left: 0;
top: 0;
}

.stepcarousel .panel{
float: left; /*leave this value alone*/
overflow: hidden; /*clip content that go outside dimensions of holding panel DIV*/
width: 950px; /*Width of each panel holding each content. If removed, widths should be individually defined on each content DIV then. */
}




</style>
	
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-18195192-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>

  </head>
  <body>
    <div class="container">
		<div class="span-24" id="navigator">
			<div class="span-9" id="logo"><a href="index.php"><img src="img/logo.gif" /></a></div>
			<div id="topmenu" class="links">
				<div><a id="aboutus" href="#">About Us</a><p> If you thought we style hair, read this.</p></div>
				<div><a id="services" href="#">Services</a><p> What can we do <br/>for you today?</p></div>
				<div><a id="portfolio" href="#portfolio">Portfolio</a><p> Some cool PPTs we've created</p></div>
				<div><a id="contactus" href="#">Contact Us</a><p> We'd love to <br/>hear from you</p></div>
			</div>
            <div class="clear"></div>
		</div>
		<div class="span-24" id="mainpanels">
			<div id="mygallery" class="stepcarousel">
				<div class="belt">
					<div id="panel1" class="panel" >
						<div class="text">
							<span class="level1">Is your </span><br/><span class="level2">Presentation </span><br/> Well-Groomed?
							<p>We turn your ideas into information-rich,<br/> visually stunning and persuasive slides <br />that make your point.</p>
						</div>
						<div class="pic">
							<img src="img/barber.png" />
						</div>
					</div>
					<div id="panel2" class="panel">
						<div class="text">
							<span class="level1">Cost less than a</span><br/>flight ticket
							<p>Rs. 8,999 /- $199 <br/>onwards!</p>
						</div>
						<div >
							<img src="img/flight.png" />
						</div>
					</div>
					<div id="panel3" class="panel">
						<div class="text">
							<span class="level1">We dont create</span><br/>white elephants
							<p>Our presentations are completely<br/>editable in PowerPoint</p>
						</div>
						<div >
							<img src="img/panel-elephant.png" />
						</div>
					</div>
					<div id="panel4" class="panel">
						<div>
						 <div class="text">
						 <span class="level3">We are</span> <span class="level1">allergic</span><br/> <span class="level3">to</span> templates
						 </div>
						 <p class="panel4-p">We always design each slide individually.<br/>We never use templates in our presentations.<br/>EVER!</p>
						</div>
						<div class="pic">
							<img src="img/panel-manhead.png" /><img src="img/panel-manhead.png" /><img src="img/panel-manhead.png" /><img src="img/panel-manhead.png" />
						</div>
					</div>
					<div id="panel5" class="panel">
						<div>
						 <div class="p5-text">
							 <img src="img/48.png"/>
							 <p>
							 <span class="level1">Delivered</span> anywhere</p>
							 <p>&nbsp;&nbsp;<span>in the world <span class="level1">in &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;hours</span></span>
							 </p>
						 </div>
						 <a name="portfolio" id="nav-portfolio"></a><!-- for navigation -->
						</div>
					</div>
				</div>
			</div>
			<div class="getppt"><a href="#contactus" class="getppttext"><p>Get your PPT <br/> <i>designed</i><br/><strong>NOW!</strong></p></a></div>
			
		</div>

		<div class="span-24" id="workpanel">
        <div id="work">
			<div class="span-5" id="work-hd">
				<!--<a name="portfolio"></a>-->
				<h1 class="title" id="portfolio">Here is some<br> of our work </h1>
				<a href="clients.php" style="padding-left:25px;"><img src="img/client-link.png" border="0" /></a>
			</div>
			<div id="wrk-panels" class="span-18">
                <div id="mygallery1" class="stepcarousel1">
                    <div class="belt">

                    <div class="panel">
                        <a href="img/ppt_img/gallery_img1.jpg" rel="lightbox"><img src="img/gallery_img1.jpg" class="gallery-img" /></a><br />
						<a href="img/ppt_img/gallery_img1.jpg" rel="lightbox"><img src="img/enlarge.gif"></a><img src="img/sharepoint.gif">
                    </div>

                    <div class="panel">
                        <a href="img/ppt_img/gallery_img2.jpg" rel="lightbox"><img src="img/gallery_img2.jpg" class="gallery-img" /></a><br />
						<a href="img/ppt_img/gallery_img2.jpg" rel="lightbox"><img src="img/enlarge.gif"></a><img src="img/sharepoint.gif">	
                    </div>

                    <div class="panel">
                        <a href="img/ppt_img/gallery_img3.jpg" rel="lightbox"><img src="img/gallery_img3.jpg" class="gallery-img" /></a><br />
						<a href="img/ppt_img/gallery_img3.jpg" rel="lightbox"><img src="img/enlarge.gif"></a><img src="img/sharepoint.gif">
                    </div>

                    <div class="panel">
                        <a href="img/ppt_img/gallery_img4.jpg" rel="lightbox"><img class="gallery-img" src="img/gallery_img4.jpg" /></a><br />
						<a href="img/ppt_img/gallery_img4.jpg" rel="lightbox"><img src="img/enlarge.gif"></a><img src="img/sharepoint.gif">							
                    </div>

                    <div class="panel">
                        <a href="img/ppt_img/gallery_img5.jpg" rel="lightbox"><img src="img/gallery_img5.jpg" class="gallery-img" /></a><br />
						<a href="img/ppt_img/gallery_img5.jpg" rel="lightbox"><img src="img/enlarge.gif"></a><img src="img/sharepoint.gif">	
                    </div>

                    <div class="panel">
                        <a href="img/ppt_img/gallery_img6.jpg" rel="lightbox"><img src="img/gallery_img6.jpg" class="gallery-img" /></a><br />
						<a href="img/ppt_img/gallery_img6.jpg" rel="lightbox"><img src="img/enlarge.gif"></a><img src="img/sharepoint.gif">
                    </div>

                    <div class="panel">
                        <a href="img/ppt_img/gallery_img7.jpg" rel="lightbox"><img src="img/gallery_img7.jpg" class="gallery-img" /></a><br />
						<a href="img/ppt_img/gallery_img7.jpg" rel="lightbox"><img src="img/enlarge.gif"></a><img src="img/sharepoint.gif">							
                    </div>

                    <div class="panel">
                        <a href="img/ppt_img/gallery_img8.jpg" rel="lightbox"><img src="img/gallery_img8.jpg" class="gallery-img" /></a><br />
						<a href="img/ppt_img/gallery_img8.jpg" rel="lightbox"><img src="img/enlarge.gif"></a><img src="img/sharepoint.gif">	
                    </div>

                    <div class="panel">
                        <a href="img/ppt_img/gallery_img9.jpg" rel="lightbox"><img src="img/gallery_img9.jpg" class="gallery-img" /></a><br />
						<a href="img/ppt_img/gallery_img9.jpg" rel="lightbox"><img src="img/enlarge.gif"></a><img src="img/sharepoint.gif">
                    </div>
                    
                    <div class="panel">
                        <a href="img/ppt_img/gallery_img10.jpg" rel="lightbox"><img class="gallery-img" src="img/gallery_img10.jpg" /></a><br />
						<a href="img/ppt_img/gallery_img10.jpg" rel="lightbox"><img src="img/enlarge.gif"></a><img src="img/sharepoint.gif">							
                    </div>

                    <div class="panel">
                        <a href="img/ppt_img/gallery_img11.jpg" rel="lightbox"><img class="gallery-img" src="img/gallery_img11.jpg" /></a><br />
						<a href="img/ppt_img/gallery_img11.jpg" rel="lightbox"><img src="img/enlarge.gif"></a><img src="img/sharepoint.gif">
                    </div>
					<a name="services" id="nav-services"></a><!-- for navigation -->
                    </div>
                </div>
                </div>
			</div>
			<div class="span-24" id="coloredsection">
				<div class="span-6 headercontent">
					<h1 class="title">What can we <br/>do for you<br/> today?</h1>
				</div>
				<div class="span-6 content">
					<h3>Need something complex? </h3>
					<p>A Corporate Presentation that requires photography or research? Write to <a href="mailto:sirji@pptsalon.com">sirji@pptsalon.com</a> with your requirements and we’ll call you to chat about it.</p> 
				</div>
				<div class="span-6 content">
					<h3>Need lots of PPTs every month? </h3>
					<p>Sign-up for a <strong>Corporate Account</strong> and get <i>preferential rates</i> and <i>service</i>. Write to <a href="mailto:badabakra@pptsalon.com">badabakra@pptsalon.com</a> with your requirements and we’ll give you a ring. </p>
				</div>
				<div class="span-6 content">
					<h3>Need a PPT in 48 Hours?</h3>
					<p>We'll make a persuasive, well-structured and beautifully designed presentation for you in 48 hours for Rs.8,999 / $199. Write to <a href="mailto:hajam@pptsalon.com">hajam@pptsalon.com</a> and let us get working for you immediately.</p>
				</div>
			</div>
            <a name="about-us" id="nav-aboutus"></a><!-- for navigation -->
			<div class="span-24" id="reason-section">
				
				<div class="imageclass" ><img src="img/5.jpg"/></div>
				<div class="span-5" style="margin-top:0;"><p class="reason-hd"><b>good reasons</b><br> you should work<br> with us </p></div>
				<div class="span-2 "><img src="img/sep.jpg"/></div>
				<div class="span-14" ><p><b>We Design Presentations for </b>conferences, investor meets, internal meetings, business plans, pitches and whatever else you might need them for.</p></div>
			</div>
			<div class="span-24">
				<div class="span-18" id="r-defination">
					<div class="span-6 r-content" id="r-design">
							<img src="img/design.jpg" border="0" />
							<P><i>We Design  Presentations</i>  that are information-rich, visually stunning and persuasive.</p>
					</div>	
					<div class="span-6 r-content" id="r-template">
						<img src="img/template.jpg" />
						<p><i>We are allergic to templates.</i> We design each slide individually to best fit the content.</p>
					</div>
					<div class="span-5 r-content" id="r-elephant">
						<img src="img/elephant.jpg" />
						<p><i>We don't create white elephants.</i> All our presentations are completely editable.</p>
					</div>
					<div class="span-6 r-content" id="r-flight">
							<img src="img/flight.jpg" />
							<P><i>It costs less than a flight ticket!</i> Rs.8,999 / $199 onwards!</p>
					</div>	
					<div class="span-6 r-content" id="r-bike">
						<img src="img/bike.jpg" />
						<p><i>We Deliver anywhere in the world, in 48 hours!</i></p>
					</div>
					<div class="span-5 r-content" id="r-convinced">
						<h2>Convinced?</h2>
						<p>Write to <a href="mailto:abhi@BeardDesign.in">abhi@BeardDesign.in</a> and let us get working for you immediately. </p>
					</div>
				</div>
				<div id="quoteblock">
					<div class="quote">
						<blockquote>
						  <p>Very impressed with the quality of work – refreshing, bold & different.</p>
						  <span class="cite"><b>Rangarajan P.</b><br/>
							COO, Appnomic</span>
						</blockquote>
					</div>
					<div>
						<blockquote>
						  <p>You are a great partner. Thank you for the quick turnaround and your creative contribution to our presentation</p>
						  <span class="cite"><b>Gary Miner</b><br/>
Del Mar Design LLC, California.</span>
						</blockquote>
					</div>
				</div>
			</div>
		</div>
        <p class="footer-top"><img src="img/footer.png" align="middle" /></p> 
		<a name="contactus"></a>
	</div>

    <div class="main">
    <div style="width: 100%;border-bottom:2px solid #ffffff;padding-top:20px;">&nbsp;</div>
	<div class="span-24" id="footer">
		<div class="span-6 left-ft">
			<img src="img/shitpot.png" usemap="#metroid" ismap="ismap" border="0" />
			<map name="metroid">
			<area shape="circle" coords="105,88,63" href="salon.html" alt=" Click here to see the salon" >
			</map>
            
		</div>
		<div class="span-11 middle-ft">
			<h1 class="title">We’d love to hear from you.</h1>
			<address>
			Write to <a href="mailto:hajam@pptsalon.com">hajam@pptsalon.com</a><br/> 
			or call us at <span>+91 98909 26072</span>
			</address>
			<p>If you are in Goa, come try our<br/> homemade Saunf Vodka :-)</p>
		</div>
		<div class="right-ft">
			<h1>Follow us on:</h1>
			<a href="http://www.slideshare.net/pptsalon" target="_blank"><img src="img/twitter.png" border="0" /></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.facebook.com/pptsalon" target="_blank"><img src="img/fb.png" border="0" /></a>
			<div class="bike">
			 <a href="http://www.facebook.com/pptsalon" target="_blank"><img src="img/bike.png" border="0" /></a>
			</div>
		</div>
        
	</div>
	<div style="width: 100%;border-top:1px dashed #918f90;"></div>
	<div class="span-24 page-bottom">
		<p>&copy;All Rights to everything on this website belong to us. We’ll hunt you down if you copy anything. Seriously.<br>
If you want a website like this, write to abhi@BeardDesign.in</p>
	</div>
    </div>
</body>


</html>