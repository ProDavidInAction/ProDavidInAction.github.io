<?php

if(isset($_POST["submit"])){

	$name = $_POST["name"];
	$email = $_POST["email"];
	$username = $_POST["uid"];
	$pdw = $_POST["pwd"];
	$pwdRepeat = $_POST["pwdrepeat"];

	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';

	if(emptyInputSignup($name, $email, $username, $pdw, $pwdRepeat) !== false)
	{
		header("location: ../signup.php?error=emptyinput");
		exit();
	}
	if(invalidUid($username) !== false)
	{
		header("location: ../signup.php?error=invaliduid");
		exit();
	}
	if(invalidEmail($email) !== false)
	{
		header("location: ../signup.php?error=invalidemail");
		exit();
	}
	if(pwdMatch($pdw, $pwdRepeat) !== false)
	{
		header("location: ../signup.php?error=passwordsdontmatch");
		exit();
	}
	if(uidExists($conn, $username, $email) !== false)
	{
		header("location: ../signup.php?error=usernametaken");
		exit();
	}

	createUser($conn, $name, $email, $username, $pdw);

}
else{
	header("location: ../signup.php");
}