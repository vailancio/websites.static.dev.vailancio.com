<?php $page ="trainingop" ?>
    <?php include("toppart.php"); ?>
	<div class="span-11">
		<div id="insidepg-content">
			<div class="top-section"><img src="img/trainer.png" /></div>
            <div class="middle-section">
                <div id="pg-content">
                    <div id="trainingop">
                        <p>Independent trainers and training institutions are invited to provide training and courses for CPFA Examination. If you are interested then please submit this form and we will get back to you shortly:</p>
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validatetopFormOnSubmit(this)" method="post" name="topregisterForm" id="topregisterForm">
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
                                <option value="" selected="selected">Select City</option> 
                            </select>
                            </td>
                          </tr>
                          <tr><td class="col1">Country:</td> 
                            <td class="col2"><select id="topcountry" name="topcountry"> 
                                <option value="" selected="selected">Select Country</option> 
                            </select>
                            </td>
                          </tr>
                          <tr><td class="col1">Phone:</td> <td class="col2"><input name="topmobile" id="topmobile" type="text"  /></td></tr>
                          <tr><td class="col1">Email:</td><td class="col2"> <input name="topemail" type="text" /></td></tr>
                          <tr><td class="col1">Website:</td><td class="col2"> <input name="topwebsite" type="text" /></td></tr>
                          <tr><td class="col1">Note:</td><td class="col2"> <textarea name="topnote" id="topnote" rows="5" cols="25"></textarea></td></tr>
                          <tr><td class="col1">&nbsp;</td><td class="col2"><input class="registersubmit" type="image" src="img/submit.png"/></td></tr>
                          </table>
                         </form>
                    </div>
                
                </div>
            
            </div>
			<div class="bottom-section"><img src="img/bottom-sec.png" /></div>
		</div>
	</div>
	<?php include("bottompart.php"); ?>