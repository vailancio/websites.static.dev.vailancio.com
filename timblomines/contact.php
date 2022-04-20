<?php include("header.php");?>
    <div class="featured-grey">
       <div class="grid_6"><a href="contact.php"><span id="contact">Contact Us</span></a></div>
	<!-- end .grid_6 -->
	   <div class="clear"></div>
      </div> <!--end .featured-->
      <div class="content">
      <div class="grid_12" id="text-container">
      <p>
      <!--form starts here-->
      <div id="email-form">
<form action="../contact/mailer.php" method="post" onSubmit="MM_validateForm('from','','RisEmail','subject','','R','verif_box','','R','message','','R');return document.MM_returnValue">
											<fieldset class="clearfix">
												<p>
													<label for="name" id="name_label">Name:</label> 
													<input type="text" id="name" class="textbox" value="Your full name please!" name="name" onBlur="if(this.value=='') this.value='Your full name please!';" onFocus="if(this.value=='Your full name please!') this.value='';" />
                                                    <br/>
                                                    <div class="error" for="name" id="name_error">You name please.</div>
												</p>
												<p>
													 <label for="email" id="email_label">Email:</label> 
                                                    <input type="text" id="email" class="textbox" value="So we can e-mail you!" name="from" onBlur="if(this.value=='') this.value='So we can e-mail you!';" onFocus="if(this.value=='So we can e-mail you!') this.value='';" />
                                                    <br/>
                                                    <div class="error" for="email" id="email_error">Your E-mail please.</div> 
												</p>
												<p>
													
                                                     <label for="phone" id="phone_label">Phone:</label> 

													<input type="text" class="textbox" name="phone" id="phone" value="Your phone number please!" onBlur="if(this.value=='') this.value='Your phone number please!';" onFocus="if(this.value=='Your phone number please!') this.value='';" />
                                                    <br/>
                                                    <div class="error" for="phone" id="phone_error">Your number please.</div>
												</p> 
                                                <p>
                                                <label id="verify"></label>
<input name="verif_box" class="textbox" type="text" id="verif_box" style="width:30px;" value="Sum" onBlur="if(this.value=='') this.value='Sum';" onFocus="if(this.value=='Sum') this.value='';" /> <em>Just to verify that you are a human.</em>
												<br/>
                                                <div class="error" for="verify" id="verify_error" >Wrong answer.</div>
                                                </p>
													<p><label>Message:</label>
													<textarea id="message1" name="message" rows="5" cols="5" value="Type your message here" onBlur="if(this.value=='') this.value='Type your message here';" onFocus="if(this.value=='Type your message here') this.value='';"></textarea>
                                                    <br/>
                                                    <div class="error" for="message" id="message1_error" >Your message please.</div>
												</p>
												<input type="submit" class="send-button" name="submit" value="Send" />
											</fieldset>
										</form>
                                      </div><p> <!--end #email-form-->
	</div><!--end #text-container-->
    <!--form ends here-->
<div style=" height:30px;"></div>
      </div>
     <?php include("footer.php");?>