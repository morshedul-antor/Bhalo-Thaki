<?php
include "header.php";
?>

<html>
<body>


<!-- ======= Doctors Section ======= -->
<section id="doctors" class="doctors-doc">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Service list</h2>
      </div>

      <div class='row'>

  <?php
      $conn= mysqli_connect("localhost", "root","", "bhalothaki");
        if($conn->connect_error){

          die("connection failed:". $conn-> connect_error);
          }
          $sql="SELECT * FROM service order by id_ser desc ";
          $result = $conn->query($sql);

          if($result->num_rows>0){
            while($row=$result-> fetch_assoc()){
              echo "



              <div class='col-lg-6'>
                <div class='member d-flex align-items-start' data-aos='fade-up' data-aos-delay='100'>



                  <div class='member-info'>
                             <a href=''><i class='pic'></i></a>

                              <h4>".$row["name"]." </h4>
                              <h7>".$row["type"]."</h7>

                              <div class='social'>
                                <a href=''><i class='icofont-ui-call'></i></a>
                              </div>
                 </div>
                </div>

              </div>
              </br>


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
