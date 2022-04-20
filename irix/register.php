<?php 
include 'header.php';
$show_form = true;

if(isset($_POST['submit'])){
	$name = mysql_real_escape_string($_POST['name']);
	$gender = mysql_real_escape_string($_POST['gender']);
	$address = mysql_real_escape_string($_POST['address']);
	$email = mysql_real_escape_string($_POST['email']);
	$phone = mysql_real_escape_string($_POST['phone']);
	$college = mysql_real_escape_string($_POST['college']);
	$course = mysql_real_escape_string($_POST['course']);
	$query = mysql_real_escape_string($_POST['queries']);
	$events = $_POST['events'];
	//print_r($events);
     
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
	if (! valid::hasValue(valid::getFormValue("events"))){
		$problem .= "<p>In which event are you participating?";
	}
	if (! valid::hasValue($gender)){
		$problem .= "<p>Please input your gender.</p>";
	}
	// If there were any problems then show them
	if (valid::hasValue($problem)) {
	    $validation = false;
	    $show_form = false;
	} else {
	    $validation = true;
	}
	if ($validation == true)
	{
		//start form processs
		//insert events into tables
		//$string1 = implode(", ", $events);
	    //echo $string;
	    
	    $result = mysql_query("INSERT INTO participants (name, gender, address, email, phone, college, course, date_time, ip) VALUES('".$name."','".$gender."','".$address."','".$email."','".$phone."','".$college."','".$course."', '".$datetime."', '".$ip."')");
	    if(mysql_affected_rows() == 1)
		{
			//get recently posted participants id
			$result = mysql_query("SELECT * FROM participants ORDER BY id DESC LIMIT 1");
			$row = mysql_fetch_array($result);
			//print_r($row);
			$parti_id = $row[id];
			// insert first array
			$res = mysql_query("INSERT INTO events (parti_id, ".$events[0].") VALUES ('".$parti_id."', 1)");
		    for($i=1;$i<count($events);$i++)
			{
				$res = mysql_query("UPDATE events SET ".$events[$i]." = 1 WHERE parti_id = '".$parti_id."'");
			}
			//end of for loop
			if(!empty($query))
			{
				$result = mysql_query("INSERT INTO queries (parti_id, name, message) VALUES('".$parti_id."', '".$name."', '".$query."')")
				or die(mysql_error());
			}
			$success = "<p>You have successfully registered.</p>";
			$show_form = false;
		}
		else 
		{
			$error = "<p>Something went wrong. Please try again.<br /> If you are still not able to register online, send in your entry at info@i-rix.in</p>";
		}
	}
}
?>
  <div class="clr"></div>
  <div class="body_resize">
    <div class="body">
      <div class="port">
      <?php if($show_form == true){?>
        <h2>Register for the event</h2>
		<form action="register.php" method="post">
		<p id="form-reg"><label>Full Name</label><input name="name"></input></p>
		<p class="radio">GENDER<label>Male<input checked="checked" type="radio" value="male" name="gender"></label><label>Female<input type="radio" value="female" name="gender"></label></p>
		<p><label>Address</label><input name="address"></p>
		<p><label>Email address</label><input name="email"></p>
		<p><label>Phone Number</label><input name="phone"></p>
	 </div>	
      <div class="port last">
        <h2 style="margin-top:13px;"></h2>
        <p><label>College</label><select name="college">
							<option value="1">Damodar College of Commerce & Economics - Margao</option>
							<option value="2">Rosary College of Commerce and Arts - Navelim</option>
							<option value="3">St. Xavier's College of Arts, Science and Commerce - Mapusa</option>
							<option value="4">Don Bosco College - Panjim</option>
							<option value="5">Dnyanprassarak Mandal's College - Assagao</option>
							<option value="6">Fr. Agnel College of Arts and Commerce - Pillar</option>
							<option value="7">M.E.S. College - Vasco</option>
							<option value="8">Govt College Of Arts Science And Commerce - Quepem</option>
							<option value="9">Dhempe College of Arts & Science - Miramar</option>
							<option value="10">Government College of Arts, Science and Commerce - Khandola, Marcel</option>
							<option value="11">Dr Dada Vaidya College of Education - Ponda</option>
							<option value="12">Shri Gopal Govind Poi Raiturkar College - </option>
							</select></p>
	<p><label>Course</label><select name="course"><option value="1">Bsc</option>
													<option value="2">BCA</option>
													<option value="3">Other</option>
													</select></p>						
	<p><label>Queries (if any)</label><textarea name="queries"></textarea></p>	
      </div>
      <!-- end of columns -->
     <div class="center">
      <p><div class="checkbox">
		<h2>Select events in which you will participate.</h2>
		<div class="col1">
		<label><input type="checkbox" name="events[]" value="programming">Programming</label>
		<label><input type="checkbox" name="events[]" value="debugging">Debugging</label>
		<label><input type="checkbox" name="events[]" value="presentation">Paper Presentation</label>
		</div><div class="col2">
		<label><input type="checkbox" name="events[]" value="film">Film Making</label>
		<label><input type="checkbox" name="events[]" value="blogging">Blogging</label>
		<label><input type="checkbox" name="events[]" value="design">Desktop Design</label>
		</div><div class="col3">
		<label><input type="checkbox" name="events[]" value="quiz">Quiz</label>
		<label><input type="checkbox" name="events[]" value="jagron">Tech Jagron</label>
		<label><input type="checkbox" name="events[]" value="web-designing">Web Designing</label>
		</div><div class="col4">
		<label><input type="checkbox" name="events[]" value="ui"> UI Designing</label>
		<label><input type="checkbox" name="events[]" value="game">Counter Strike</label>
		</div>
	</div></p>		
	<p><label><input type="submit" class="submit" name="submit" value="Register"></label></p>		
	</form>
	<?php }//end of if
	else
	{
		if (!(empty($problem))) echo $problem;
		if (!(empty($error))) echo $error;
		if (!(empty($success))) echo $success;
		go_back();
	}
	?>
	</div><!-- class center ends -->
<!-- form end -->
<?php 
include 'footer.php';
?>
