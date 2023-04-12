
<?php session_start(); require 'database/connect.php';

if(isset($_SESSION['login']) && $_SESSION['login'] == true)
{
  $login = true;
  $uname = $_SESSION['user'];

  $u = "SELECT id FROM users WHERE username='$uname'";
  $r = mysqli_query($con,$u);
  $ro = mysqli_fetch_assoc($r);
 $u_id =  $ro['id'];

}
else
{
  $login  = false;
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <?php require 'header.php'; ?>
    <h1>View Appoinment</h1>
    <?php
        $query = "SELECT * FROM appointment WHERE u_id='$u_id'";
       $run = mysqli_query($con,$query);
       if(mysqli_num_rows($run)){
       while($row = mysqli_fetch_assoc($run))
       {
          $ownar = $row['owanar_name'];
          $address = $row['address'];
          $phone = $row['phone'];
          $email = $row['email'];
          $animalname = $row['animalname'];
          $date = $row['date'];
       
    ?>
    <div class="col-md-5 offset-md-1 border rounded mt-5 bg-white h-25">
        <div class="pt-4">
            <h6>Appointment Details</h6>
            <hr>
            <div class="row price-details">
                <div class="col-md-6">
                    <h6>owanar_name</h6>
                    <h6>address</h6>
                    <h6>phone</h6>
                    <h6>email</h6>
                    <h6>animalname</h6>
                    <h6>date</h6>
                </div>
                <div class="col-md-6">
                    <h6><?php echo $ownar; ?></h6>
                    <h6><?php echo $address; ?></h6>
                    <h6><?php echo $phone; ?></h6>
                    <h6><?php echo $email; ?></h6>
                    <h6><?php echo $animalname; ?></h6>
                    <h6><?php echo $date; ?></h6>
                    <button class="btn btn-primary" onclick="window.print.apply()">print</button>
                </div>
            </div>
        </div>
    </div>
    <?php } } ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>