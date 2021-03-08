<?php
include "user-header.php";
include "fpdf/fpdf.php";
 ?>

 <!-- MAKE AN APPOINTMENT -->
   <section id="appointment" data-stellar-background-ratio="3">
        <div class="container">

             <div class="row">

               <div class="col-md-6 col-sm-6">

                       <!-- CONTACT FORM HERE -->
                       <form id="appointment-form" role="form" method="post" action="pdf.php">

                            <!-- SECTION TITLE -->
                            <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                 <h3>My Prescription</h3>
                            </div>

                            <div class="wow fadeInUp" data-wow-delay="0.8s">


                              <?php
                                //checking user session
                                include 'db.php';

                            			$sql = "SELECT * FROM prescription WHERE 1";
                            			$query = mysqli_query($con,$sql);
                            			$row = mysqli_fetch_array($query);
                            		echo'

                                   <label for="name">Doctor Name</label>
                                   <input type="text" class="form-control" id="dname" name="dname" value="'.$row["dname"].'">

                               <div class="row">
                                  <div class="col-md-6 col-sm-6">
                                       <label for="name">Specialty</label>
                                       <input type="text" class="form-control" id="name" name="name" value="'.$row["specialty"].'">
                                  </div>

                                  <div class="col-md-6 col-sm-6">
                                       <label for="age">BMDC Number</label>
                                       <input type="age" class="form-control" id="age" name="age" value="'.$row["bmdc"].'">
                                  </div>
                                </div>

                                <div class="row">
                                   <div class="col-md-6 col-sm-6">
                                   <label for="age">Doctor Number</label>
                                   <input type="age" class="form-control" id="age" name="age" value="'.$row["dnum"].'">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                   <label for="name">Doctor Address</label>
                                   <input type="text" class="form-control" id="dname" name="dname" value="'.$row["address"].'">
                                   </div>
                                </div>

                              <div class="row">
                                 <div class="col-md-6 col-sm-6">
                                      <label for="name">Patient Name</label>
                                      <input type="text" class="form-control" id="name" name="name" value="'.$row["pname"].'">
                                 </div>

                                 <div class="col-md-6 col-sm-6">
                                      <label for="age">Age</label>
                                      <input type="age" class="form-control" id="age" name="age" value="'.$row["page"].'">
                                 </div>

                                 <div class="col-md-6 col-sm-6">
                                      <label for="date">Date</label>
                                      <input type="text" name="date" value="'.$row["pdate"].'" class="form-control">
                                 </div>

                                 <div class="col-md-6 col-sm-6">
                                      <label for="telephone">Phone Number</label>
                                      <input type="tel" class="form-control" id="phone" name="phone" value="'.$row["pnum"].'">
                                 </div>
                               </div>

                                      <label for="Message">Details Prescription</label>
                                      <textarea class="form-control" rows="5" id="message" name="message" placeholder="
                                      '.$row["pres1"].'

                                      '.$row["pres2"].'

                                      '.$row["pres3"].'

                                      '.$row["pres4"].'

                                      '.$row["pres5"].'
                                      "></textarea>
                                      <button type="submit" class="form-control" id="cf-submit" name="download">Download PDF</button>

                              ';
                           ?>

                            </div>
                      </form>
                  </div>

             </div>
        </div>
      </div>
   </section>


<?php
 include "footer.php";
?>
