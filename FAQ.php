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

<!-------FAQ Start------->
<section class="faq section-padding prelative" data-scroll-index='5'>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center mt-5">
          <h3>Frequently Asked Questions</h3>
          <span class="line"></span>
          <p>Sed quis nisi nisi. Proin consectetur porttitor dui sit amet viverra. Fusce sit amet lorem faucibus, vestibulum ante in, pharetra ante.</p>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.2s">
              <h4>Nam tellus felis, dignissim quis dui ?</h4>
              <p>Suspendisse fermentum placerat enim, at pellentesque augue. Nullam elit est, ultricies et tellus ac, euismod placerat orci. Donec commodo.</p>
            </div>
            <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.2s">
              <h4>Mauris scelerisque, dui non faucibus vulputate ?</h4>
              <p>Sed tempus in neque ac rhoncus. Phasellus vehicula, erat tempor malesuada egestas, mauris tellus malesuada erat, at vestibulum nulla ex et lectus. Nullam elit est, ultricies et tellus ac, euismod placerat orci.</p>
            </div>
            <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.4s">
              <h4>Nullam elit est, ultricies et tellus ac ?</h4>
              <p>Ut vestibulum euismod aliquet. Quisque nec malesuada nibh. Vivamus euismod nunc eu leo faucibus, vel elementum justo posuere. In sed varius nisi. Curabitur id porta ipsum, et vestibulum dui.</p>
            </div>
            <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.4s">
              <h4>Suspendisse fermentum placerat enim, at pellentesque augue elit est ?</h4>
              <p>Vivamus euismod nunc eu leo faucibus, vel elementum justo posuere. In sed varius nisi.</p>
            </div>
            <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.6s">
              <h4>Ut vestibulum euismod aliquet. Quisque nec malesuada nibh ?</h4>
              <p>Suspendisse fermentum placerat enim, at pellentesque augue. Nullam elit est, ultricies et tellus ac, euismod placerat orci. Donec commodo dapibus congue.</p>
            </div>
            <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.6s">
              <h4>Donec commodo dapibus congue ?</h4>
              <p>Nullam elit est, ultricies et tellus ac, euismod placerat orci fermentum placerat enim, at pellentesque augue. Nullam elit est, ultricies et tellus ac, euismod placerat orci. Donec commodo dapibus congue.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-------FAQ End-------> 

<?php
include("includes/template/Footer.php");
?>