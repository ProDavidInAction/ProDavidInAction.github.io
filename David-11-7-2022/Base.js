

function login()
{
	var name = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	if(name == "BonzyBuddy" && password == "Calvo")
	{
		window.alert("Login Correct");
		window.location.href="./logedin.html";
		window.alert("This is your home page, you are free to explore");
	}
	else
	{
		window.alert("Login Incorrect, wrong user or password");
	}
}

function backMM()
{
	window.location.href="./index.html";
}

function NotLoggedInFault()
{
	window.alert("Log in or sign up before you can access this page");
}

