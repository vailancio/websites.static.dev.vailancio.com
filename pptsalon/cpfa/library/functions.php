<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'jawahar';
$db_database = 'cpfa';

function SendEmail ($subject, $message) 
{
        $FromName= 'no-reply';
        $FromEmail = 'no-reply@nism.ac.in';
        $ToName ="abhi";
        $ToEmail = "abhi@pptsalon.com";
        
         require_once('class.phpmailer.php');
        //include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
        
        $mail             = new PHPMailer();
        
        $body             = $message;
        $body             = eregi_replace("[\]",'',$body);
        
        $mail->IsSMTP(); // telling the class to use SMTP
        $mail->Host       = "mail.nism.ac.in"; // SMTP server
        $mail->SMTPDebug  = false;                     // enables SMTP debug information (for testing)
                                                   // 1 = errors and messages
                                                   // 2 = messages only
        $mail->SMTPAuth   = true;                  // enable SMTP authentication
        $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
        $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
        $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
        $mail->Username   = "no-reply@nism.ac.in";  // GMAIL username
        $mail->Password   = "NismWeb7476";            // GMAIL password
        
        $mail->SetFrom($FromEmail, $FromName);
        
        $mail->AddReplyTo($FromEmail,$FromName);
        
        $mail->Subject    = $subject;
        
        $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
        
        $mail->MsgHTML($body);
        
        $mail->AddAddress($ToEmail, $ToName);
        $mail->Send();
}
  ?>