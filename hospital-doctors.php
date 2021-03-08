<?php
include "hospital-header.php";
?>

<html>
<body>


<!-- ======= Doctors Section ======= -->
<section id="doctors" class="doctors">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Doctor list</h2>
      </div>

      <div class="row">

  <?php
      $conn= mysqli_connect("localhost", "root","", "bhalothaki");
        if($conn->connect_error){

          die("connection failed:". $conn-> connect_error);
          }
          $sql="SELECT * FROM info_doc order by id_doc desc ";
          $result = $conn->query($sql);

          if($result->num_rows>0){
            while($row=$result-> fetch_assoc()){
              echo "

               </br>
              <div class='col-lg-6'>
                <div class='member d-flex align-items-start' data-aos='fade-up' data-aos-delay='100'>

                <a href='doctor-details.php'>
                <div class='pic'><img src='assets/img/doctors/doc.jpg' class='img-fluid' alt=''></div>
                </a>

                  <div class='member-info'>
                              <h4>".$row["f_name"]." ".$row["l_name"]."</h4>
                              <h7>".$row["specialty"]."</h7>
                              <p>BMDC: ".$row["bmdc"]."</p>
                              <p>FEE: ".$row["fee"]."</p>
                 </div>
                </div>
                  <a href='' class='app-btn'><span class='d-none d-md-inline'></span>Edit Profile</a>
              </div>
              </br></br></br>

        ";
       }

 } else{
   echo "0 result";
 }
 $conn->close();
?>
</div>


    </div>
</section><!-- End Doctors Section -->

</body>
</html>

<?php
include "footer.php";
?>
