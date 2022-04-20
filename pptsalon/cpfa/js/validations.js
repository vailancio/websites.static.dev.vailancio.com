<script language="javascript">


function numbersonly(e){
var unicode=e.charCode? e.charCode : e.keyCode
if (unicode!=8){ //if the key isn't the backspace key (which we should allow)
if (unicode<48||unicode>57) //if not a number
return false //disable key press
}
}

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
	
	if(document.topForm.city.value=='')
    {
        alert("Please select city.");
        document.topForm.city.focus();
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