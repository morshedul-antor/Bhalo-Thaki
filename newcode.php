<?php

$v1=rand(1111,9999);
$v2=rand(1111,9999);

$v3=$v1.$v2;
$v3=md5($v3);

$fnm=$_FILES["image"]["name"];
$dst="./img-doctor/".$v3.$fnm;
$dst1=$v3.$fnm;
move_uploaded_file($_FILES["image"]["tmp_name"],$dst);

mysqli_query($link,"insert into info_doc values('','$f_name','$l_name','$mobile','$email','$password','$bmdc','$spec','$fee','$address','$dst1')");

if(mysqli_query($con,$sql)){
 echo "Registration Successfull";
 echo "<script> location.href='login-doctor.php'; </script>";
 exit;
}







if (isset($_POST["submit"])) {
   $v1=rand(1111,9999);
   $v2=rand(1111,9999);

   $v3=$v1.$v2;
   $v3=md5($v3);

   $fnm=$_FILES["image"]["name"];
   $dst="./img-doctor/".$v3.$fnm;
   $dst1=$v3.$fnm;
   move_uploaded_file($_FILES["image"]["tmp_name"],$dst);

   mysqli_query($link,"insert into info_doc values('','$_POST[f_name]','$_POST[l_name]','$_POST[mobile]','$_POST[email]','$_POST[password]','$_POST[bmdc]','$_POST[spec]','$_POST[address]','$_POST[fee]','$dst1')");

   if(mysqli_query($con,$sql)){
    echo "Registration Successfull";
    echo "<script> location.href='login-doctor.php'; </script>";
    exit;
   }
 }


 ?>
