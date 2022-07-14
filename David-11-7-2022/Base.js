function login()
{
	var name = document.getElementById("username").value;
	var password = document.getElementById("password").value;

  var name_array = ["BonzyBuddy", "ProDavid"];
  var password_array = ["Calvo", "123"];


	if(name_array.indexOf(name) == password_array.indexOf(password))
	{
		window.location.href="./logedin.html";
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

function getTime()
{
	
	getTime();
}

