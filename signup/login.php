<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"bhalothaki");
?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

	<div class="header">
		<h2>Login</h2>
	</div>
	<div align="center">

	<?php
			if(@$_GET['Empty']==true)
			{
	?>
			<div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>
	<?php
			}
	?>


	<?php
			if(@$_GET['Invalid']==true)
			{
	?>
			<div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>
	<?php
			}
	?>
</div>

	<form method="post" action="process.php">


		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" placeholder="enter username">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password" placeholder="enter password">
		</div>
		<div class="input-group" align="center">
			<button type="submit" class="btn" name="Login">Login</button>
		</div>
		<p align="center">
			Not yet a member? <a href="register-hospital.php">Sign up</a>

		</p>


	</form>

</body>
</html>
