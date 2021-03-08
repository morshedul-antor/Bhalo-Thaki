<?php
include "doctor-header.php";
?>

<html>
<body>

  <!-- ======= Doctors Section ======= -->
  <section id="doctors" class="doctors">
      <div class="container" data-aos="fade-up">

        <div>
          <h2>My Appointments</h2>
        </div>

        <div class="row">

          <?php
          $conn= mysqli_connect("localhost", "root","", "bhalothaki");
          if($conn->connect_error){

            die("connection failed:". $conn-> connect_error);
           }
              $sql="SELECT * FROM appointment order by app_id desc";
              $result = $conn->query($sql);
              if($result->num_rows>0){
                while($row=$result-> fetch_assoc()){
                  echo '
                      <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start" data-aos="fade-up" data-aos-delay="100">
                          <div class="member-info">

                            <h4>'.$row["p_name"].'</h4>
                            <span>'.$row["p_age"].'</span>
                            <p>'.$row["date"].', '.$row["time"].'</p>
                            <p>'.$row["problem"].'</p>
                            <div class="social">
                              <a href="chat/index.php"><i class="icofont-ui-messaging"></i></a>
                              <a href=""><i class="icofont-ui-call"></i></a>
                              <a href=""><i class="icofont-video"></i></a>
                            </div>

                          </div>
                        </div>
                          <a href="doctor-prescription.php" class="app-btn"><span class="d-none d-md-inline">Make a </span>Prescription</a>
                      </div>

                      ';
                     }

               } else{
                 echo "0 result";
               }
               $conn->close();
           ?>

        </div>

      </br></br>
        <div>
          <h2>My Blogs</h2>
        </div>
      </br>
      <div class="row">

        <?php

        $conn= mysqli_connect("localhost", "root","", "bhalothaki");
        if($conn->connect_error){

          die("connection failed:". $conn-> connect_error);

        }
        $sql="SELECT * FROM blog ";
        $result = $conn->query($sql);

        if($result->num_rows>0){
          while($row=$result-> fetch_assoc()){
            echo '

                         <div class="col-md-4 col-sm-6">
                            <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">

                                <a href="">
                                    <img src="images/'.$row['pic'].'" class="img-responsive" alt="" style="width:350px; height:200px">
                                </a>

                                <div class="news-info">
                                  <span>'.$row["date"].'</span>
                                  <h5><a href="">'.$row["name"].'</a></h5>
                                  <p></p>
                                  </div>

                                </div>
                              </div>

                               ';
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
