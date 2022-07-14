function login()
{
	var name = document.getElementById("username").value;
	var password = document.getElementById("password").value;

  let name = ["BonzyBuddy", "ProDavid"];
  let password = ["Calvo", "123"];


	if(name == "BonzyBuddy" && password == "Calvo")
	{
		window.location.href="./logedin.html";
    if(window.location.href = "./logedin.html")
    {
      window.alert("This is your homepage, you are free to explore");
      break;
    }
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

