<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" type="text/css" href="assets/css/userstyle.css">
<div class="wait overlay">
    <div class="loader"></div>
</div>
<style>
.input-borders{
    border-radius:30px;
}
</style>


            <div class="main">

            <form id="signup_form"  class="login100-form" role="form" method="post" action=" ">
              <div class="billing-details jumbotron">
                                <div class="section-title">
                                    <h2 class="login100-form-title p-b-49" >Doctor Login</h2>
                                </div>
                                <div class="form-group ">

                                <div class="form-group">
                                    <input class="input form-control input-borders" type="email" name="email"  placeholder="Email">
                                </div></br>

                              </div>

                                <div class="form-group">
                                    <input class="input form-control input-borders" type="password" name="password" id="password" placeholder="password">
                                </div></br>

                                </div>

                                <button type="submit" class="primary-btn" id="cf-submit" name="submit">Submit</button>
                                <div class="texpad">
                                  <ul>
                                  <li><a href="login-patient.php" class="bt"><span class="d-none d-md-inline"></span>Patient Login</a></li>
                                <li><a href="signup/login.php" class="bt"><span class="d-none d-md-inline"></span>Hospital Login</a></li>
                              </ul>
                               </div>
            </form>
      </div>
     <div>


     </div>


    </body>
  </html>


  <?php
  include "db.php";
  session_start();
  /**
   * login script is begin here
   * if user given credential matches successfully with the data available in database then we will echo string login_success
   * login_success string will go back to called Anonymous funtion $("#login").click()
   */
  if (isset($_POST["email"]) && isset($_POST["password"])) {

  	$email = mysqli_real_escape_string($con,$_POST["email"]);
  	$password = $_POST["password"];
  	$sql = "SELECT * FROM info_doc WHERE email = '$email' AND password = '$password'";
  	$run_query = mysqli_query($con,$sql);
  	$count = mysqli_num_rows($run_query);
    $row = mysqli_fetch_array($run_query);
  	$_SESSION["uid"] = $row["id_doc"];
  	$_SESSION["name"] = $row["f_name"];
  	$ip_add = getenv("REMOTE_ADDR");
    /**
     * we have created a cookie in login_form.php page so if that cookie is available means user is not login
  	 * if user record is available in database then $count will be equal to 1
     */
  	if ($count == 1) {

  			//if user is login from page we will send login_success
  			echo "login_success";
  			$BackToMyPage = $_SERVER['HTTP_REFERER'];
  				if (!isset($BackToMyPage)) {
  					header('Location: '.$BackToMyPage);
  					echo"<script type='text/javascript'>
  					</script>";
  				} else {
  					header('Location: doctor-index.php'); // default page
  				}
              exit;
  		}

}

  ?>
