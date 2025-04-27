<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
  <div class="container"> <a class="navbar-brand navbar-logo" href="index.php"> <img src="includes/assets/images/logo.png" alt="logo" class="logo-1"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="fas fa-bars"></span> </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="0">Home</a> </li>
        <?php
        if(isset($_SESSION['user_access'])){
          ?>
<li class="nav-item"> <a class="nav-link" href="about.php" >About</a> </li>
<li class="nav-item"> <a class="nav-link" href="Features.php" >Features</a> </li>
<li class="nav-item"> <a class="nav-link" href="FAQ.php" >Faq</a> </li>

          <?php
        }
        ?>
        <?php
        if(isset($_SESSION['user_access'])){
          echo '<li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>';
        }else{

         echo '<li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="6">Register</a> </li>';
         echo '<li class="nav-item"> <a class="nav-link" href="login.php" >Login</a> </li>';
        }
        ?>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar --> 