<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Form Design | CodeLab</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="admin/img/logo.png" />
  </head>
  <body>
    <div class="wrapper">
      <div class="title">Login Form</div>
      <form action="#">
        <div class="field">
          <!-- <input type="text" required> -->
          <input class="form-control"  type="text" name="user">
          <label>Email Address</label>
        </div>
        <div class="field">
        <input class="form-control" type="text" name="pass">
          <!-- <input type="password" required> -->
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
          <input type="submit" value="Login">
        </div>
        <div class="signup-link">Not a member? <a href="#">Signup now</a></div>
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
