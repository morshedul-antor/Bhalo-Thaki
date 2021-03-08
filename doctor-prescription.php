<?php
include "doctor-header.php";
 ?>

 <!-- MAKE AN APPOINTMENT -->
   <section id="appointment" data-stellar-background-ratio="3">
        <div class="container">

             <div class="row">

               <div class="col-md-6 col-sm-6">
                    <!-- NEWS THUMB -->
                    <div class="news-detail-thumb">

                         <div class="news-social-share">
                              <h4>Connect with Patient</h4>
                                   <a href="#" class="btn btn-success"><i class="icofont-ui-messaging"></i></a>
                                   <a href="#" class="btn btn-primary"><i class="icofont-ui-call"></i></a>
                                   <a href="/video1/index.php" class="btn btn-danger"><i class="icofont-video"></i></a>

                         </div>

                    </div>
               </div>

                  <div class="col-md-6 col-sm-6">
                       <!-- CONTACT FORM HERE -->
                       <form id="appointment-form" role="form" method="post" action="#">

                            <!-- SECTION TITLE -->
                            <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                 <h2>Make a Prescription</h2>
                            </div>

                            <div class="wow fadeInUp" data-wow-delay="0.8s">
                            <div class="row">

                                  <div class="col-md-6 col-sm-6">
                                  <label for="name">Doctor Name</label>
                                  <input type="text" class="form-control" id="dname" name="dname" placeholder="Doctor Name">
                                  </div>

                                  <div class="col-md-6 col-sm-6">
                                  <label for="number">Doctor Number</label>
                                  <input type="text" class="form-control" id="dnum" name="dnum" placeholder="Doctor Number">
                                  </div>


                                 <div class="col-md-6 col-sm-6">
                                      <label for="name">Patient Name</label>
                                      <input type="text" class="form-control" id="name" name="pname" placeholder="Full Name">
                                 </div>

                                 <div class="col-md-6 col-sm-6">
                                      <label for="age">Age</label>
                                      <input type="age" class="form-control" id="age" name="page" placeholder="Age">
                                 </div>

                                 <div class="col-md-6 col-sm-6">
                                      <label for="date">Select Date</label>
                                      <input type="date" name="date" value="" class="form-control">
                                 </div>

                                 <div class="col-md-6 col-sm-6">
                                      <label for="telephone">Phone Number</label>
                                      <input type="tel" class="form-control" id="phone" name="pnum" placeholder="Phone">
                                 </div>
                               </div>

                                      <label for="Message">Details Prescription</label>
                                      <textarea class="form-control" rows="4" id="message" name="message" placeholder="Message"></textarea>
                                      <button type="submit" class="form-control" id="cf-submit" name="submit">Done</button>

                            </div>

                        <?php
                          include "db.php";
                          if (isset($_POST["dname"])) {

                          	$dname = $_POST["dname"];
                            $dnum = $_POST["dnum"];
                          	$pname = $_POST["pname"];
                          	$page = $_POST['page'];
                          	$date = $_POST['date'];
                          	$pnum = $_POST['pnum'];
                          	$message = $_POST['message'];
                          	$name = "/^[a-zA-Z ]+$/";

                            $sql = "INSERT INTO `prescription`
                             (`dname`, `dnum`, `pname`, `page`, `pdate`, `pnum`, `pres1`)
                             VALUES ('$dname', '$dnum', '$pname', '$page', '$date', '$pnum', '$message')";

                             //$run_query = mysqli_query($con,$sql);
                             //$_SESSION["uid"] = mysqli_insert_id($con);
                             //$_SESSION["name"] = $f_name;
                             //$ip_add = getenv("REMOTE_ADDR");
                             if(mysqli_query($con,$sql)){
                               echo "<script> location.href='doctor-index.php'; </script>";
                                exit;
                             }
                            }
                          ?>



                      </form>
                  </div>

             </div>
        </div>
   </section>



 <?php
 include "footer.php";
  ?>
