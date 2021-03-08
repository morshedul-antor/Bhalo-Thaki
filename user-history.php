<?php
include "user-header.php";
?>

<html>
<body>


  <!-- ======= Doctors Section ======= -->
  <section id="doctors" class="doctors">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
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

                            <h4>'.$row["dname"].'</h4>
                            <p>'.$row["dept"].'</p>
                            <p>'.$row["date"].', '.$row["time"].'</p>
                            <p>'.$row["problem"].'</p>

                            <div class="social">
                              <a href="chat/index.php"><i class="icofont-ui-messaging"></i></a>
                              <a href=""><i class="icofont-ui-call"></i></a>
                              <a href="video/index.php"><i class="icofont-video"></i></a>
                            </div>

                          </div>
                        </div>
                          <a href="" class="app-btn"><span class="d-none d-md-inline"></span>View</a>
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
