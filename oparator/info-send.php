<?php
session_start();

if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
    $loggedin = true;
  } else {
    $loggedin = false;
  }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  require_once 'database/connect.php';

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  if (isset($_POST['submit'])) {
    if($loggedin){
      if ($_SESSION['user'] == $name) {

        if ($name == !"" && $email == !"" && $phone == !"" && $message == !"") {
          $query_insert = "INSERT INTO `oprator_info` (`name`, `email`, `phone`, `information`, `date`) VALUES ('$name', '$email', '$phone', '$message', current_timestamp());";
          $run_query = mysqli_query($con, $query_insert);
          echo "<script>alert('Your Information is Sending')</script>";
        } else {
          echo "<script>alert('Your Data is Empty || Enter Your Information')</script>";
        }
      } else {
        echo "<script>alert('Your Oprator is Not Exist Check Your oprator')</script>";
      }
    }
  }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>

  <!--css-->
  

  <!--responsive css-->


  <!--bootstrap-->
  <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">

  <!--fontawesome bootstrap-->
  <link rel="stylesheet" href="../fontawesome-free-6.1.1-web/css/all.css">


</head>

<body>
  <?php
  require 'header.php';
  ?>
  <div class="container">
    <h1 align="center">Feedback</h1>
    <form action="" method="post">
      <div class="form-group">
        <label>name</label><br>
        <input type="text" name="name" id="name" placeholder="Enter Your User Name">
      </div>
      <div class="form-group">
        <label>Email</label><br>
        <input type="email" name="email" id="email">
      </div>
      <div class="form-group">
        <label>Phone</label><br>
        <input type="phone" name="phone" id="phone">
      </div>
      <div class="form-group">
        Information:<textarea name="message" id="message" cols="30" rows="10"></textarea>
      </div>
      <div class="form-group">
        <input type="submit" name="submit" id="submit" value="submit">
      </div>
    </form>
  </div>
</body>

</html>