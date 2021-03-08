<?php
include "header.php";
?>

<html>
<body>


<!-- MAKE AN APPOINTMENT -->
  <section id="appointment" data-stellar-background-ratio="3">
       <div class="container">

         <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
              <h2>Doctor details</h2>
         </div>
            <div class="row">

                 <div class="col-md-6 col-sm-6">
                   <div class="new-det">
                      <img src="assets/img/doctors/doc.jpg" class="img-responsive" alt="">
                      <div>
                      <h5>Doctor Name</h5>
                    </div>
                    </div>
                    <div>
                    <p>Doctor details background................</p>
                  </div>
                 </div>

                 <div class="col-md-6 col-sm-6">
                      <!-- CONTACT FORM HERE -->
                      <form id="appointment-form" role="form" method="post" action="#">

                           <!-- SECTION TITLE -->
                           <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                <h4>Make an appointment</h4>
                           </div>

                           <div class="wow fadeInUp" data-wow-delay="0.8s">
                             <div class="row">
                                <div class="col-md-6 col-sm-6">
                                     <label for="name">Name</label>
                                     <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                                </div>

                                <div class="col-md-6 col-sm-6">
                                     <label for="email">Age</label>
                                     <input type="age" class="form-control" id="age" name="age" placeholder="Age">
                                </div>

                                <div class="col-md-6 col-sm-6">
                                     <label for="date">Select Date</label>
                                     <input type="date" name="date" value="" class="form-control">
                                </div>

                                <div class="col-md-6 col-sm-6">
                                     <label for="select">Select Department</label>
                                     <select class="form-control">
                                          <option>General Health</option>
                                          <option>Cardiology</option>
                                          <option>Dental</option>
                                          <option>Medical Research</option>
                                     </select>
                                </div>
                              </div>


                                     <label for="telephone">Phone Number</label>
                                     <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone">
                                     <label for="Message">Additional Message</label>
                                     <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
                                     <button type="submit" class="form-control" id="cf-submit" name="submit">Submit</button>

                           </div>
                     </form>
                 </div>

            </div>
       </div>
  </section>

  <?php
  include "footer.php";
  ?>

  </body>
  </html>
