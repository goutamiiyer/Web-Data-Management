function validateFname()
{
	var fname = document.getElementById("firstName").value;
	var res = fname.toUpperCase();

	if(fname.length == 0)
	{
		producePrompt("First Name is required", "firstNamePrompt", "red");
		return false;
	}
	if(!fname.match(/^[A-Za-z]*$/))
	{
		producePrompt("Only letters allowed for first name", "firstNamePrompt", "red");
		return false;
	}

	producePrompt("Hello " + fname, "firstNamePrompt", "green");
	return true;
}
function validateLname()
{
	var lname = document.getElementById("lastName").value;

	if(lname.length == 0)
	{
		producePrompt(" Last Name is required", "lastNamePrompt", "red");
		return false;
	}
	if(!lname.match(/^[A-Za-z]*$/))
	{
		producePrompt(" Only letters allowed for last name", "lastNamePrompt", "red");
		return false;
	}

	producePrompt(lname, "lastNamePrompt", "green");
	return true;
}

function validateEmail()
{
	var email = document.getElementById("emailId").value;
	if(email.length == 0)
	{
		producePrompt("Email is required", "emailIdPrompt", "red");
		return false;
	}
	if(!email.match(/^(.+)@([^\.].*)\.([a-z]{2,})$/))
	{
		producePrompt("Email should be like sam.robb@example.com", "emailIdPrompt", "red");
		return false;
	}
	producePrompt("Email validated","emailIdPrompt", "green");
	return true;
}
function validatePwd()
{
	var pass = document.getElementById("pass").value;
	if(pass.length == 0)
	{
		producePrompt("Password is required", "passPrompt", "red");
		return false;
	}
	if(!pass.match(/^[a-zA-Z0-9]{8,}$/))
	{
		producePrompt("at least 8 characters. No Special characters", "passPrompt", "red");
		return false;
	}
	producePrompt(" Password validated","passPrompt", "green");
	return true;
}

function validateTopic()
{
	var topic = document.getElementById("topic").value;
	var requiredTopic = 30;
	var leftTopic = requiredTopic - topic.length;
	if(leftTopic > 0)
	{
		producePrompt(leftTopic + " more characters required", "topicPrompt", "red");
		return false;
	}
	producePrompt("Topic validated", "topicPrompt", "green");
	return true;
}
function validateMessage()
{
	var msg = document.getElementById("message").value;
	var requiredMessage = 50;
	var leftMessage = requiredMessage - msg.length;
	if(leftMessage > 0)
	{
		producePrompt(leftMessage + " more characters required", "messagePrompt", "red");
		return false;
	}
	producePrompt("Message validated", "messagePrompt", "green");
	return true;
}

function validateCity()
{
	var city = document.getElementById("city").value;

	if(city.length == 0)
	{
		producePrompt(" City is required", "cityPrompt", "red");
		return false;
	}
	if(!city.match(/^.+$/))
	{
		producePrompt(" Only letters allowed for City", "cityPrompt", "red");
		return false;
	}

	producePrompt("City validated", "cityPrompt", "green");
	return true;
}

function validateState()
{
	var state = document.getElementById("state").value;
	var options = document.getElementById("statedatalist").options;
	var result = false;

	if(state.length == 0)
	{
		producePrompt(" State is required", "statePrompt", "red");
		return false;
	}

	for (var i = 0; i < options.length; i++) 
	{
        if(state == options[i].value) {
        result = true;
      }
    }

	producePrompt("State validated", "statePrompt", "green");
	return true;
	
}

function validateZip()
{
	var zip = document.getElementById("zip").value;

	if(zip.length == 0)
	{
		producePrompt(" Postal Code is required", "zipPrompt", "red");
		return false;
	}
	if(!zip.match(/^\d{5}$/))
	{
		producePrompt(" Only numbers allowed for Postal Code", "zipPrompt", "red");
		return false;
	}

	producePrompt("Postal Code validated", "zipPrompt", "green");
	return true;
}

function validatePhone()
{
	var phone = document.getElementById("phoneNumber").value;
	if(phone.length == 0)
	{
		producePrompt("Phone Number is required", "phoneNumberPrompt", "red");
		return false;
	}
	if(!phone.match(/^(\(?\s*\d{3}\s*[\)–\.]?\s*)?[2-9]\d{2}\s*[–\.]\s*\d{4}$/))
	{
		producePrompt("Phone Number should be like (123)456-7890", "phoneNumberPrompt", "red");
		return false;
	}
	producePrompt("Phone Number validated","phoneNumberPrompt", "green");
	return true;
}

function producePrompt(message, promptLocation, color)
{
	document.getElementById(promptLocation).innerHTML = message;
	document.getElementById(promptLocation).style.color = color;
}


function validateSubmit() 
{
	document.getElementById("myForm").submit();
}


/*Js for Modal*/
var modal = document.getElementById('myModal');

var btn = document.getElementById("myBtn");
var btn2 = document.getElementById("myBtn2");
var btn3 = document.getElementById("myBtn3");

// var span = document.getElementsByClassName("close")[0];
var cerrarbutton = document.getElementsByClassName("cerrarbutton")[0];

btn.onclick = function() {
  modal.style.display = "block";
}
btn2.onclick = function() {
  modal.style.display = "block";
}
btn3.onclick = function() {
  modal.style.display = "block";
}

// span.onclick = function() {
//   modal.style.display = "none";
// }
cerrarbutton.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}



