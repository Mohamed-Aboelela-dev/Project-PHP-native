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
        <li class="nav-item"> <a class="nav-link" href="Features.php">Features</a> </li>
        <li class="nav-item"> <a class="nav-link" href="FAQ.php" >Faq</a> </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar --> 

<!-------About End------->

<section class="about section-padding prelative" data-scroll-index='1'>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center mt-5">
          <h3>About</h3>
          <span class="line"></span>
          <p>Sed quis nisi nisi. Proin consectetur porttitor dui sit amet viverra. Fusce sit amet lorem faucibus, vestibulum ante in, pharetra ante.</p>
        </div>
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-4">
              <div class="icon-box wow fadeInUp" data-wow-delay="0.2s"> <i class="fa fa-life-ring" aria-hidden="true"></i>
                <h5>Support</h5>
                <p>Phasellus lobortis justo a magna facilisis, in commodo tellus rutrum. Sed vitae condimentum nulla.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="icon-box wow fadeInUp" data-wow-delay="0.4s"> <i class="fa fa-mobile" aria-hidden="true"></i>
                <h5>Cross Platform</h5>
                <p>Phasellus lobortis justo a magna facilisis, in commodo tellus rutrum. Sed vitae condimentum nulla.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="icon-box wow fadeInUp" data-wow-delay="0.6s"> <i class="fa fa-bolt" aria-hidden="true"></i>
                <h5>Fast</h5>
                <p>Phasellus lobortis justo a magna facilisis, in commodo tellus rutrum. Sed vitae condimentum nulla.</p>
              </div>
            </div>
          </div>
          <a href="#" class="about-btn">Learn More</a> </div>
      </div>
    </div>
  </div>
</section>
<!-------About End-------> 
<?php
include("includes/template/Footer.php");
?>