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
				<form>
				<img src="img/subscribe.png" /><input class="intemail" name="email" id="email" value="e-mail address" /><br/>
				<img class="newsimg" src="img/newsletter.png" /><input class="btngo" type="image" src="img/go.gif"/>
				</form>
			</div>
			<div id="social">
				<img class="followus" src="img/followus.gif"/><a href="#"><img src="img/in.jpg"/></a><a href="#"><img src="img/f.jpg"/></a><a href="#"><img src="img/t.jpg" /></a>
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
    <div id="register-form">
      <span class="header">Registration:</span><span class="close"></span>
      <img src="img/register-sep.png" />
      <div class="content">
          <p>You can registor for CPFA Examination on the website of our <br/>Test Administrators:</p>
        <p><a href="#" onmouseover="document.formfornse.src='img/fornse-blue.png'" onmouseout="document.formfornse.src='img/fornse.png'"><img name="formfornse" src="img/fornse.png" /></a>
        <a href="#" onmouseover="document.formformcx.src='img/formcx-blue.png'" onmouseout="document.formformcx.src='img/formcx.png'"><img name="formformcx" src="img/formcx.png" /></a>
        </p>
        <p>If you have any queries or are facing any difficulties in registering with the Test Administrators website, please fill this form and we will get back to you:</p>
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validateFormOnSubmit(this)" method="post" name="registerForm" id="registerForm">
          <table cellspacing="0" cellpadding="0">
          <tr>
          <td class="col1">Name:</td> <td class="col12"><input name="name" type="text" value="" /></td>
          </tr>
          <tr><td class="col1">City:</td> 
            <td class="col2"><select id="city" name="city"> 
                <option value="" selected="selected">Select City</option> 
            </select>
            </td>
          </tr>
          <tr><td class="col1">Email:</td><td class="col2"> <input name="email" type="text" /></td></tr>
          <tr><td class="col1">Phone:</td> <td class="col2"><input name="mobile" id="mobile" type="text"  /></td></tr>
          <tr><td class="col1">Message:</td><td class="col2"> <textarea name="requirement" id="requirement" rows="5" cols="25"></textarea></td></tr>
          <tr><td class="col1">&nbsp;</td><td class="col2"><input class="registersubmit" type="image" src="img/submit.png"/></td></tr>
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
    });
</script>
</body>
</html>