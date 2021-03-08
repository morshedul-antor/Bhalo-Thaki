<?php
include "doctor-header.php";
?>

 <html>
 <body>

 <!-- NEWS -->
 <section id="news" class="blog">
   <div class="container" data-aos="fade-up">

     <div class="section-title">
       <h2>My Blog</h2>
     </div>

     <div class="row">

       <?php


       $conn= mysqli_connect("localhost", "root","", "bhalothaki");
       if($conn->connect_error){

         die("connection failed:". $conn-> connect_error);

       }
       $sql="SELECT * FROM blog";
       $result = $conn->query($sql);

       if($result->num_rows>0){
         while($row=$result-> fetch_assoc()){
           echo '

                <div class="col-md-4 col-sm-6">

                           <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                                <a href="blog-mydetails.php">
                                     <img src="images/'.$row['pic'].'" alt="">
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
 </section>

<?php
include "footer.php";
?>

</body>
</html>
