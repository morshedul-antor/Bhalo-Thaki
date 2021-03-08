<?php

include("../db.php");

if(isset($_POST['submit']))
{
$f_name=$_POST['f_name'];
$bmdc=$_POST['password'];
$email=$_POST['email'];
$address=$_POST['address'];
$lat=$_POST['lat'];
$lng=$_POST['lng'];


mysqli_query($con,"insert into info_user (f_name,password,email,address,lat,lng) values ('$f_name','$password','$email','$address','$lat','$lng')") or die ("query incorrect");
header("location: user_list.php");
mysqli_close($con);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Admin Panel</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/k.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
</head>
<body>
<?php include("include/header.php"); ?>

<div class="container-fluid">
<?php include("include/side_bar.php"); ?>
   <div class="col-md-9 content" style="margin-left:10px">
    <div class="panel panel-default">
  <div class="panel-heading" style="background-color:#c4e17f">
  <h1><span class="glyphicon glyphicon-tag"></span>  Add User  </h1></div><br>

<form action="add_doctor.php" name="form" method="post">

<p>Name</p>
        <input class="input-lg thumbnail form-control" name="f_name" type="text"  id="f_name" autofocus style="width:100%" placeholder="doctor Name" required>

 <p>Password</p>
        <input class="input-lg thumbnail form-control" name="password" type="text"  id="password" autofocus style="width:100%" placeholder="password" required>

  <p>Email</p>
        <input class="input-lg thumbnail form-control" type="text" name="email" id="email" autofocus style="width:100%" placeholder="email" required>

  <p>Address</p>
        <input class="input-lg thumbnail form-control" type="text" name="address" id="address" autofocus style="width:100%" placeholder="address" required>
  
<p>Lat</p>
        <input class="input-lg thumbnail form-control" type="text" name="lat" id="lat" autofocus style="width:100%" placeholder="lat" required>

<p>Long</p>
        <input class="input-lg thumbnail form-control" type="text" name="lng" id="lng" autofocus style="width:100%" placeholder="long" required>

<div align="center">
    <button type="submit" name="submit" id="submit" class="btn btn-default" style="width:80px; height:60px"> Cancel</button>
    <button type="submit" name="submit" id="submit" class="btn btn-success" style="width:100px; height:60px"> Submit</button>
    </div>
</form>
</div></div>
<?php include("include/js.php"); ?>
</body>
</html>
