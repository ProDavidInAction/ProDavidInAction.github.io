
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
		<h2>Log In</h2>
		<form action="./login.inc.php" method="post">
			<input type="text" name="uid" placeholder="Username/Email...">
			<input type="password" name="pwd" placeholder="Password...">
			<button type="submit" name="submit">Log In</button>
		</form>
		<?php 
			if(isset($_GET['error'])) {
				if($_GET["error"] == "emptyinput") {
					echo "<p>Fill in all fields!</p>";
				}
				else if($_GET['error'] == "wronglogin") {
					echo "<p>Invalid username!</p>";
				}
			}

		?>
	</section>

</body>
</html>