<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration form</title>
    <link rel="stylesheet" type="text/css" href="asset/style.css">
</head>
<body>
<div class="registration_area">

	<form method="post" action="login.php">
		<h2>Login!</h2>
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>User Name</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" name="login" class="btn">Login</button>
		</div>
		<p>Not yet a member?<a href="registration.php">sign up now!</a></p>
	</form>
	
</div>
<footer>
	<p>By Shantonu Suman</p>
</footer>
</body>
</html>