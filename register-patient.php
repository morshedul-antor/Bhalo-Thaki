<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" type="text/css" href="assets/css/userstyle.css">
<div class="wait overlay">
    <div class="loader"></div>
</div>
<style>
.input-borders{
    border-radius:30px;
}
</style>

            <div class="main">

            <form id="signup_form"  class="login100-form" role="form" method="post" action="#">
              <div class="billing-details jumbotron">
                                <div class="section-title">
                                    <h2 class="login100-form-title p-b-49" >Patient Registration</h2>
                                </div>
                                <div class="form-group ">

                                    <input class="input form-control input-borders" type="text" name="f_name" id="f_name" placeholder="First Name">
                                </div></br>
                                <div class="form-group">

                                    <input class="input form-control input-borders" type="text" name="l_name" id="l_name" placeholder="Last Name">
                                </div></br>

                              <div class="row">

                                <div class="form-group">
                                    <input class="input form-control input-borders" type="text" name="mobile" id="mobile" placeholder="Mobile">
                                </div></br>
                                <div class="form-group">
                                    <input class="input form-control input-borders" type="email" name="email"  placeholder="Email">
                                </div></br>

                              </div>


                                <div class="form-group">
                                    <input class="input form-control input-borders" type="password" name="password" id="password" placeholder="Password">
                                </div></br>
                                <div class="form-group">
                                    <input class="input form-control input-borders" type="password" name="repassword" id="repassword" placeholder="Confirm password">
                                </div></br>

                                <div class="form-group">
                                    <input class="input form-control input-borders" type="text" name="address" id="address" placeholder="Address">
                                </div></br>

                                </div>


                                <button type="submit" class="primary-btn" id="cf-submit" name="submit">Sign Up</button>
                                <div class="text-pad">
                                <a href="login-patient.php">Already have an Account?</a>
                                </div></br>

            </form>
      </div>

    </body>
  </html>

<?php
include "db.php";
if (isset($_POST["f_name"])) {

	$f_name = $_POST["f_name"];
	$l_name = $_POST["l_name"];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];
	$address = $_POST['address'];
	$name = "/^[a-zA-Z ]+$/";
	$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
	$number = "/^[0-9]+$/";

if(empty($f_name) || empty($l_name) || empty($mobile) || empty($email) || empty($password) ||
empty($repassword)  || empty($address)){
		echo "
		<script>alert('Please fill all the fields!')</script>
		";

	} else {
		if(!preg_match($name,$f_name)){
		echo "
			<script>alert('this $f_name is not valid..!')</script>
		";
		exit();
	}
	if(!preg_match($name,$l_name)){
		echo "
			<script>alert('this $l_name is not valid..!')</script>
		";
		exit();
	}
	if(!preg_match($emailValidation,$email)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $email is not valid..!</b>
			</div>
		";
		exit();
	}
	if(strlen($password) < 8 ){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Password is weak</b>
			</div>
		";
		exit();
	}
	if(strlen($repassword) < 8 ){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Password is weak</b>
			</div>
		";
		exit();
	}
	if($password != $repassword){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Password is not same</b>
			</div>
		";
	}
	if(!preg_match($number,$mobile)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number $mobile is not valid</b>
			</div>
		";
		exit();
	}
	if(!(strlen($mobile) == 11)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number must be 11 digit</b>
			</div>
		";
		exit();
	}
	//existing email address in our database
	$sql = "SELECT id_user FROM info_user WHERE email = '$email' LIMIT 1" ;
	$check_query = mysqli_query($con,$sql);
	$count_email = mysqli_num_rows($check_query);
	if($count_email > 0){
		echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'></a>
				<b>Email Address is already register, Try another email.</b>
			</div>
		";
		exit();
	} else {

		$sql = "INSERT INTO `info_user`
		(`f_name`, `l_name`, `mobile`, `email`, `password`, `address`)
		VALUES ('$f_name', '$l_name', '$mobile', '$email', '$password', '$address')";

		//$run_query = mysqli_query($con,$sql);
		//$_SESSION["uid"] = mysqli_insert_id($con);
		//$_SESSION["name"] = $f_name;
		//$ip_add = getenv("REMOTE_ADDR");
		if(mysqli_query($con,$sql)){
			echo "Registration Successfull";
			echo "<script> location.href='login-form.php'; </script>";
      exit;
		}
	}
	}

}
?>
