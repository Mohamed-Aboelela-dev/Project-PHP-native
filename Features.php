<?php
include("includes/template/Header.php");
?>
<style>
.navbar{
    background: #fff;
	-webkit-box-shadow: 0 1px 8px 3px rgba(0, 0, 0, 0.0509803922);
	box-shadow: 0 1px 8px 3px rgba(0, 0, 0, 0.0509803922);
	-webkit-transition: all .4s ease;
	transition: all .4s ease;
}
.navbar .navbar-nav > li > a {
	color: #333;
}
.navbar .navbar-brand img {
	-webkit-transform: scale(1.03) !important;
	transform: scale(1.03) !important;
}
.navbar .navbar-toggler {
	cursor: pointer;
}
.navbar .navbar-toggler span {
	color: #333;
}
.navbar .nav-link:hover:after {
	background-color: #2388ed;
}
.navbar .active {
	position: relative;
}
</style>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
  <div class="container"> <a class="navbar-brand " href="index.php"> <img src="includes/assets/images/logo-black.png" alt="logo" class="logo-1"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="fas fa-bars"></span> </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"> <a class="nav-link" href="index.php">Home</a> </li>
        <li class="nav-item"> <a class="nav-link" href="about.php" >About</a> </li>
        <li class="nav-item"> <a class="nav-link" href="Features.php" >Features</a> </li>
        <li class="nav-item"> <a class="nav-link" href="FAQ.php" >Faq</a> </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar --> 

<!-------Features Start------->
<section class="feature section-padding " data-scroll-index='2'>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center mt-5">
          <h3>Features</h3>
          <span class="line"></span>
          <p>Sed quis nisi nisi. Proin consectetur porttitor dui sit amet viverra. Fusce sit amet lorem faucibus, vestibulum ante in, pharetra ante.</p>
        </div>
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-4 col-sm-12">
              <div class="media single-feature wow fadeInUp" data-wow-delay="0.2s">
                <div class="media-body text-right media-right-margin">
                  <h5>Fast Processing</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididugnt ut labore</p>
                </div>
                <div class="media-right icon-border"> <span class="fa fa-bolt" aria-hidden="true"></span> </div>
              </div>
              <div class="media single-feature wow fadeInUp" data-wow-delay="0.4s">
                <div class="media-body text-right media-right-margin">
                  <h5>Low Power Consuming</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididugnt ut labore</p>
                </div>
                <div class="media-right icon-border"> <span class="fa fa-battery-full" aria-hidden="true"></span> </div>
              </div>
              <div class="media single-feature wow fadeInUp" data-wow-delay="0.6s">
                <div class="media-body text-right media-right-margin">
                  <h5>Wifi Compatibility</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididugnt ut labore</p>
                </div>
                <div class="media-right icon-border"> <span class="fa fa-wifi" aria-hidden="true"></span> </div>
              </div>
            </div>
            <div class="col-md-4 d-none d-md-block d-lg-block">
              <div class="feature-mobile"> <img src="includes/assets/images/iphone-screen-with-shadow.png" class="img-fluid wow fadeInUp"/> </div>
            </div>
            <div class="col-md-4 col-sm-12">
              <div class="media single-feature wow fadeInUp" data-wow-delay="0.2s">
                <div class="media-left icon-border media-right-margin"> <span class="fa fa-check-double" aria-hidden="true"></span> </div>
                <div class="media-body text-left">
                  <h5>Regular Updates</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididugnt ut labore</p>
                </div>
              </div>
              <div class="media single-feature wow fadeInUp" data-wow-delay="0.4s">
                <div class="media-left icon-border media-right-margin"> <span class="fa fa-dollar-sign" aria-hidden="true"></span> </div>
                <div class="media-body text-left">
                  <h5>Save Money</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididugnt ut labore</p>
                </div>
              </div>
              <div class="media single-feature wow fadeInUp" data-wow-delay="0.6s">
                <div class="media-left icon-border media-right-margin"> <span class="fa fa-hdd" aria-hidden="true"></span> </div>
                <div class="media-body text-left">
                  <h5>Unlimited Storage</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididugnt ut labore</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-------Features End-------> 
<?php
include("includes/template/Footer.php");
?>