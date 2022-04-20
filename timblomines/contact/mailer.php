<?php
// remember to replace you@email.com with your own email address lower in this code.

// load the variables form address bar
$name = $_REQUEST["name"];
$phone = $_REQUEST["phone"];
$subject = $_REQUEST["subject"];
$message = $_REQUEST["message"];
$from = $_REQUEST["from"];
$verif_box = $_REQUEST["verif_box"];

// remove the backslashes that normally appears when entering " or '
$phone = stripslashes($phone);
$name = stripslashes($name); 
$message = stripslashes($message); 
$subject = stripslashes($subject); 
$from = stripslashes($from); 

	mail( "ironoremining@rediffmail.com", 'Website Contact Form:'.$subject, "Name: ".$name."\n\n"."Phone Number: ".$phone."\n\n"."IP: ".$_SERVER['REMOTE_ADDR']."\n\n".$message, "From: $from");
	//send to second acc
		mail( "vailancio248@gmail.com", 'Website Contact Form: timblomines.com: '.$subject, "Name: ".$name."\n\n"."Phone Number: ".$phone."\n\n"."IP: ".$_SERVER['REMOTE_ADDR']."\n\n".$message, "From: $from"); 
?>