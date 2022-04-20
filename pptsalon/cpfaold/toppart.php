<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
 "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
   <title>CPFA</title>
   <link rel="stylesheet" href="css/blueprint/screen.css" type="text/css" media="screen, projection" />
    <link rel="stylesheet" href="css/blueprint/print.css" type="text/css" media="print" />
	<!--[if lt IE 8]><link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->

   <link rel="stylesheet" href="css/custom.css" type="text/css">
   <link rel="stylesheet" href="css/basic.css" type="text/css">
   <script type="text/javascript" src="js/jquery.min.js" ></script>
   <script type="text/javascript" src="js/jquery.simplemodal-1.3.5.js"></script>
</head>
<body>
<div id="main-bg">
<div class="container">
	<div class="span-7">
		<div id="left-bar">
			<div class="logo-bar">
				<a href="index.php"><img src="img/logo.png" align="center" border="0" /></a>
			</div>
			<div class="lb-item">
				<?php if($page == "atc") {  ?>
                <img  src="img/lm-atc-blue.png" name="atc" border="0" />
                <? }  else {  ?>
				<a href="aboutcertification.php" onmouseout="document.atc.src='img/lm-atc.png'" onmouseover="document.atc.src='img/lm-atc-blue.png'" >
                <img  src="img/lm-atc.png" name="atc" border="0"  />
                </a>
				<?php }  ?>
			</div>
			<div class="lb-item">
                <?php if($page == "cpfapro"){ ?>
                <img src="img/lm-cpfaforp-blue.png" name="lmcpfaforp" border="0" />
                <?php } else {?>
				<a href="cpfapro.php" onmouseout="document.lmcpfaforp.src='img/lm-cpfaforp.png'" onmouseover="document.lmcpfaforp.src='img/lm-cpfaforp-blue.png'" >
				<img src="img/lm-cpfaforp.png" name="lmcpfaforp" border="0"  />
                </a>
                <?php }?>
			</div>
			<div class="lb-item">
                <?php if($page == "bfsi"){ ?>
                <img src="img/lm-cpfaforc-blue.png" name="lmcpfaforc" border="0" />
                <?php } else {?>
				<a href="bfsi.php" onmouseover="document.lmcpfaforc.src='img/lm-cpfaforc-blue.png'" onmouseout="document.lmcpfaforc.src='img/lm-cpfaforc.png'">
				<img src="img/lm-cpfaforc.png" name="lmcpfaforc" border="0" />
				</a>
                <?php } ?>
			</div>

			<div class="lb-item">
                <?php if($page == "trainingop") { ?>
                <img src="img/lm-to-blue.png" name="lmto" border="0" />
                <?php } else {?>
				<a href="trainingoppurtunities.php" onmouseover="document.lmto.src='img/lm-to-blue.png'" onmouseout="document.lmto.src='img/lm-to.png'">
				<img src="img/lm-to.png" name="lmto" border="0" >
				</a>
                <?php }?>
			</div>
			<div class="lb-item">
                <?php if($page == "certificationprocess") { ?>
                <img src="img/lm-cp-blue.png" name="lmcp" border="0" />
                <?php } else { ?>
				<a href="certificationprocess.php" onmouseover="document.lmcp.src='img/lm-cp-blue.png'" onmouseout="document.lmcp.src='img/lm-cp.png'">
				<img src="img/lm-cp.png" name="lmcp" border="0" >
				</a>
                <?php } ?>
			</div>
			<!--
			<div class="testimonial">
			<div class="t-right">
				<p>&nbsp;</p>
				<blockquote>
				<p class="quote">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy<span class="rquote">&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
				</blockquote>
				<p class="source">Name Surname</p>
			</div> 
			</div> -->
			<div class="banner">
					<a href="http://investorfirst.in" target="_blank" ><img src="img/investor_first.gif" border="0" /></a>
			</div>
		</div>
	</div>
	<div class="span-17 last">
		<div class="span-14">
			<div id="top-menu">
                <img class="initnism" src="img/initaitivenism.png" />
                <?php if($page == "aboutnism") { ?>
                <img src="img/aboutnism_b.png" name="tmanism" border="0" />
                <?php } else { ?>
				<a href="aboutnism.php" onmouseover="document.tmanism.src='img/aboutnism_b.png'" onmouseout="document.tmanism.src='img/aboutnism.png'"><img name="tmanism" src="img/aboutnism.png" /></a>
                <?php }?>
                <?php if($page == "contactus") { ?>
                <img src="img/contactus_b.png" name="tmcus" border="0" />
                <?php } else { ?>
				<a href="contactus.php" onmouseover="document.tmcus.src='img/contactus_b.png'" onmouseout="document.tmcus.src='img/contactus.png'"><img name="tmcus" src="img/contactus.png" /></a>
                <?php }?>
			</div>
            <div style="clear: both;margin-bottom:10px;"></div>
		</div>
		<div class="span-3 last">
			 <div id="registerlink">
				  <a href="#" class="basic"><img src="img/registernow.png" border="0"/></a>
			</div>
		</div>		
	</div>