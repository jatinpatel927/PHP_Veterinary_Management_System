<?php

if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
  $loggedin = true;
} else {
  $loggedin = false;}

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="../img/logo.png" width="50px" style="border-radius:10px ;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/v-managament/oparator/index.php">Home</a>
        </li>
        <?php

if ($loggedin == true) {
  echo '<li class="nav-item">
  <a class="nav-link active" aria-current="page" href="/v-managament/oparator/logout.php">Logout</a>
</li>';
} else {
  echo '<li class="nav-item">
  <a class="nav-link active" aria-current="page" href="/v-managament/oparator/login.php">Login</a>
</li>';
}




?>
<li class="nav-item">
  <a class="nav-link active" aria-current="page" href="appointment-details.php">Appointment-Details</a>
</li>
        
        <li class="nav-item">
          <a class="nav-link" href="medicine.php">Medicines-Store</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="appointment-details.php">Appointment-Details</a></li>
            <!-- <li><a class="dropdown-item" href="appointment-treatment.php">Appointment-Treatment</a></li> -->
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign Up</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="info-send.php">Information-Send</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>