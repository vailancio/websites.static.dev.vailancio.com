<div class="span-6 last">
		<div id="r-section">
			<div id="5reason">
				<span class="hd"><img src="img/5reason.png" /></span>
				<ul id="reason">
					<li><p class="r1"> Gain holistic knowledge of financial planning</p></li>
					<li><p class="r2">Earn more fee-based income from value-added service</p></li>
					<li><p class="r3"> Certification from a neutral and reputed body</p></li>
					<li><p class="r4"> Supported by Leading Companies and Institutions</p></li>
					<li><p class="r5"> Investor Education will create demand for certified advisors</p></li>
				</ul>
			</div>
			<div id="subsribe">
                <!-- subscribe form -->
                <?
                /*
                $subsemail = $_REQUEST['subsemail'];

                if ( isset($_REQUEST['subsribesubmit']) || isset($_REQUEST['subsribesubmit_x']) )
                {
                    //insert in db
                    mysql_connect($db_host,$db_user,$db_pass);
                    mysql_select_db($db_database);
                    $qry = "INSERT INTO subscribe(Email) VALUES('$subsemail')";
                    mysql_query($qry) or die(mysql_error());
                    //send mail
                	$message=" hi,<br/><br/>Email: $subsemail  want to subscribe with cpfa " ;
                    $subject = "New Subscribe from CPFA";
                        
                    SendEmail($subject, $message);
                	
            	   $successmsg=' "Your request has been sent. Thanks for subscribing. We will get back to you shortly."';
            	   echo "<script type='text/javascript'>alert('$successmsg');</script>";
                }
                */
                ?> 
				<form action="http://madmimi.com/signups/subscribe/17515" onsubmit="return validate_subscribe()" method="post" name="subscribeForm" id="subscribeForm">
				<img src="img/subscribe.png" /><input class="intemail" name="signup[email]" id="signup_email" value="e-mail address" /><br/>
				<img class="newsimg" src="img/newsletter.png" /><input class="btngo" name="commit" type="image" src="img/go.gif"/>
				</form>
			</div>
			<div id="social">
				<img class="followus" src="img/followus.gif"/><a href="http://www.linkedin.com/groups?about=&gid=3308897&trk=anet_ug_grppro" target="_blank"><img src="img/in.jpg"/></a><a href="http://www.facebook.com/investorfirst" target="_blank"><img src="img/f.jpg"/></a><a href="http://twitter.com/investor_first" target="_blank"><img src="img/t.jpg" /></a>
			</div>
			<div id="curriculum">
			<p>Financial Advisor's<br/>
			   Workbook for<br/>
				Holistic Planning</p>
			<div class="viewcurriculum">
				<a href="curricullum.php"><img src="img/curri.png"/></a>
			</div>
			</div>
		</div>
	</div>
<div id="btm-links" class="span-24">
<img src="img/nism.png"/>

<p>Copyright (c) 2011 National Institute of Securities Markets. All Rights Reserved. Website Created by <a href="http://www.pptsalon.com" target="_blank">PPT Salon</a></p>
</div>
</div>

</div>

<!-- registration form -->
<?

$name = $_REQUEST['name'];
$city = $_REQUEST['city'];
$remail = $_REQUEST['remail'];
$phone = $_REQUEST['phone'];
$message = $_REQUEST['message'];


if ( isset($_REQUEST['registersubmit']) || isset($_REQUEST['registersubmit_x']) )
{
    //insert in db
    /*mysql_connect($db_host,$db_user,$db_pass);
    mysql_select_db($db_database);
    $qry = "INSERT INTO register(Name, City, Email, Phone, Message) VALUES('$name','$city','$remail','$phone','$message')";
    mysql_query($qry) or die(mysql_error()); */
    //send mail
	$message="
    hi,<br/><br/>
    Name: $name <br/>
    City: $city <br/> 
    Email: $remail <br/>
    Phone: $phone <br/>
    Message: $message <br/>" ;

        $subject = "New Request from CPFA";
        SendEmail($subject, $message);
	   $successmsg='"Your request has been sent. Thanks for writing to us. We will get back to you shortly."';
	   echo "<script type='text/javascript'>alert('$successmsg');</script>";
}

