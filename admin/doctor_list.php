<?php

include("../db.php");
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$f_name=$_GET['f_name'];

/*this is delet quer*/
mysqli_query($con,"delete from info_doc where f_name='$f_name'")or die("query is incorrect...");
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
	<h1>Doctor List </h1></div><br>

<div style="overflow-x:scroll;">
<table class="table table-bordered table-hover table-striped" style="font-size:18px">
	<tr>
			    <th>Doctor's Name</th>
			    <th>BMDC</th>
                <th>Doctor's Email</th>
                <th>Address</th>
                <th>lat</th>
                <th>long</th>
	<th><a href="add_doctor.php">Add New</a></th></tr>
<?php
$result=mysqli_query($con,"select f_name,bmdc,email,address,lat,lng from info_doc")or die ("query 2 incorrect.......");

while(list($f_name,$bmdc,$email,$address,$lat,$lng)=
mysqli_fetch_array($result))
{
echo "<tr><td>$f_name</td><td>$bmdc</td><td>$email</td><td>$address</td><td>$lat</td><td>$lng</td>";
echo"<td>
<a href='edit_doctor.php?f_name=$f_name'>Edit</a>
<a href='doctor_list.php?f_name=$f_name&action=delete'>Delete</a>
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
