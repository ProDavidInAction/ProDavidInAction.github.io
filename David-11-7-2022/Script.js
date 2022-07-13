function Login()
{
	var name = document.getElementById("user").value;
	var password = document.getElementById("password").value;
	if(name == "test" && password == "test")
	{
		window.alert("Login Correct");
	}
	else
	{
		window.alert("Login Incorrect, wrong user or password");
	}
}

function GoogleSearch()
{
	var toSearch = document.getElementById("search").value;
	var toSearchFull = "https://www.google.com/search?q=".concat("", toSearch)
	window.location.href = toSearchFull;
}