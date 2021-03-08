<html lang="en">
<bod>
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/hos1.jpg)">
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>In an emergency? Need help now?</h3>
        <!-- <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
          <a class="cta-btn scrollto" href="#appointment">Make an Appointment</a>
        </div>

      </div>
    </section><!-- End Cta Section -->


    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-doctor-alt"></i>
              <span data-toggle="counter-up">25</span>
              <p><strong>Doctors</strong> has joined...</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-patient-bed"></i>
              <span data-toggle="counter-up">18</span>
              <p><strong>Hospitals</strong> has registered...</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-laboratory"></i>
              <span data-toggle="counter-up">8</span>
              <p><strong>Departments</strong> in total...</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-award"></i>
              <span data-toggle="counter-up">150</span>
              <p><strong>Patients</strong> got services...</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->


    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Doctors</h2>
          </div>

          <div class="row">

            <?php
              //checking user session
              include 'db.php';

                $sql = "SELECT * FROM info_doc WHERE id_doc = 2";
                $query = mysqli_query($con,$sql);
                $row = mysqli_fetch_array($query);
                echo'

                    <div class="col-lg-6">
                      <div class="member d-flex align-items-start" data-aos="fade-up" data-aos-delay="100">
                        <div class="pic"><img src="assets/img/doctors/doc.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                          <h4>'.$row["f_name"].' '.$row["l_name"].' </h4>
                          <p>'.$row["specialty"].'</p>
                          <p>BMDC: '.$row["bmdc"].'</p>
                          <p>FEE: '.$row["fee"].'</p>
                          <div class="social">
                            <a href="chat/index.php"><i class="icofont-ui-messaging"></i></a>
                            <a href="voice/index.html"><i class="icofont-ui-call"></i></a>
                            <a href="video/index.html"><i class="icofont-video"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
               ';

               $sql = "SELECT * FROM info_doc WHERE id_doc = 3";
               $query = mysqli_query($con,$sql);
               $row = mysqli_fetch_array($query);
               echo'
                   <div class="col-lg-6">
                     <div class="member d-flex align-items-start" data-aos="fade-up" data-aos-delay="100">
                       <div class="pic"><img src="assets/img/doctors/doc.jpg" class="img-fluid" alt=""></div>
                       <div class="member-info">
                         <h4>'.$row["f_name"].' '.$row["l_name"].' </h4>
                         <p>'.$row["specialty"].'</p>
                         <p>BMDC: '.$row["bmdc"].'</p>
                         <p>FEE: '.$row["fee"].'</p>
                         <div class="social">
                           <a href=""><i class="icofont-ui-messaging"></i></a>
                           <a href=""><i class="icofont-ui-call"></i></a>
                           <a href=""><i class="icofont-video"></i></a>
                         </div>
                       </div>
                     </div>
                   </div>
              ';

            ?>
          </div>

        </div>
    </section><!-- End Doctors Section -->



    <!-- ======= Frequently Asked Questioins Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questioins</h2>
        </div>

        <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">
          <li>
            <a data-toggle="collapse" class="collapsed" href="#faq1">Is there a genetic factor to strokes?<i class="icofont-simple-up"></i></a>
            <div id="faq1" class="collapse" data-parent=".faq-list">
            <p>
              Yes. There are genetic factors. There are some people that are born with certain genes that predispose them to stroke. One such condition would be CADASIL (cerebral autosomal-dominant arteriopathy with subcortical infarcts and leukoencephalopathy). If you are interested, I am sure you can learn more about this condition from the Web. Some people are born with genetic conditions that predispose them to clotting. This in turn may increase their stroke risk.
            </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">What medications are best for the treatment of asthma? <i class="icofont-simple-up"></i></a>
            <div id="faq2" class="collapse" data-parent=".faq-list">
              <p>
                Albuterol is usually the primary "rescue" or short-term medicine that is used to help acute asthma symptoms, such as coughing or wheezing. When a patient needs to use albuterol to relieve daytime symptoms more than twice per week, however, it usually reflects the need to use daily "controller" or anti-inflammatory medications. Many people are concerned about possible side effects of inhaled steroids, which are the largest group of "controller" medications available.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed">I am trying to eat a vegetarian diet. How can I get the protein that I need? <i class="icofont-simple-up"></i></a>
            <div id="faq3" class="collapse" data-parent=".faq-list">
              <p>
                It is good that you are concerned because many people who start eating a vegetarian diet simply eliminate the meat from their diet and compromise their protein needs. Rich protein sources include lentils, legumes, nuts/seeds, soy products (such as tofu or soy meat substitutes), eggs, and dairy products. You need to be intentional about consuming these foods several times throughout the day.
              </p>
            </div>
          </li>
        </ul>
      </div>
    </section><!-- End Frequently Asked Questioins Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="section-title">
          <h2>Contact</h2>
        </div>
      </div>
      <div>
      <!--  <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe> -->
      </div>

      <div class="container">
        <div class="row mt-5">
          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Bashundhara R/A</h3>
                  <p>Dhaka</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>mail@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+88 01927194591</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <form action="contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="4" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" name="cnew">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

</body>
</html>
