<!--Header Begin-->
<?php 
$pageTitle = "Signup";
include 'inc/header.php'; ?>
<!--Header End-->
<body>

	<form action="#" method="post">
		<p>
			<label for="username">Username</label>
			<input id="username" name="username" type="text">
		</p>
		<p>
			<label for="password">Password</label>
			<input id="password" name="password" type="password">
			<span>Enter a password longer than 8 characters</span>
		</p>
		<p>
			<label for="confirm_password">Confirm Password</label>
			<input id="confirm_password" name="confirm_password" type="password">
			<span>Please confirm your password</span>
		</p>
		<p>
			<input type="submit" value="SUBMIT" id="submit">
		</p>
	</form>
	<!--Footer Begin-->
<?php include 'inc/footer.php'; ?>
<!--Footer End-->
</body>
</html>