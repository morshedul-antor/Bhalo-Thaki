<?php

include("../db.php");
$name=$_REQUEST['name'];

$result=mysqli_query($con,"select name,reg_no,email,address,lat,lng from info_hos where name='$name'")or die ("query 1 incorrect.......");

list($name,$reg_no,$email,$address,$lat,$lng)=mysqli_fetch_array($result);

if(isset($_POST['btn_save'])) 
{
$name=$_POST['name'];
$reg_no=$_POST['reg_no'];
$email=$_POST['email'];
$address=$_POST['address'];
$lat=$_POST['lat'];
$lng=$_POST['lng'];

mysqli_query($con,"update info_hos set name='$name', reg_no='$reg_no', email='$email', address='$address', lat='$lat', lng='$lng' where name='$name'")or die("Query 2 is inncorrect..........");

header("location: hospital_list.php");
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
   	<div class="container-fluid main-container">
	<?php include("include/side_bar.php");?>
    
	<div class="col-md-9 content" align="center">  
<div class="panel-heading" style="background-color:#c4e17f">
	<h1>Edit Hospital Details </h1></div><br>
<form action="edit_hospital.php" name="form" method="post" enctype="multipart/form-data">
<input type="hidden" name="name", reg_no="reg_no", email="email", address="address", lat="lat", lng="lng" value="<?php echo $name;?>" />


<div class="col-sm-7 ">
    <label style="font-size:18px;">Name</label><br>
    <input class="input-lg" style="font-size:18px; width:200px" name="name" type="text"  id="name" value="<?php echo $name; ?>" autofocus><br><br>
    </div>


<div class="col-sm-7 ">
<label style="font-size:18px;">Reg NO</label><br>
<input class="input-lg" style="font-size:18px; width:200px" name="reg_no" type="text"  id="reg_no" value="<?php echo $reg_no; ?>">
    <br><br></div>

<div class="col-sm-7 ">
<label style="font-size:18px;">Email</label><br>
<input class="input-lg" style="font-size:18px; width:200px" name="email" type="text"  id="email" value="<?php echo $email; ?>">
    <br><br></div>

 <div class="col-sm-7 ">
<label style="font-size:18px;">Address</label><br>
<input class="input-lg" style="font-size:18px; width:200px" name="address" type="text"  id="address" value="<?php echo $address; ?>">
    <br><br></div>
    
<div class="col-sm-7 ">
<label style="font-size:18px;">Lat</label><br>
<input class="input-lg" style="font-size:18px; width:200px" name="lat" type="text"  id="lat" value="<?php echo $lat; ?>">
    <br><br></div>       

<div class="col-sm-7 ">
<label style="font-size:18px;">Long</label><br>
<input class="input-lg" style="font-size:18px; width:200px" name="lng" type="text"  id="lng" value="<?php echo $lng; ?>">
    <br><br></div>

    <div class="col-sm-7">
        <button type="submit" class="btn btn-success " name="btn_save" id="btn_save" style="font-size:18px">Submit</button></div>
</form>
</div></div>
<?php include("include/js.php");?>
</body>
</html>