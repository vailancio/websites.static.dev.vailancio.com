<?php

function SendEmail ($FromName, $FromEmail, $ToName, $ToEmail, $subject, $message) 
{
         require_once('class.phpmailer.php');
        //include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
        
        $mail             = new PHPMailer();
        
        $body             = $message;
        $body             = eregi_replace("[\]",'',$body);
        
        $mail->IsSMTP(); // telling the class to use SMTP
        $mail->Host       = "mail.pptsalon.com"; // SMTP server
        $mail->SMTPDebug  = false;                     // enables SMTP debug information (for testing)
                                                   // 1 = errors and messages
                                                   // 2 = messages only
        $mail->SMTPAuth   = true;                  // enable SMTP authentication
        $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
        $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
        $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
        $mail->Username   = "bakra@pptsalon.com";  // GMAIL username
        $mail->Password   = "pptsalon";            // GMAIL password
        
        $mail->SetFrom($FromEmail, $FromName);
        
        $mail->AddReplyTo($FromEmail,$FromName);
        
        $mail->Subject    = $subject;
        
        $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
        
        $mail->MsgHTML($body);
        
        $mail->AddAddress($ToEmail, $ToName);
        $mail->Send();
}
  ?>