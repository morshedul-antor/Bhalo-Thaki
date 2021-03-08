<?php

include("../db.php");
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$name=$_GET['name'];

/*this is delet quer*/
mysqli_query($con,"delete from info_hos where name='$name'")or die("query is incorrect...");
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
<div class="col-sm-9" style="margin-left:10px">
<div class="panel-heading" style="background-color:#c4e17f">
	<h1>Hospital List </h1></div><br>

<div style="overflow-x:scroll;">
<table class="table table-bordered table-hover table-striped" style="font-size:18px">
	<tr>
			    <th>Hospital Name</th>
                 <th>Reg NO</th>
                 <th>Email</th>
                  <th>Address</th>
                   <th>Lat</th>
                    <th>Long</th>
	<th><a href="add_Hospital.php">Add New</a></th></tr>
<?php
$result=mysqli_query($con,"select name,reg_no,email,address,lat,lng from info_hos")or die ("query 2 incorrect.......");

while(list($name,$reg_no,$email,$address,$lat,$lng)=
mysqli_fetch_array($result))
{
echo "<tr><td>$name</td><td>$reg_no</td><td>$email</td><td>$address</td><td>$lat</td><td>$lng</td>";
echo"<td>
<a href='edit_hospital.php?name=$name'>Edit</a>
<a href='hospital_list.php?name=$name&action=delete'>Delete</a>
</td></tr>";
}
mysqli_close($con);
?>
</table>
</div>
</div></div>
<?php include("include/js.php"); ?>
</body>
</html>
