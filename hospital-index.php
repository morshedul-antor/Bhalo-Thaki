<?php
//include "hos_ui_header.php";
include "hospital-header.php";
//include "db.php";

 $link=mysqli_connect("localhost","root","");
 mysqli_select_db($link,"bhalothaki");

  //session_start();
 ?>

 <html>
 <head>

 </head>
 <body align="center">
   <?php
   //if(isset($_SESSION['User']))
 //{
   $pran=$_SESSION['User'];
   $res=mysqli_query($link,"select * from info_hos where name='$pran'");

   while ($row=mysqli_fetch_array($res))
   {

     $choya=$row["id_hos"];
     $pic=$row["pic"];
     $reg=$row["reg_no"];
     $mail=$row["email"];
     $phn=$row["mobile"];
     $adrs=$row["address"];
     //echo $choya;
     $_SESSION['hosid']=$choya;
   }
   ?>

<h5 align="center"> Welcome to the <b> <?php echo $pran;?> </b> Hospital User Interface.</h5>
<h5 align="center"><u> Email:</u> <b> <?php echo $mail;?> </b></h5>
<h5 align="center"><u> Phone:</u> <b> <?php echo $phn;?> </b></h5>
<h5 align="center"><u> Address:</u> <b> <?php echo $adrs;?> </b></h5>
<h5 align="center"><u> Reg no:</u> <b> <?php echo $reg;?> </b></h5>
<p align="center"><a href="edit-hospitalprofile.php" class="appointment-btn scrollto"><span class="d-none d-md-inline"></span>Edit Profile</a></p>

 </body>
 </html>

 <?php
 include "footer.php";
  ?>
