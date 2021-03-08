<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"bhalothaki");

// session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register for Hospital</h2>
	</div>

	<form method="post" action="register-hospital.php" enctype="multipart/form-data">

		<div class="input-group">
			<label>Hospital Image</label>
			<input type="file" name="himage">
		</div>



		<div class="input-group">
			<label>Hospital name</label>
			<input type="text" name="username" placeholder="enter hospital name">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" placeholder="enter email">
		</div>
		<div class="input-group">
			<label>Contact No.</label>
			<input type="text" name="contact" placeholder="enter contact number">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="pass" placeholder="enter password">
		</div>
		<!-- <div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div> -->
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="address" placeholder="enter address">
		</div>
		<!-- <div class="input-group">
			<label>BMDC Number</label>
			<input type="text" name="nmdc" >
		</div> -->
		<!-- <div class="input-group">
			<label>Gender</label>
			<input type="text" name="gender" >
		</div> -->
		<div class="input-group">
			<label>Reg No</label>
			<input type="text" name="reg" placeholder="enter registration number">
		</div>

		<div class="input-group">
			<label>Details</label>
			<input type="text" name="det" placeholder="enter details">
		</div>


		<div class="input-group" align="center">
			<button type="submit" class="btn" name="submit1">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
			<a href="http://localhost/ValoThaki/index.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">HOME PAGE</a>
		</p>
	</form>

	<?php
	if(isset($_POST["submit1"]))
	{
		$v1=rand(1111,9999);
		$v2=rand(1111,9999);

		$v3=$v1.$v2;

		$v3=md5($v3);


		$fnm=$_FILES["himage"]["name"];
		$dst="../img-hospital/".$v3.$fnm;
		$dst1="img-hospital/".$v3.$fnm;
		move_uploaded_file($_FILES["himage"]["tmp_name"],$dst);

	//mysqli_query($link,"insert into product values('',$choya,'$_POST[pnm]',$_POST[pprice],$_POST[pqty],'$dst1','$_POST[pcategory]','$_POST[pdesc]')");
	// mysqli_query($link,"insert into info_doc values('',$choya,'$_POST[pnm]',$_POST[pprice],$_POST[pqty],'$dst1','$_POST[pcategory]','$_POST[pdesc]','')");
	mysqli_query($link,"insert into info_hos values('','$_POST[username]','$_POST[contact]','$_POST[email]','$_POST[pass]','$_POST[reg]','','$_POST[address]','$_POST[det]','$dst1')");


	}

	?>
</body>
</html>
