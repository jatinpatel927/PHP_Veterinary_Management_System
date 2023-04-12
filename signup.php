<?php require 'database/connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" type="text/css" href="bootstrap-5.1.3-dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="LoginForm/LoginForm/style.css"
</head>
<body>
    <!-- <form action="/v-managament/signup.php" method="post">
        <h1>Signup</h1>
        <div class="form-group">
            <input type="text" name="fname" id="fname" placeholder="Fullname">
        </div>
        <div class="form-group">
            <input type="text" name="email" id="email" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="text" name="phone" id="phone" placeholder="Mobile Number">
        </div>
        <div class="form-group">
            <input type="text" name="user" id="user" placeholder="UserName">
        </div>
        <div class="form-group">
            <input type="text" name="pass" id="pass" placeholder="Password">
        </div>
        <div class="form-group">
             <input type="text" name="fname" id="fname" placeholder="Enter Fullname"> 
            <textarea name="address" rows="10" placeholder="Address"></textarea>
        </div>
        <div class="form-group">
            <input type="text" name="fname" id="fname" placeholder="Enter Fullname"> 
            <button type="submit" name="submit"  class="btn btn-success">Signup</button>
        </div> 
    </form> -->
    <div class="wrapper">
      <div class="title">Signup Form</div>
      <form action="" method="post">
        <div class="field">
          <input type="text" name="fname" id="fname" placeholder="Fullname">
          <label>Email Address</label>
        </div>
        <div class="field">
        <input type="text" name="email" id="email" placeholder="Email">
          <label>Password</label>
        </div>
        <div class="field">
        <input type="text" name="phone" id="phone" placeholder="Mobile Number">
          <label>Email Address</label>
        </div>
        <div class="field">
        <input type="text" name="user" id="user" placeholder="UserName">
          <label>Email Address</label>
        </div>
        <div class="field">
        <input type="text" name="pass" id="pass" placeholder="Password">
          <label>Email Address</label>
        </div>
        <div class="content">
          <div class="checkbox">
            <input type="checkbox" id="remember-me">
            <label for="remember-me">Remember me</label>
          </div>
          <div class="pass-link"><a href="#">Forgot password?</a></div>
        </div>
        <div class="field">
          <input type="submit" name="submit" value="Signup">
        </div>
        <!-- <div class="signup-link">Not a member? <a href="#">Signup now</a></div> -->
      </form>
    </div>
    
</body>
     <script src="bootstrap-5.1.3-dist/js/bootstrap.min.js">
        </script>
</html>
<?php
 
 if($_SERVER["REQUEST_METHOD"] == "POST")
 {
    $fname = $_POST["fname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $user = $_POST["user"];
    $pass = $_POST["pass"];
   if(isset($_POST["submit"])){
    if($fname == !"" && $email == !"" && $phone == !"" && $user == !"" && $pass == !"")
    {
      
        $exist = "SELECT * FROM `users` WHERE username='$user' AND password='$pass'";
        $run = mysqli_query($con,$exist);
        if(mysqli_num_rows($run) > 0)
        {
            echo "<script>alert('UserName and Password Already Exist')</script>";
        }
        else
        {
            $query_insert = "INSERT INTO `users` (`fullname`, `email`, `phone`, `username`, `password`, `date`) VALUES ('$fname', '$email', '$phone', '$user', '$pass', current_timestamp());";
            $run_query = mysqli_query($conn, $query_insert);
            echo "<script>alert('Signup Successfully Now You Login in This website')</script>";
            // echo "<script>header('location:login.php')</script>";
            header('location:login.php');

        }
      } else {
        echo "<script>alert('Your Data is Empty || Enter Your Data')</script>";
      }
    }
}



?>