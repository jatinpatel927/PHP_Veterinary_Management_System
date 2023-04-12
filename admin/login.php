<?php 
//showe on alert box error and success
$login = false;
$showerror = false;

if($_SERVER["REQUEST_METHOD"] == "POST")
{
 include 'database/connect.php';
 $adminname=$_POST['adminname'];
 $password=$_POST['pass'];
 $exists=false;

 
      // $query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
      $query = "SELECT * FROM `admin` WHERE adminname='$adminname'";
      $run = mysqli_query($con,$query);
      $num = mysqli_num_rows($run);
      if($num == 1)
      {
          while($row=mysqli_fetch_assoc($run)){
              if($password == $row['password']){
                  $login = true;
                  session_start();
                  $_SESSION['adminname'] = $adminname;
                  $_SESSION['loggedin'] = true;
                  echo "<script>alert('You Are Successfully Login')</script>";
                  header('location:index.php');
                  ?>
                    <!-- <script>
                      window.location.href='index.php';
                      </script> -->
                  <?php

              }
              else
              {
                  $showerror = "Password was rong entare prafact password";
              }
          }
      }
    
     else
     {
          $showerror = "Inavaild account signup to account";
              
     }
}
 

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Form Design | CodeLab</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="title">Login Form</div>
      <form action="" method="post">
        <div class="field">
          <!-- <input type="text" required> -->
          <input class="form-control"  type="text" name="adminname">
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
          <!-- <div class="pass-link"><a href="#">Forgot password?</a></div> -->
        </div>
        <div class="field">
          <input type="submit" name="submit" value="Login">
        </div>
        <!-- <div class="signup-link">Not a member? <a href="#">Signup now</a></div> -->
      </form>
    </div>

  </body>
</html>
<?php
//  if($_SERVER["REQUEST_METHOD"] == "POST")
//  {
//    $user = trim($_POST['user']);
//    $pass = trim($_POST['pass']);
//    if(isset($_POST['submit']))
//    {
     
//    $select_user = "SELECT * FROM `admin` WHERE adminname='$user' And password='$pass'";
//    $user_run = mysqli_query($con,$select_user);
//    if(mysqli_num_rows($user_run) == 1)
//    {
//        while($row = mysqli_fetch_assoc($user_run))
//        {
//            session_start();
//           $_SESSION['user'] = $user;
//           $_SESSION['login'] = true;
//           echo "<script>alert('Admin Successfully')</script>";
//           ?>
          <!-- header('location:index.php'); -->
          <script>
//                window.location.href='index.php';
//             </script>
           <?php
//        } 

//    }
//    else
//    {
//      echo "<script>alert('Admin Name not Exist')</script>";
//    }
//  }
// }
?>
