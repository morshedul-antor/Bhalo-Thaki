<?php

include("../db.php");
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$p_name=$_GET['p_name'];

/*this is delet quer*/
mysqli_query($con,"delete from appointment where p_name='$p_name'")or die("query is incorrect...");
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
	<h1>Appointed Patient List </h1></div><br>

<div style="overflow-x:scroll;">
<table class="table table-bordered table-hover table-striped" style="font-size:18px">
	<tr>
			    <th>Patient's Name</th>
			    <th>Patient's Age</th>
                <th>Date</th>
                <th>Time</th>
                <th></th>
                
	
<?php
$result=mysqli_query($con,"select p_name,p_age,date,time from appointment")or die ("query 2 incorrect.......");

while(list($p_name,$p_age,$date,$time)=
mysqli_fetch_array($result))
{
echo "<tr><td>$p_name</td><td>$p_age</td><td>$date</td><td>$time</td>";
echo"<td>

<a href='appointment_list.php?p_name=$p_name&action=delete'>Delete</a>
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
