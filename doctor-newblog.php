<?php
include "doctor-header.php";
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"bhalothaki");
//session_start();
 ?>

  <!-- Doctor Blog -->
    <section id="doc-blog" class="doc-blog">
         <div class="container" data-aos="fade-up">

           <div class="section-title">
                <h2>Write blog</h2>
           </div>
                        <!-- CONTACT FORM HERE -->
                        <form id="appointment-form" role="form" method="post" action="#" enctype='multipart/form-data'>

                             <!-- SECTION TITLE -->
                             <div class="wow fadeInUp" data-wow-delay="0.8s">

                                       <label for="name">Blog Title</label>
                                       <input type="text" class="form-control" id="name" name="name" placeholder="Title">

                                      <div class="row">

                                      <div class="col-md-6 col-sm-6">
                                       <label for="date"></br>Select Date</label>
                                       <input type="date" name="date" value="" class="form-control">
                                      </div>

                                       <div class="col-md-6 col-sm-6">
                                        <label for="picture"></br>Select Picture</label>
                         								<input type="file" class="form-control" name="image" id="picture">
                                      </div>

                                     </div>

                                       <label for="Message"></br>Blog Details</label>
                                       <textarea class="form-control" rows="5" id="message" name="message" placeholder="Details"></textarea>
                                       </br>
                                       <button type="submit" class="form-control" id="cf-submit" name="upload">Publish</button>

                             </div>
                        </form>

                        <?php
                        if(isset($_POST["upload"]))
                        {
                           $v1=rand(1111,9999);
                           $v2=rand(1111,9999);

                           $v3=$v1.$v2;
                           $v3=md5($v3);

                           $fnm=$_FILES["image"]["name"];
                           $dst="./images/".$v3.$fnm;
                           $dst1=$v3.$fnm;
                           move_uploaded_file($_FILES["image"]["tmp_name"],$dst);

                           mysqli_query($link,"insert into blog values('','$_POST[name]','$_POST[date]','$dst1','$_POST[message]')");


                           if(mysqli_query($con,$sql)){
                       			echo "Registration Successfull";
                       			echo "<script> location.href='doctor-index.php'; </script>";
                            exit;
                       		 }
                        }
                      ?>



         </div>
    </section>


<?php
  include "footer.php";
?>
