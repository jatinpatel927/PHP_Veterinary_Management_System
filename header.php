<?php


if(isset($_SESSION['login']) && $_SESSION['login'] == true)
  {
    $login = true;
    $uname = $_SESSION['user'];
  }
  else
  {
    $login  = false;
    
  }
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="./img/logo.png" width="60px" style="border-radius:20px ;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="feedback.php">Feedback</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            infomation          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

            <li><a class="dropdown-item" href="appointment.php">Appointment</a></li>

            <?php
            if($login == true)
            {
               echo '<li><a class="dropdown-item" href="logout.php">Logout</a></li>';
            }
            else
            {
               echo '<li><a class="dropdown-item" href="login.php">Login</a></li>';
            }
            ?>
            
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="signup.php">Sign Up</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin/login.php">Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="oparator/login.php">Operator</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

