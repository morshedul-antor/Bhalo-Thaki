<?php
include "hospital-header.php";
 ?>

 <?php
 $link=mysqli_connect("localhost","root","");
 mysqli_select_db($link,"bhalothaki");
 ?>

 <html>
 <head>

 </head>
 <body>
<!-- ======= Appointment Section ======= -->
<section id="appointment" class="appointment section-bg">
  <div class="container">

    <div class="section-title">
      <h2>Add A Doctor</h2>
      <p>Please fill up all the empty space.</p>
    </div>

    <?php
    //if(isset($_SESSION['User']))
  //{
    $pran=$_SESSION['User'];
    //echo $pran;
    $res=mysqli_query($link,"select * from info_hos where name='$pran'");

    while ($row=mysqli_fetch_array($res))
    {

      $choya=$row["id_hos"];
      //echo $choya;
      //$_SESSION['hosid']=$_POST['.$choya.'];
      //$_SESSION[$choya]=$hosid;
      //$choya=$_SESSION['hosid'];
      $_SESSION['hosid']=$choya;
    }
    ?>

    <!-- <form action="forms/appointment.php" method="post" role="form" class="php-email-form" enctype="multipart/form-data"> -->
    <form name="form1" action="" method="post"  enctype="multipart/form-data">
      <div class="form-row">
        <div class="col-md-4 form-group">
          <input type="file" name="dimage" class="form-control" id="hdimage" placeholder="Picture"  data-msg="Please enter at a image">
          <div class="validate"></div>
        </div>
      <div class="col-md-4 form-group">
        <input type="text" name="dname" class="form-control" id="hdname" placeholder="Doctor Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
        <div class="validate"></div>
      </div>
      <div class="col-md-4 form-group">
        <input type="email" class="form-control" name="email" id="demail" placeholder="Email" data-rule="email" data-msg="Please enter a valid email">
        <div class="validate"></div>
      </div>
      <div class="col-md-4 form-group">
        <input type="tel" class="form-control" name="phone" id="dphone" placeholder="Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
        <div class="validate"></div>
      </div>
      <div class="col-md-4 form-group">
        <input type="text" name="reg" class="form-control" id="dreg" placeholder="BMDC" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
        <div class="validate"></div>
      </div>
      <div class="col-md-4 form-group">
        <input type="text" name="address" class="form-control" id="daddress" placeholder="Address" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
        <div class="validate"></div>
      </div>
    </div>


   <div class="form-row">
     <div class="col-md-4 form-group">
       <input type="text" name="fee" class="form-control datepicker" id="dfee" placeholder="Fee" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
       <div class="validate"></div>
     </div>

     <div class="col-md-4 form-group">
       <select name="department" id="ddepartment" class="form-control">
         <option value="">Select Department</option>
         <option value="Department 1">Department 1</option>
         <option value="Department 2">Department 2</option>
         <option value="Department 3">Department 3</option>
       </select>
       <div class="validate"></div>
     </div>
     <div class="col-md-4 form-group">
       <select name="gender" id="dgender" class="form-control">
         <option value="">Select Gender</option>
         <option value="Doctor 1">Male</option>
         <option value="Doctor 2">Female</option>
         <!-- <option value="Doctor 3">No 3</option> -->
       </select>
       <div class="validate"></div>
     </div>
   </div>


   <!-- <tr>
   <td colspan="2" align="center"><input type="submit" name="submit1" value="Upload"></td>
 </tr> -->
 <div class="text-center"><button class="appointment-btn scrollto" type="submit" name="submit1">Add Doctor</button></div>

       <!-- <a href="#login" class="appointment-btn scrollto"><span class="d-none d-md-inline"></span>Logout</a> -->


   </form>

    <?php
    if(isset($_POST["submit1"]))
    {
       $v1=rand(1111,9999);
       $v2=rand(1111,9999);

       $v3=$v1.$v2;

       $v3=md5($v3);


       $fnm=$_FILES["dimage"]["name"];
       $dst="./img-doctor/".$v3.$fnm;
       $dst1="img-doctor/".$v3.$fnm;
       move_uploaded_file($_FILES["dimage"]["tmp_name"],$dst);

    //mysqli_query($link,"insert into product values('',$choya,'$_POST[pnm]',$_POST[pprice],$_POST[pqty],'$dst1','$_POST[pcategory]','$_POST[pdesc]')");
    // mysqli_query($link,"insert into info_doc values('',$choya,'$_POST[pnm]',$_POST[pprice],$_POST[pqty],'$dst1','$_POST[pcategory]','$_POST[pdesc]','')");
    mysqli_query($link,"insert into doctor values('',$choya,'$_POST[dname]','$_POST[email]','$_POST[phone]','$_POST[fee]','$_POST[reg]','$_POST[department]','$_POST[address]','$dst1')");

    }

    ?>

  </div>
</section><!-- End Appointment Section -->
</body>
</html>

<?php
include "footer.php";
 ?>
