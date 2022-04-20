<?php
function go_back(){
	echo '<p><a class="button" href="javascript:history.back()">Go back</a></p>';
}
function sendmail($to, $subject, $message, $from) {
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
	$headers .= 'From: ' . $from . "\r\n";
	
	$result = mail($to,$subject,$message,$headers);
	if ($result) return 1;
	else return 0;
}

function page_title(){
$page = $_SERVER[REQUEST_URI];
$site_title = "i-rix";
	switch ($page) {
	    case "/":
        	echo $site_title." | invoke(), innovate() & implement()";
        	break;
    	case "/index.php":
        	echo $site_title." | invoke(), innovate() & implement()";
        	break;
    	case "/seminar.php":
        	echo $site_title." | Seminar Registration";
        	break;
    	case "/events.php":
        	echo $site_title." | Event Schedule and Details";
        	break;
        case "/rules.php":
        	echo $site_title." | Rules and Guidelines";
        case "/register.php":
        	echo $site_title." | Rules and Guidelines";	
        	break;
	}
}
?>