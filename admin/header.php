<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="./img/logo.png" width="50px" style="border-radius:20px ;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <!-- <a class="nav-link" href="#">Link</a> -->
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tables-list
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="user.php">Users</a></li>
            <li><a class="dropdown-item" href="appointment-success.php">Appointment-Detail Table</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="animal.php">Animal</a></li>
            <li><a class="dropdown-item" href="animal_category.php">Animal Category</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="dease.php">Dease</a></li>
            <li><a class="dropdown-item" href="symptoms.php">Symptoms</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="medicine.php">Medicine</a></li>
            <li><a class="dropdown-item" href="treatment.php">Treatment</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="oprator.php">Oprator</a></li>
            <li><a class="dropdown-item" href="oprator-info.php">Oprator Info</a></li>
            <li><a class="dropdown-item" href="oprator-site.php">Oprator Site</a></li>
            <li><a class="dropdown-item" href="feedback.php">Feedback</a></li>
            <li><a class="dropdown-item" href="u_info.php">User info Send</a></li>
            <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <!-- <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      </form> -->
      <a href="logout.php"><button class="btn btn-outline-success" type="submit">Logout</button></a>
    </div>
  </div>
</nav>