?>
    <div id="register-form">
      <span class="header">Registration:</span><span class="close"></span>
      <img src="img/register-sep.png" />
      <div class="content">
          <p>You can registor for CPFA Examination on the website of our <br/>Test Administrators:</p>
        <p><a href="http://www.nseindia.com/content/ncfm/ncfm_nism_modules.htm" target="_blank" onmouseover="document.formfornse.src='img/fornse-blue.png'" onmouseout="document.formfornse.src='img/fornse.png'"><img name="formfornse" src="img/fornse.png" /></a>
        <a href="https://nism.mcx-sx.com/index.htm" target="_blank" onmouseover="document.formformcx.src='img/formcx-blue.png'" onmouseout="document.formformcx.src='img/formcx.png'"><img name="formformcx" src="img/formcx.png" /></a>
        </p>
        <p>If you have any queries or are facing any difficulties in registering with the Test Administrators website, please fill this form and we will get back to you:</p>
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validate_register()" method="post" name="registerForm" id="registerForm">
          <table cellspacing="0" cellpadding="0">
          <tr>
          <td class="col1">Name:</td> <td class="col12"><input name="name" type="text" value="" /></td>
          </tr>
          <tr><td class="col1">City:</td> 
            <td class="col2"><select id="city" name="city"> 
                <option value="0" selected="selected">Select City</option>
                <option value="1" >Panaji</option>
                <option value="2" >Mumbai</option>
                <option value="3" >Bangalore</option>
                <option value="4" >Allahabad</option>
                <option value="5" >Aurangabad</option>
                <option value="6" >Agra</option>
                <option value="7" >Ahmedabad</option>
                <option value="8" >Amritsar</option>
                <option value="9" >Bhopal</option> 
                <option value="10" >Chandigarh</option>
                <option value="11" >Chennai</option>
                <option value="12" >Delhi</option>
                <option value="13" >Faridabad</option>
                <option value="14" >Ghaziabad</option>
                <option value="15" >Howrah</option>
                <option value="16" >Hyderabad</option>
                <option value="17" >Indore</option>
                <option value="18" >Jabalpur</option>
                <option value="19" >Jaipur</option>
                <option value="20" >Kanpur</option>
                <option value="21" >Kolkata</option>
                <option value="22" >Lucknow</option>
                <option value="23" >Ludhiana</option>
                <option value="24" >Nagpur</option>
                <option value="25" >Patna</option>
                <option value="26" >Pune</option>
                <option value="27" >Rajkot</option>
                <option value="28" >Ranchi</option>
                <option value="29" >Surat</option>
                <option value="30" >Thane</option>
                <option value="31" >Vadodara</option>
                <option value="32" >Varanasi</option>
                <option value="33" >Visakhapatnam</option>
                <option value="34" >Srinagar</option>
                <option value="35" >Other City</option>
                <option value="36" >Gurgaon</option>
                <option value="37" >Noida</option>
            </select>
            </td>
          </tr>
          <tr><td class="col1">Email:</td><td class="col2"> <input name="remail" type="text" /></td></tr>
          <tr><td class="col1">Phone:</td> <td class="col2"><input name="phone" id="phone" onkeypress="return numbersonly(event)" type="text"  /></td></tr>
          <tr><td class="col1">Message:</td><td class="col2"> <textarea name="message" id="message" rows="5" cols="25"></textarea></td></tr>
          <tr><td class="col1">&nbsp;</td><td class="col2"><input class="registersubmit" name="registersubmit" type="image" src="img/submit.png"/></td></tr>
          </table>
         </form>
     </div>
    </div>
    <script type="text/javascript">
    jQuery(function ($) {
        jQuery('a.basic').click(function (e) {
            jQuery('#register-form').modal();

            return false;
        });
        
        jQuery('#subscribeForm input.intemail').focus(function () {
            jQuery(this).val(' ');
        });
    });
</script>
<script type="text/javascript">
function numbersonly(e){
var unicode=e.charCode? e.charCode : e.keyCode
if (unicode!=8){ //if the key isn't the backspace key (which we should allow)
if (unicode<48||unicode>57) //if not a number
return false //disable key press
}
}

function validate_register()
{
    if(document.registerForm.name.value=='')
    {
        alert("Please enter your Name.");
        document.registerForm.name.focus();
        return false;
    }
	
	if(document.registerForm.city.selectedIndex == 0)
    {
        alert("Please select city.");
        document.registerForm.city.focus();
        return false;
    }
	
	var reEmail = /^.+\@.+\..+$/            
    if(document.registerForm.remail.value=='')
    {
        alert("Please enter your email Address.");
        document.registerForm.remail.focus();
        return false;
    }
    if(!reEmail.test(document.registerForm.remail.value))
    {
        alert("Please enter a valid email Address.");
        document.registerForm.remail.focus();
        return false;
    } 
	
	if(document.registerForm.phone.value=='')
    {
        alert("Please enter your phone no.");
        document.registerForm.phone.focus();
        return false;
    }
	
	if(document.registerForm.message.value=='')
    {
        alert("Please enter message.");
        document.registerForm.message.focus();
        return false;
    }
}



function validate_subscribe()
{
	var reEmail = /^.+\@.+\..+$/            
    if(document.subscribeForm.signup_email.value=='')
    {
        alert("Please enter your email Address.");
        document.subscribeForm.signup_email.focus();
        return false;
    }
    if(!reEmail.test(document.subscribeForm.signup_email.value))
    {
        alert("Please enter a valid email Address.");
        document.subscribeForm.signup_email.focus();
        return false;
    } 
}
</script>

</body>
</html>