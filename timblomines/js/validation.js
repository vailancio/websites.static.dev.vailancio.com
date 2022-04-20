$(function() {
    $('.error').hide();
    $(".send-button").click(function() {
      // validate and process form here
      
      $('.error').hide();
  	  var name = $("input#name").val();
  		if (name == "Your full name please!") {
        $("div#name_error").show();
        $("input#name").focus();
        return false;
      }
  		var email = $("input#email").val();
  		if (email == "So we can e-mail you!") {
        $("div#email_error").show();
        $("input#email").focus();
        return false;
      }
  		var phone = $("input#phone").val();
  		if (phone == "Your phone number please!") {
        $("div#phone_error").show();
        $("input#phone").focus();
        return false;
      }
	   var verifyn = $("input#verif_box").val();
  		if (verifyn != "7") {
        $("div#verify_error").show();
        $("input#verif_box").focus();
        return false;
      }
	  var message = $("textarea#message1").val();
  		if (message == "Type your message here" || message == "") {
        $("div#message1_error").show();
        $("input#message1").focus();
        return false;
	  }
      //ajax part
	    var dataString = 'name='+ name + '&from=' + email + '&phone=' + phone + '&message=' + message;
  //alert (dataString);return false;
 $.ajax({
    type: "POST",
    url: "../contact/mailer.php",
    data: dataString,
    success: function() {
      $('#email-form').html("<div id='message'></div>");
      $('#message').html("<h2>E-mail Sent!</h2>")
      .append("<p>We will be in touch soon.</p>")
      .hide()
      .fadeIn(1500, function() {
        $('#message').append("");
      });
    }
  });
  return false;
  
    });
  });