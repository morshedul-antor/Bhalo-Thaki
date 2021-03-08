<?php
include "db.php";
if (isset($_POST["name"])) {
  $cname = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

    // adding user info
    $sql = "INSERT INTO `contact`
    (`c_name`, `C_email`, `c_subject`, `c_message`)
    VALUES ('$cname', '$email', '$subject', '$message')";

    if (mysqli_query($con,$sql)) {
      echo "<script> location.href='index.php'; </script>";
      exit;
    }
  }
?>
