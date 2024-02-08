//get data
const nameInput = document.querySelector("#name");
const email = document.querySelector("#email");
const subject = document.querySelector("#subject");
const message = document.querySelector("#message");
const success = document.querySelector("#success");
const errorNodes = document.querySelectorAll(".error");

//validate data
function validateForm()
{
	clearMessages();
	let errorFlag = false;
	
	if(nameInput.value.length < 1)
	{
		errorNodes[0].innerText = "Name cannot be blank";
		errorFlag = true;
	}
	
	if(!emailIsValid(email.value))
	{
		errorNodes[1].innerText = "Invalid email address";
		errorFlag = true;
	}
	
	if(subject.value.length < 1)
	{
		errorNodes[2].innerText = "Please enter the subject";
		errorFlag = true;
	}
	
	if(message.value.length < 1)
	{
		errorNodes[3].innerText = "Please enter message";
		errorFlag = true;
	}
	
	if(!errorFlag)
	{
		success.innerText = "Success!";
	}
}

//clear error/success messages
function clearMessages()
{
	for(let i = 0; i < errorNodes.length; i++)
	{
		errorNodes[i].innerText = "";
	}
	success.innerText = "";
	
}

//check if email is valid
function emailIsValid(email)
{
	let pattern = /\S+@\S+\.\S+/;
	return pattern.test(email);
}
