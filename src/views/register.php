<!DOCTYPE html>
<html>
<head>
	<title>register</title>
</head>
<body>
	<p>
		<?php
			if (isset($_GET['msg'])) {
				echo $_GET['msg'];
			}
		?>
	</p>
	<form method="post" action="/hive2/src/controll/login/registerController.php">
		Name<input type="text" name="firstName">
		Email<input type="email" name="email">
		Password<input type="password" name="password">
		<input type="submit" value="sign up">
	</form>
</body>
</html>