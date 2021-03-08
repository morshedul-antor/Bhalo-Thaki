<?php
include "doctor-header.php";

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
   $name=$_SESSION['name'];
   $res=mysqli_query($link,"select * from info_doc where f_name='$name'");

   while ($row=mysqli_fetch_array($res))
   {

     $id=$row["id_doc"];
     $fname=$row["f_name"];
     $lname=$row["l_name"];
     $mob=$row["mobile"];
     $bmdc=$row["bmdc"];
     $fee=$row["fee"];
     $add=$row["address"];
     //echo $choya;
     //$_SESSION['docid']=$docid;
   }
   ?>
<p align="center"> Welcome to the <b> <?php echo $name;?> </b> Doctor User Interface.</p>

<h2 align="center">Profile Editing</h2>
<div align="center">
  <form name="form1" action="" method="post" enctype="multipart/form-data">

 <table border="1">

 <tr>
 <th>Doctor Name</th>
 <td><input type="text" name="name" value="<?php echo $fname; echo " "; echo $lname; ?>"></td>
 </tr>
 <tr>
 <th>Contact Number</th>
 <td><input type="text" name="num" value="<?php echo $mob; ?>"></td>
 </tr>
 <tr>
 <th>BMDC Number</th>
 <td><input type="text" name="bmdc" value="<?php echo $bmdc; ?>"></td>
 </tr>
 <tr>
 <th>Fee</th>
 <td><input type="text" name="fee" value="<?php echo $fee; ?>"></td>
 </tr>
 <tr>
 <th>Address</th>
 <td><input type="text" name="add" value="<?php echo $add; ?>"></td>
 </tr>

 <!-- <tr>
 <td colspan="2" align="center"><input type="submit" name="submit1" value="Update"></td>
</tr> -->

 </table>
 <div class="text-center"><button class="appointment-btn scrollto" type="submit" name="submit">Update</button></div>

 </form>

 <?php
 if(isset($_POST["submit"]))
 {

 //mysqli_query($link,"UPDATE info_doc SET f_name='$_POST[name]', l_name='$_POST[name]', mobile='$_POST[num]', mobile='$_POST[contact]', , bmdc='$_POST[bmdc]' , fee='$_POST[fee]' address='$_POST[add]' where f_name='$fname' AND l_name='$lname'");


 }

 ?>


  </div>
 </body>
 </html>

 <?php
 include "footer.php";
  ?>
