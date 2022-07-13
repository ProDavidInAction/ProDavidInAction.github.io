<?php  
	include_once 'header.php';
?>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<section class="signup-form">
		<h2>Sign Up</h2>
		<form action="./includes./signup.inc.php" method="post">
			<input type="text" name="name" placeholder="Full Name...">
			<input type="text" name="email" placeholder="Email...">
			<input type="text" name="uid" placeholder="Username">
			<input type="password" name="pwd" placeholder="Password...">
			<input type="password" name="pwdrepeat" placeholder="Repeat Password...">
			<button type="submit" name="submit">Sign Up</button>
		</form>
		<?php 
			if(isset($_GET['error'])) {
				if($_GET["error"] == "emptyinput") {
					echo "<p>Fill in all fields!</p>";
				}
				else if($_GET['error'] == "invaliduid") {
					echo "<p>Invalid username!</p>";
				}
				else if($_GET['error'] == "invalidemail") {
					echo "<p>Invalid email!</p>";
				}
				else if($_GET['error'] == "passwordsdontmatch") {
					echo "<p>Passwords dont match!</p>";
				}
				else if($_GET['error'] == "stmtfailed") {
					echo "<p>Contact me in person and tell me that the statement failed. Thanks! :)</p>";
				}
				else if($_GET['error'] == "usernametaken") {
					echo "<p>This username is taken, pick another one</p>";
				}
				else if($_GET['error'] == "none") {
					echo "<p>You have signed up! Welcome!</p>";
				}
			}

		?>
	</section>
</body>
</html>
