<?php $page ="trainingop" ?>
    <?php include("toppart.php"); ?>
	<div class="span-11">
		<div id="insidepg-content">
			<div class="top-section"><img src="img/trainer.png" /></div>
            <div class="middle-section">
                <div id="pg-content">
                    <div id="trainingop">
                        <p>Independent trainers and training institutions are invited to provide training and courses for CPFA Examination. If you are interested then please submit this form and we will get back to you shortly:</p>
                        
                        <!-- Training form -->
                        <?
                        
                        $topname = $_REQUEST['topname'];
                        $toporganization = $_REQUEST['toporganization'];
                        $topdesignation = $_REQUEST['topdesignation'];
                        $topcity = $_REQUEST['topcity'];
                        $topphone = $_REQUEST['topphone'];
                        $topemail = $_REQUEST['topemail'];
                        $topwebsite = $_REQUEST['topwebsite'];
                        $topnote = $_REQUEST['topnote'];
                        
                        
                        if ( isset($_REQUEST['trainingopsubmit']) || isset($_REQUEST['trainingopsubmit_x']) )
                        {
                            //insert in db
                            mysql_connect($db_host,$db_user,$db_pass);
                            mysql_select_db($db_database);
                            $qry = "INSERT INTO trainingop(Name, Organization, Designation, City, Phone, Email, Website, Note) VALUES('$topname','$toporganization','$topdesignation','$topcity','$topphone','$topemail','$topwebsite','$topnote')";
                            mysql_query($qry) or die(mysql_error());
                            //send mail
                        	$message="
                            hi,<br/><br/>
                            Name: $topname <br/>
                            Organization: $toporganization<br/>
                            Designation : $topdesignation <br/>
                            City: $topcity <br/>
                            Phone: $topphone <br/> 
                            Email: $topemail <br/>
                            Website: $topwebsite <br/>
                            Note: $topnote <br/>" ;
                        
                                $subject = "New Tranining opportunities from CPFA";
                                SendEmail($subject, $message);
                        	   $successmsg=' "Your request has been sent. Thanks for writing to us. We will get back to you shortly."';
                        	   echo "<script type='text/javascript'>alert('$successmsg');</script>";
                        }
                        
                        ?>
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validate_trainingop()" method="post" name="topForm" id="topForm">
                          <table cellspacing="0" cellpadding="0">
                          <tr>
                          <td class="col1">Name:</td> <td class="col12"><input name="topname" type="text" value="" /></td>
                          </tr>
                          <tr>
                          <td class="col1">Organization:</td> <td class="col12"><input name="toporganization" type="text" value="" /></td>
                          </tr>
                          <tr>
                          <td class="col1">Designation:</td> <td class="col12"><input name="topdesignation" type="text" value="" /></td>
                          </tr>
                          <tr><td class="col1">City:</td> 
                            <td class="col2"><select id="topcity" name="topcity"> 
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
                          <tr><td class="col1">Phone:</td> <td class="col2"><input name="topphone" onkeypress="return numbersonly(event)" id="topphone" type="text"  /></td></tr>
                          <tr><td class="col1">Email:</td><td class="col2"> <input name="topemail" type="text" /></td></tr>
                          <tr><td class="col1">Website:</td><td class="col2"> <input name="topwebsite" type="text" /></td></tr>
                          <tr><td class="col1">Note:</td><td class="col2"> <textarea name="topnote" id="topnote" rows="5" cols="25"></textarea></td></tr>
                          <tr><td class="col1">&nbsp;</td><td class="col2"><input class="registersubmit" name="trainingopsubmit" type="image" src="img/submit.png"/></td></tr>
                          </table>
                         </form>
                    </div>
                
                </div>
            
            </div>
			<div class="bottom-section"><img src="img/bottom-sec.png" /></div>
		</div>
	</div>
    <script type="text/javascript">
            function validate_trainingop()
            {
                if(document.topForm.topname.value=='')
                {
                    alert("Please enter your Name.");
                    document.topForm.topname.focus();
                    return false;
                }
            	
            	if(document.topForm.toporganization.value=='')
                {
                    alert("Please enter Organization.");
                    document.topForm.toporganization.focus();
                    return false;
                }
            	
            	if(document.topForm.topdesignation.value=='')
                {
                    alert("Please enter designation.");
                    document.topForm.topdesignation.focus();
                    return false;
                }
            	
            	if(document.topForm.topcity.selectedIndex == 0)
                {
                    alert("Please select city.");
                    document.topForm.topcity.focus();
                    return false;
                }
            	
            	if(document.topForm.topphone.value=='')
                {
                    alert("Please enter your phone no.");
                    document.topForm.topphone.focus();
                    return false;
                }
            	
            	var reEmail = /^.+\@.+\..+$/            
                if(document.topForm.topemail.value=='')
                {
                    alert("Please enter your email Address.");
                    document.topForm.topemail.focus();
                    return false;
                }
                if(!reEmail.test(document.topForm.topemail.value))
                {
                    alert("Please enter a valid email Address.");
                    document.topForm.topemail.focus();
                    return false;
                } 
            	
            	if(document.topForm.topwebsite.value=='')
                {
                    alert("Please enter website.");
                    document.topForm.topwebsite.focus();
                    return false;
                }
            	
            	if(document.topForm.topnote.value=='')
                {
                    alert("Please enter note.");
                    document.topForm.topnote.focus();
                    return false;
                }
            }
    </script>
	<?php include("bottompart.php"); ?>