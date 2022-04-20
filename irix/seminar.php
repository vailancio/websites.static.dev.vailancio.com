<?php 
include 'header.php';
$show_form = true;

if(isset($_POST['submit'])){
	$name = mysql_real_escape_string($_POST['name']);
	$address = mysql_real_escape_string($_POST['address']);
	$email = mysql_real_escape_string($_POST['email']);
	$phone = mysql_real_escape_string($_POST['phone']);
	$company = mysql_real_escape_string($_POST['company']);
	$profession = mysql_real_escape_string($_POST['profession']);
	$reason = mysql_real_escape_string($_POST['reason']);
	//validation
	$problem = "";
	if (! valid::hasValue(valid::getFormValue("name"))) {
	    $problem .= "<p>Your name is required</p>";
	}
	
    if (! valid::hasValue(valid::getFormValue("email"))) {
	    $problem .= "<p>Your email address is required</p>";
	}
	if (valid::isTooLong(valid::getFormValue("name"), 50)) {
	    $problem .= "<p>Your name is too long. This can`t be true!</p>";
	}
	
	if (! valid::isEmail(valid::getFormValue("email"))) {
	    $problem .= "<p>You must provide a valid email address</p>";
	}
	if (valid::isTooLong(valid::getFormValue("email"), 255)) {
	    $problem .= "<p>Your email address is too long</p>";
	}
	if (! valid::isUnsignedNumber(valid::getFormValue("phone"))) {
	    $problem .= "<p>You must provide a valid phone number</p>";
	}
	
	// If there were any problems then show them
	if (valid::hasValue($problem)) {
	    $validation = false;
	    $show_form = false;
	} else {
	    $validation = true;
	}
	
	if($validation == true)
	{
		//start form processs
	    
	    $result = mysql_query("INSERT INTO seminar_p (name, address, email, phone, company, profession, reason, date_time, ip) VALUES('".$name."','".$address."','".$email."','".$phone."','".$company."','".$profession."', '".$reason."', '".$datetime."', '".$ip."')");
	    if(mysql_affected_rows() == 1)
		{
			echo "<p>You have been successfully registered. Thank You.</p>";
			 $message = '
			<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
			"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml">
			<head></head>
			<body>
			<table>
				<tr><td>Name</td><td>' . $name . '</td></tr>
				<tr><td>Email</td><td>' . $email . '</td></tr>
				<tr><td>Phone</td><td>' . $phone . '</td></tr>
				<tr><td>Address</td><td>' . $address . '</td></tr>
				<tr><td>Company/School/College</td><td>' . $company. '</td></tr>
				<tr><td>Profession</td><td>' . $profession . '</td></tr>
				<tr><td>Reason</td><td>' . $reason. '</td></tr>
			</table>
			</body>
			</html>';
			sendmail("vailancio248@gmail.com", "From i-rix.in:Seminar Registration", $message, $email);
		}
		else 
		{
			$error .= "<p>Something went wrong. Please try again.<br /> If you are still not able to register online, send in your entry at info@i-rix.in</p>";
		}
		$show_form = false;
	}
}
?>
<div class="body">
      <div class="left">
        <h2>Seminar Registration</h2>
        <p>Seminar by Mr. Nauzad Kapadia from Quartz Systems, Mumbai for students and teachers on .Net Technologies on 15th January 2011.</p>
        <?php if($show_form == true){?>
        <form action="seminar.php" method="post" id="contactform">
          <ol>
            <li>
              <label for="name">Your Name</label>
              <input id="name" name="name" class="text" />
            </li>
            <li>
              <label for="email">Your email</label>
              <input id="email" name="email" class="text" />
            </li>
            <li>
              <label for="address">Your Address</label>
              <input id="address" name="address" class="text" />
            </li>
            <li>
              <label for="profession">Your Profession</label>
              <input id="profession" name="profession" class="text" />
            </li>
            <li>
              <label for="phone">Your Phone</label>
              <input id="phone" name="phone" class="text" />
            </li>
            <li>
              <label for="company">Your School/College/Company</label>
              <input id="company" name="company" class="text" />
            </li>
            <li>
              <label for="reason">Your reason for attending?</label>
              <textarea id="reason" name="reason" rows="6" cols="50"></textarea>
            </li>
            <li class="buttons">
              <input type="submit" value="Submit" name="submit" id="imageField" src="images/send.gif" class="send" />
              <div class="clr"></div>
            </li>
          </ol>
        </form>
        <?php }
        else
        {
        	if (!(empty($problem))) echo $problem;
			if (!(empty($error))) echo $error;
			if (!(empty($success))) echo $success;
        	go_back();
         }
        	
        ?>
      </div>
      <div class="right">
        <h2>Topics covered are as follows:</h2>
        <p>Silverlight and WPF<br/>09:30am - 12:30 pm </p>
        <p>Dotnet Security - Building secure applications02:00 pm - 04:00 pm</p>
        <div class="bg"></div>
        <h2>Fees</h2>
        <p>Registration fee is Rs. 100/- per participant(inclusive of lunch).</p><p>Registration closes on 11th January 2011 or till
        seats are full whichever is earlier.</p>
        <p>Participation can also be confirmed by email to info@i-rix.in, fees can be paid on the day of the seminar at the
        venue.</p>      </div>
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
  </div>
  <?php 
include 'footer.php';?>