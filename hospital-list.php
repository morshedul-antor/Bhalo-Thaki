<?php
include "user-header.php";
?>

 <html>
 <head>

 </head>
 <body>
   <!-- ======= Hospital Section ======= -->
   <section id="doctors" class="doctors">
       <div class="container" data-aos="fade-up">

         <div class="section-title">
           <h2 align="center">Hospital List</h2>
         </div>

         <div class="row">

           <?php

           $conn= mysqli_connect("localhost", "root","", "bhalothaki");
           if($conn->connect_error){
             die("connection failed:". $conn-> connect_error);
            }
               $sql="SELECT * FROM info_hos order by id_hos desc";
               $result = $conn->query($sql);
               if($result->num_rows>0){
                 while($row=$result-> fetch_assoc()){
                   echo '
                       <div class="col-lg-6 mt-4">
                         <div class="member d-flex align-items-start" data-aos="fade-up" data-aos-delay="100">
                           <div class="member-info">
                             <img src='.$row["pic"].' " height="200" width="200"";>
                             <h4>'.$row["name"].'</h4>
                             <p>'.$row["email"].'</p>
                             <p>'.$row["mobile"].'</p>
                             <span>'.$row["address"].'</span>
                             <h2 class="title">
                             <div class="icon">
                             <a href=""><i class="icofont-ui-call"></i></a>
                             <a href=""><i class="icofont-ui-video-chat"></i></a>
                             <a href=""><i class="icofont-prescription"></i></a>
                           </div>
                         </h2>

                           </div>
                         </div>
                         <a href="hospital-details.php" class="appointment-btn scrollto">View Details</a>

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
       </br>

       </div>
   </section>

 </body>
 </html>

 <?php
 include "footer.php";
  ?>
