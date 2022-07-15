function login()
{
	var name = document.getElementById("username").value;
	var password = document.getElementById("password").value;

  var name_array = ["BonzyBuddy", "ProDavid", "Profe", "DaSaPa", "David"];
  var password_array = ["Calvo", "123", "Coding", "123", "123"];


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
	const d = new Date();
	let hour = d.getUTCHours() + 2;
	const m = new Date();
	let minutes = m.getUTCMinutes();
	document.getElementById("time").innerHTML = hour;
	document.getElementById("min").innerHTML = minutes;
	var time = document.getElementById("time").innerHTML.toString()
	if(time > 6 && time < 11 || time == 11)
	{
		document.getElementById("wake_up_image").src="https://static.toiimg.com/photo/45773211.cms";
		document.getElementById("initial_statement").innerHTML = "Good Morning!";
	}
	else if(time > 11 && time < 18 || time == 18)
	{
		document.getElementById("wake_up_image").src="https://media.gettyimages.com/videos/beautiful-summer-sun-time-lapse-video-id638668442?s=640x640";
		document.getElementById("initial_statement").innerHTML = "Good Day!";
	}
	else if(time > 18 && time < 20 || time == 20)
	{
		document.getElementById("wake_up_image").src="https://images.fineartamerica.com/images/artworkimages/mediumlarge/1/blue-sky-above-the-setting-sun-lyle-crump.jpg";
		document.getElementById("initial_statement").innerHTML = "Good Afternoon!";
	}
	else
	{
		document.getElementById("wake_up_image").src="https://images.unsplash.com/photo-1499578124509-1611b77778c8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTN8fGx1bmF8ZW58MHx8MHx8&w=1000&q=80";
		document.getElementById("initial_statement").innerHTML = "You should be asleep!";
	}
}

setInterval(getTime, 1000);
