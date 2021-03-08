<?php
include "user-header.php";
include "db.php";
?>

<html>
 <body align="center">

  <?php
  if(isset($_SESSION['User'])){

   $pran=$_SESSION['User'];
   $res=mysqli_query($link,"select * from info_user where name='$f_name'");

   while ($row=mysqli_fetch_array($res))
   {
     $id_user=$row["id_user"];
     $email=$row["email"];
     $mobile=$row["mobile"];

     //echo $choya;
     $_SESSION['id_user']=$id_user;
   }
 }
   ?>

    <h5 align="center"> Welcome to the <b> <?php echo $pran;?> </b> User Interface.</h5>
    <h5 align="center"><u> Email:</u> <b> <?php echo $email;?> </b></h5>
    <h5 align="center"><u> Phone:</u> <b> <?php echo $mobile;?> </b></h5>
    <p align="center"><a href="edit_hos_profile.php" class="appointment-btn scrollto"><span class="d-none d-md-inline"></span>Edit Profile</a></p>

 </body>
 </html>

<?php
include "footer.php";
?>
