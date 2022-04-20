<?php
require_once 'include/users/access.class.php';
$user = new flexibleAccess();
require_once 'functions.php';
require_once 'include/validation/validation.class.php';
$valid = new valid();
$datetime = date( 'Y-m-d H:i:s');
include_once 'include/get_ip.php';$ip = getRealIpAddr();
$page = $_SERVER[REQUEST_URI];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php page_title();?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/mootools.js"></script>
<script type="text/javascript" src="js/moocheck.js"></script>
<?php if(($_SERVER[REQUEST_URI]) == "/events.php"){ ?>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	//Set default open/close settings
	$('.details').hide(); //Hide/close all containers
	//$('.event:first').addClass('active').next().show(); //Add "active" class to first trigger, then show/open the immediate 	next container

	//On Click
	$('.event').click(function(){
		if( $(this).next().is(':hidden') ) { //If immediate next container is closed...
			//$('#debate').css({'margin-bottom' : '5px'});
			$('.lunch').removeClass('active').next().slideUp();
			$('.event').removeClass('active').next().slideUp(); //Remove all "active" state and slide up the immediate next 	container
			$(this).toggleClass('active').next().slideDown(); //Add "active" state to clicked trigger and slide down the immediate next container
		}
		return false; //Prevent the browser jump to the link anchor
	});
	
	//bug fixes
	//lunch
	$('.lunch').click(function(){
		if( $(this).next().is(':hidden') ) { //If immediate next container is closed...
			$('.event').removeClass('active').next().slideUp(); //Remove all "active" state and slide up the immediate next 	container
		}
		return false; //Prevent the browser jump to the link anchor
	});

});
<?php }?>
</script>
</head>
<body>
<div class="main">
  <div class="blok_header">
<?php 
if($page == "/"){
?>
  
    <div class="header">
      <div class="logo"> <a href="../"><img src="images/logo.png" border="0" alt="logo" class="one" /></a> </div>
      <div class="intro">
      <p>The biggest and the most grand tech fest is around the corner and you really dont want to miss this. So pull of your geeky apparels, and get ready to make your hands dirty with bleeding tech!</p>
      <p>See you at Chowgule College</p>
      </div>
      <div class="mascot">
      </div>
      <?php 
  }
  ?>
      <div class="top_text"><a href="#">Registrations are open till 11 January 2010</a></div>
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
  </div>
  <div class="clr"></div>
  <div class="wite_resize">
    <div class="menu">
      <ul>
        <li><a <?php if($page == "/") echo 'class="active"';?> href="../">Home</a></li>
		<li><a <?php if($page == "/register.php") echo 'class="active"';?> href="../register.php">Event Registration</a></li>
		<li><a <?php if($page == "/events.php") echo 'class="active"';?> href="../events.php">Event Details</a></li>
		<li><a <?php if($page == "/rules.php") echo 'class="active"';?> href="../rules.php">Rules</a></li>
		<li><a  <?php if($page == "/seminar.php") echo 'class="active"';?>href="../seminar.php">Seminar Registration</a></li>
		<li><a  <?php if($page == "/sponsors.php") echo 'class="active"';?>href="../sponsors.php">Sponsors</a></li>
		<li><a  <?php if($page == "/about.php") echo 'class="active"';?>href="../about.php">About Us</a></li>
	  </ul>
      <div class="clr"></div>
    </div>
      <div class="clr"></div>
    </div>
  </div>
    <div class="clr"></div>
  <div class="body_resize">