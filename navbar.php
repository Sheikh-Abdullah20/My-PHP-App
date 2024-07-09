<?php


echo'
<nav class="navbar navbar-expand-lg" style=" background-color: white !important;
    box-shadow: 10px 10px 30px rgb(5, 601, 455) !important;">
  <div class="container-fluid">';
  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ==true){
    echo '<a class="navbar-brand " href="home.php">SMA</a>';
  }
    
    echo '<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">';
      if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
        echo '<li class="nav-item ">
        <a class="nav-link" aria-current="page" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>';
    
      }
    echo '</ul>';

    if(isset($_SESSION['loggedin']) == false ) {

      echo '<a href="loginPage.php" class="btn btn-outline-warning bg-dark mx">Login</a>';
      echo '<a href="signupPage.php" class="btn btn-outline-warning bg-dark mx-2">Signup</a>';
    }


   echo '</div>
  </div>
</nav>';

?>