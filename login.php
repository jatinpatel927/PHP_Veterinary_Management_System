<?php require 'database/connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="LoginForm/LoginForm/style.css">
</head>
<body>
<div class="col-md-12">

<!-- <form class="main_form" action="" method="post">
    <div class="row">
        <div class=" col-md-12">
            <input class="form-control" placeholder="UserName" type="text" name="user">
        </div>
        <div class=" col-md-12">
            <input class="form-control" placeholder="Password" type="text" name="pass">
        </div>
        <div class=" col-md-12">
            <button class="send" type="submit" name="submit">Login</button>
        </div>
        <div class=" col-md-12">
            <p>Create New Account <a href="signup.php">Click Here</a>
        </div>
    </div>
</form>
</div> -->
<div class="wrapper">
      <div class="title">Login Form</div>
      <form action="" method="post">
        <div class="field">
        <input class="form-control"  type="text" name="user">
          <label>UserName</label>
        </div>
        <div class="field">
        <input class="form-control" type="text" name="pass">
          <label>Password</label>
        </div>
        <div class="content">
          <div class="checkbox">
            <input type="checkbox" id="remember-me">
            <label for="remember-me">Remember me</label>
          </div>
          <div class="pass-link"><a href="#">Forgot password?</a></div>
        </div>
        <div class="field">
          <input type="submit" name="submit" value="Login">
        </div>
        <div class="signup-link">Not a member? <a href="signup.php">Signup now</a></div>
      </form>
    </div>
</body>
</html>
<?php
 if($_SERVER["REQUEST_METHOD"] == "POST")
 {
   $user = trim($_POST['user']);
   $pass = trim($_POST['pass']);
   if(isset($_POST['submit']))
   {
     
   $select_user = "SELECT * FROM `users` WHERE username='$user' And password='$pass'";
   $user_run = mysqli_query($con,$select_user);
   if(mysqli_num_rows($user_run) == 1)
   {
       while($row = mysqli_fetch_assoc($user_run))
       {
           session_start();
          $_SESSION['user'] = $user;
          $_SESSION['login'] = true;
          header('location:index.php');
       } 

   }
   else
   {
     echo "<script>alert('UserName not Exist')</script>";
   }
 }
}
?>