<?php
session_start();
include('includes/db/db.php');
include("includes/template/Header.php");
include("includes/template/NavBar.php");

$operation = "All";
if (isset($_GET['operation'])) {
  $operation = $_GET['operation'];
}

if($operation=="All"){

  $idErr = $userErr = $emailErr = $passErr = "";
  $id = $user = $email = $pass = "";

  if ($_SERVER['REQUEST_METHOD']=="POST"){
    $id = $_POST['id'];
    $user = $_POST['user'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if (empty($id)) {
      $idErr = "Please Enter ID";
  } elseif (empty($user)) {
      $userErr = "Please Enter User Name";
  } elseif (empty($email)) {
      $emailErr = "Please Enter E-mail";
  } elseif (empty($pass)) {
      $passErr = "Please Enter Password";
  } else {
      $_SESSION['id'] = $id;
      $_SESSION['user'] = $user;
      $_SESSION['email'] = $email;
      $_SESSION['pass'] = $pass;
      header("Location:index.php?operation=saveNew");
  }

  }

  ?>
<!-------Banner Start------->
<section class="banner" data-scroll-index='0'>
  <div class="banner-overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-12">
          <div class="banner-text">
            <h2 class="white">Best App</h2>
            <p class="banner-text white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit neque massa, sit amet tristique ante porta ut. In sodales et justo vel vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
            <ul>
              <li><a href="#"><img src="includes/assets/images/appstore.png" class="wow fadeInUp" data-wow-delay="0.4s"/></a></li>
              <li><a href="#"><img src="includes/assets/images/playstore.png" class="wow fadeInUp" data-wow-delay="0.7s"/></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-sm-12"> <img src="includes/assets/images/iphone-screen.png" class="img-fluid wow fadeInUp"/> </div>
      </div>
    </div>
  </div>
  <span class="svg-wave"> <img class="svg-hero" src="includes/assets/images/applight-wave.svg"> </span> </section>

  <!-------Banner End-------> 
  
  <!-------Video Start------->
  <section class="video-section prelative text-center white mt-5 pt-5">
    <div class="section-padding video-overlay">
      <div class="container">
        <h3>Watch Now</h3>
        <i class="fa fa-play" id="video-icon" aria-hidden="true"></i>
        <div class="video-popup">
        <div class="video-src">
          <div class="iframe-src">
            <iframe src="https://www.youtube.com/embed/Ku52zNnft8k?rel=0&amp;showinfo=0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-------Video End-------> 

<!-------Team Start------->
<section class="team section-padding" data-scroll-index='3'>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center">
          <h3>Our Team</h3>
          <span class="line"></span>
          <p>Sed quis nisi nisi. Proin consectetur porttitor dui sit amet viverra. Fusce sit amet lorem faucibus, vestibulum ante in, pharetra ante.</p>
        </div>
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-4">
              <div class="team-detail wow bounce" data-wow-delay="0.2s"> <img src="includes/assets/images/team-1.jpg" class="img-fluid"/>
                <h4>John Doe</h4>
                <p>Marketing Specialist</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-detail wow bounce" data-wow-delay="0.4s"> <img src="includes/assets/images/user2.jpg" class="img-fluid"/>
                <h4>Yogesh Singh</h4>
                <p>CEO & Founder</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-detail wow bounce" data-wow-delay="0.6s"> <img src="includes/assets/images/user3.jpg" class="img-fluid"/>
                <h4>Nisha Sharma</h4>
                <p>Web Developer</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-------Team End-------> 

<!-------Testimonial Start------->
<section class="testimonial section-padding" data-scroll-index='4'>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center white">
          <h3>Testimonials</h3>
          <span class="line"></span>
          <p class="white">Sed quis nisi nisi. Proin consectetur porttitor dui sit amet viverra. Fusce sit amet lorem faucibus, vestibulum ante in, pharetra ante.</p>
        </div>
    
      <div class="section-content">
        <div class="row">
          <div class="offset-md-2 col-md-8 col-sm-12">
            <div class="slider">
              <div class="slider-item">
                <div class="test-img"><img src="includes/assets/images/team-1.jpg" alt="Placeholder" width="157" height="157"></div>
                <div class="test-text"><span class="title"><span>John Michal</span> Digital Designer</span> Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam eratvo lutpat.</div>
              </div>
              <div class="slider-item">
                <div class="test-img"><img src="includes/assets/images/user3.jpg" alt="Placeholder" width="157" height="157"></div>
                <div class="test-text"><span class="title"><span>Steve Smith</span> App User</span> Euismod tincidunt ut laoreet dolore magna aliquam eratvo lutpat. Ut wisi enim ad minim veniam, quis nostrud v</div>
              </div>
              <div class="slider-item">
                <div class="test-img"><img src="includes/assets/images/user3.jpg" alt="Placeholder" width="157" height="157"></div>
                <div class="test-text"><span class="title"><span>Gordon Shaw</span> Blogger</span> Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam eratvo lutpat. Ut wisi enim ad minim veniam, quis nostrud v</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</section>

<!-------Testimonial End-------> 

<!-------Register Start------->
<section class="contact section-padding" data-scroll-index='6'>
<?php
                if (isset($_SESSION['Register_err'])) {
                    echo "<h4 class='alert alert-danger text-center'>" . $_SESSION['Register_err'] . "</h4>";
                    unset($_SESSION['Register_err']);
                }
                ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center">
          <h3>Register</h3>
          <span class="line"></span>
          <p>Sed quis nisi nisi. Proin consectetur porttitor dui sit amet viverra. Fusce sit amet lorem faucibus, vestibulum ante in, pharetra ante.</p>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8">
              <form id="contact_form" action="index.php" method="post">
                <div class="row">
                    <div class="col">
                        <input type="text"  class="form-input w-100" name="id" placeholder="ID" value="<?php echo $id; ?>">
                        <h5 class="text-center" style="color:red;"><?php echo $idErr; ?></h5>

                    </div>
                    <div class="col">
                      <input type="text"  class="form-input w-100" name="user" placeholder="User-Name" value="<?php echo $user; ?>">
                      <h5 class="text-center" style="color:red;"><?php echo $userErr; ?></h5>

                    </div>
                </div>
                <input type="email"  class="form-input w-100 mt-4" name="email" placeholder="E-mail"  value="<?php echo $email; ?>">
                <h5 class="text-center" style="color:red;"><?php echo $emailErr; ?></h5>


                <input type="password"  class="form-input w-100 mt-4" name="pass" placeholder="Password" value="<?php echo $pass; ?>">
                <h5 class="text-center" style="color:red;"><?php echo $passErr; ?></h5>


                <input class="btn-grad w-100 text-uppercase mt-4" type="submit" ></input>
              </form>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 ">
              <div class="contact-info white">
                <div class="contact-item media"> <i class="fa fa-map-marker-alt media-left media-right-margin"></i>
                  <div class="media-body">
                    <p class="text-uppercase">Address</p>
                    <p class="text-uppercase">Mansoura, Egypt</p>
                  </div>
                </div>
                <div class="contact-item media"> <i class="fa fa-mobile media-left media-right-margin"></i>
                  <div class="media-body">
                    <p class="text-uppercase">Phone</p>
                    <p class="text-uppercase"><a class="text-white" href="#">01030939849</a> </p>
                  </div>
                </div>
                <div class="contact-item media"> <i class="fa fa-envelope media-left media-right-margin"></i>
                  <div class="media-body">
                    <p class="text-uppercase">E-mail</p>
                    <p class="text-uppercase"><a class="text-white" href="#">Mohammed@gmail.com</a> </p>
                  </div>
                </div>
                <div class="contact-item media"> <i class="fa fa-clock media-left media-right-margin"></i>
                  <div class="media-body">
                    <p class="text-uppercase">Working Hours</p>
                    <p class="text-uppercase">Mon-Fri 9.00 AM to 5.00PM.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-------Register End-------> 

<?php
} elseif ($operation == "saveNew"){
    $id = $_SESSION['id'];
    $user = $_SESSION['user'];
    $email = $_SESSION['email'];
    $pass = $_SESSION['pass'];

    try {
      $query = $connect->prepare("INSERT INTO users 
          (user_id,username,email,`password`,`status`,`role`,created_at)
          VALUES(?,?,?,?,'1','user',now())
      ");
      $query->execute(array($id, $user, $email, $pass));
      $_SESSION['user_access'] = $email;
      header("Location:index.php");
      
  } catch (PDOException $e) {
      $_SESSION['Register_err'] = "Duplicated ID";
      header("Location:index.php?operation=All");
  }

  

}

?>



<?php
include("includes/template/Footer.php");
?>