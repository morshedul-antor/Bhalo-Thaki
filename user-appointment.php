<?php
 include "user-header.php";
 ?>


<!-- MAKE AN APPOINTMENT -->
     <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                      <div class="new-here">
                         <img src="images/appointment-image.jpg" class="img-responsive" alt="">
                    </div>
                  </div>

                    <div class="col-md-6 col-sm-6">
                         <!-- CONTACT FORM HERE -->
                         <form id="appointment-form" role="form" method="post" action="#">

                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Make an appointment</h2>
                              </div>

                             <div class="wow fadeInUp" data-wow-delay="0.8s">

                               <div class="row">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Your Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="number">Number</label>
                                        <input type="text" class="form-control" id="number" name="number" placeholder="Your Number">
                                   </div>


                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Age</label>
                                        <input type="text" class="form-control" id="age" name="age" placeholder="Age">
                                   </div>


                                   <div class="col-md-6 col-sm-6">
                                       <label for="select">Gender</label>
                                       <select class="form-control" name="gender">
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                       </select>
                                  </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="date">Select Date</label>
                                        <input type="date" name="date" value="" class="form-control">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="select">Select Department</label>
                                        <select class="form-control" name="option1">
                                             <option>Cardiology</option>
                                              <option>Medicine</option>
                                              <option>Dentistry</option>
                                              <option>Orthopaedic</option>
                                              <option>Neuromedicine</option>
                                              <option>Gynecology</option>
                                              <option>Pediatrics (CHILD)</option>
                                              <option>Cardiology</option>
                                              <option>Neurology</option>
                                              <option>Hepatology</option>
                                              <option>COVID-19 (coronavirus)</option>
                                        </select>
                                   </div>

                                    <div class="col-md-6 col-sm-6">
                                        <label for="select">Meeting Type</label>
                                        <select class="form-control"  name="option2">
                                             <option>Online</option>
                                             <option>Offline</option>
                                        </select>
                                   </div>
                                   <div class="col-md-6 col-sm-6">
                                       <label for="select">Select Doctor</label>
                                       <select class="form-control" name="dname">
                                            <option>Select Doctor</option>
                                            <option>Maliha Mamtaz</option>
                                            <option>Shafayet Zim</option>

                                       </select>
                                  </div>

                                  <div class="col-md-6 col-sm-6">
                                      <label for="select">Fee</label>
                                      <input type="text" class="form-control" id="fee" name="fee">
                                 </div>

                                   <div class="col-md-6 col-sm-6">
                                  <label for="select">Select Time</label>
                                  <select class="form-control" name="time">
                                       <option>Select Time</option>
                                       <option>4 PM</option>
                                       <option>5 PM</option>
                                       <option>6 PM</option>
                                  </select>
                                  </div>

                                        <label for="Message">Additional Message</label>
                                        <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
                                        <button type="submit" class="form-control" id="cf-submit" name="submit">Submit </button>

                              </div>

                              <?php
                                include "db.php";
                                if (isset($_POST["name"])) {

                                 $pname = $_POST["name"];
                                 $num = $_POST["number"];
                                 $age = $_POST["age"];
                                 $gender = $_POST['gender'];
                                 $date = $_POST['date'];
                                 $opt1 = $_POST['option1'];
                                 $opt2 = $_POST['option2'];
                                 $dname = $_POST['dname'];
                                 $fee = $_POST['fee'];
                                 $time = $_POST['time'];
                                 $message = $_POST['message'];
                                 $name = "/^[a-zA-Z ]+$/";

                                  $sql = "INSERT INTO `appointment`
                                   (`dname`, `dept`, `p_name`, `p_age`, `date`, `time`, `place`, `problem`, `gender`, `fee`)
                                   VALUES ('$dname', '$opt1', '$pname', '$age', '$date', '$time', '$opt2', '$message', '$gender', '$fee')";

                                   //$run_query = mysqli_query($con,$sql);
                                   //$_SESSION["uid"] = mysqli_insert_id($con);
                                   //$_SESSION["name"] = $f_name;
                                   //$ip_add = getenv("REMOTE_ADDR");
                                   if(mysqli_query($con,$sql)){
                                     echo "<script> location.href='payment.php?fee=<?php echo $fee ?>'; </script>";
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
