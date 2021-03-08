<?php
include "hospital-header.php";

 $link=mysqli_connect("localhost","root","");
 mysqli_select_db($link,"bhalothaki");

  //session_start();
 ?>

 <html>
 <head>
   <style>
   /* table {
   width:50%;
   } */
   table, th, td {
   border: 1px solid black;
   border-collapse: collapse;
   }
   th, td {
   /* padding: 15px; */
   text-align: center;
   }
   table tr:nth-child(even) {
   background-color: #eee;
   }
   table tr:nth-child(odd) {
   background-color: #fff;
   }
   table th {
   background-color: black;
   color: white;
   }
   </style>
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
     $hos=$row["name"];
     $reg=$row["reg_no"];
     $mail=$row["email"];
     $phn=$row["mobile"];
     $adrs=$row["address"];
     //echo $choya;
     $_SESSION['hosid']=$choya;
   }
   ?>
<p align="center"> Welcome to the <b> <?php echo $pran;?> </b> Hospital User Interface.</p>

<h2 align="center">Profile Editing</h2>
<div align="center">
  <form name="form1" action="" method="post" enctype="multipart/form-data">

 <table border="1">

 <tr>
 <th>Hospital Name</th>
 <td><input type="text" name="cnm" value="<?php echo $hos; ?>"></td>
 </tr>
 <tr>
 <th>Email</th>
 <td><input type="email" name="email" value="<?php echo $mail; ?>"></td>
 </tr>
 <tr>
 <th>Contact</th>
 <td><input type="text" name="contact" value="<?php echo $phn; ?>"></td>
 </tr>
 <tr>
 <th>Address</th>
 <td><input type="text" name="add" value="<?php echo $adrs; ?>"></td>
 </tr>

 <!-- <tr>
 <td colspan="2" align="center"><input type="submit" name="submit1" value="Update"></td>
</tr> -->

 </table>
 <div class="text-center"><button class="appointment-btn scrollto" type="submit" name="submit1">Update</button></div>

 </form>

 <?php
 if(isset($_POST["submit1"]))
 {

 mysqli_query($link,"UPDATE info_hos SET name='$_POST[cnm]',email='$_POST[email]',mobile='$_POST[contact]',address='$_POST[add]' where name='$hos'");


 }

 ?>


  </div>



 </body>
 </html>

 <?php
 include "footer.php";
  ?>
