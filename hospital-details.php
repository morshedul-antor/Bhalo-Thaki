<?php
include "header.php";
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"bhalothaki");

 session_start();
 ?>

 <html>
 <head>


 </head>
 <body>
   <!-- ======= Doctors Section ======= -->
   <section id="doctors" class="doctors">
       <div class="container" data-aos="fade-up">

         <div>
           <h2>Doctors</h2>
         </div>

         <div class="row">

           <?php
           $conn= mysqli_connect("localhost", "root","", "bhalothaki");
           if($conn->connect_error){

             die("connection failed:". $conn-> connect_error);
            }
               $sql="SELECT * FROM info_doc order by id_doc desc";
               $result = $conn->query($sql);
               if($result->num_rows>0){
                 while($row=$result-> fetch_assoc()){
                   echo '
                       <div class="col-lg-6 mt-4">
                         <div class="member d-flex align-items-start" data-aos="fade-up" data-aos-delay="100">
                           <div class="member-info">
                            <img src='.$row["pic"].' " height="200" width="200"";>
                             <h4>'.$row["f_name"].' '.$row["l_name"].'</h4>
                             <p>'.$row["email"].'</p>
                             <p>'.$row["mobile"].'</p>
                             <p>'.$row["fee"].'</p>
                             <h2 class="title">
                             <div class="icon">
                             <a href=""><i class="icofont-ui-call"></i></a>
                             <a href=""><i class="icofont-ui-video-chat"></i></a>
                             <a href=""><i class="icofont-prescription"></i></a>
                           </div>
                         </h2>

                           </div>
                         </div>
                           <a href="appointment.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an </span>Appointment</a>
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
