<?php
session_start();
  require 'database/connect.php';

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
    <form action="" method="post">
    <h1>Appointment</h1>
<div class="mb-3">
  <input type="text" class="form-control" name="ownar" id="ownar" placeholder="Ownar Name">
</div>
<div class="mb-3">
  <textarea class="form-control" name="address" id="address" rows="3" placeholder="Address"></textarea>
</div><div class="mb-3">
  <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone Number">
</div>
<div class="mb-3">
  <input type="email" class="form-control" id="email" name="email" placeholder="Email">
</div>
<div class="mb-3">
<select class="form-select" name="animal" id="animal" aria-label="Default select example">
  <option  value="0">Selct Animal...</option>
  <?php
    $a_query = "SELECT id,animal_name FROM animal";
    $a_run =mysqli_query($con,$a_query);
    if(mysqli_num_rows($a_run) > 0)
    {
      while($a_row = mysqli_fetch_assoc($a_run))
      {
            echo '<option value='.$a_row['id'].'>'.$a_row['animal_name'].'</option>';       
      }
    }
  ?>
  
</select>
</div>
<div class="mb-3">
<select class="form-select" name="c_animal" id="c_animal" aria-label="Default select example">
<option  value="0">Select Animal Categorys..</option>
</select>
</div>
<div class="mb-3">
  <input type="text" class="form-control" name="a_name" id="a_name" placeholder="Animal Name">
</div>
<div class="mb-3">
<select class="form-select" name="dease" id="dease" aria-label="Default select example">
<option  value="0">Select Dease...</option>
  <?php
    $d_query = "SELECT id,dease_name FROM dease";
    $d_run =mysqli_query($con,$d_query);
    if(mysqli_num_rows($d_run) > 0)
    {
      while($d_row = mysqli_fetch_assoc($d_run))
      {
            echo '<option value='.$d_row['id'].'>'.$d_row['dease_name'].'</option>';       
      }
    }
  ?>
</select>
</div>
<div class="mb-3">
<select class="form-select" name="syt" id="syt" aria-label="Default select example">
  <option  value="0">Select symptoms</option>
</select>
</div>
<div class="md-3">
<button type="submit" name="submit" class="btn btn-success">Success</button>

</div>
    </form>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
  <script src="/v-managament/jquery/jquery.js"></script>
    <!-- jquery file -->
    <script>
    $(document).ready(function() {
            jQuery('#animal').change(function() {
                var id = jQuery(this).val();
                                  
                    if(id == '0')
                    {
                      jQuery('#c_animal').html("<option value='0'>Select Animal Category...</option>");
                    }
                    else{
                      jQuery('#c_animal').html("<option value='0'>Select Animal Category...</option>");
                    jQuery.ajax({
                        type: 'post',
                        url: 'data.php',
                        data: 'id=' + id,
                        success: function(result) {
                            jQuery('#c_animal').append(result);
                        
                    
            }});}
            });
        });
        //symptoms
        $(document).ready(function() {
            jQuery('#dease').change(function() {
                var id = jQuery(this).val();
                                  
                    if(id == '0')
                    {
                      jQuery('#syt').html("<option value='0'>Select Symptoms...</option>");
                    }
                    else{
                      jQuery('#syt').html("<option value='0'>Select Symptoms...</option>");
                    jQuery.ajax({
                        type: 'post',
                        url: 'data.php',
                        data: 'd_id=' + id,
                        success: function(result) {
                            jQuery('#syt').append(result);
                        
                    
            }});}
            });
        });
        </script>
</html>
<?php
if($login == true){
  $query = "SELECT id FROM `users` WHERE username='$uname'";
  $query_run = mysqli_query($con,$query);
  if(mysqli_num_rows($query_run) > 0)
  {
    while($q_row = mysqli_fetch_assoc($query_run))
    {
       echo $u_id = $q_row['id'];
    }
}  }
 if($_SERVER["REQUEST_METHOD"] == "POST")
{
 /* if($login == true){
  $query = "SELECT id FROM `users` WHERE username='$uname'";
  $query_run = mysqli_query($con,$query);
  if(mysqli_num_rows($query_run) > 0)
  {
    while($q_row = mysqli_fetch_assoc($query_run))
    {
       $u_id = $q_row['id'];
    }
}  }*/

  $ownar = trim($_POST['ownar']);
  $address = trim($_POST['address']);
  $phone = trim($_POST['phone']);
  $email = trim($_POST['email']);
  $animal = $_POST['animal'];
  $c_animal = $_POST['c_animal'];
  $animal_name = trim($_POST['a_name']);
  $dease = $_POST['dease'];
  $syt = $_POST['syt'];

  if(isset($_POST['submit']))
  {
     if($login == true)
     {
            
       
       if($ownar == !"" && $address == !"" && $phone == !"" && $email == !"" && $animal == !0 && $c_animal == !0 && $animal_name ==!"" && $dease == !0 && $syt == !0)
        {
          // $ownar_select = "SELECT * FROM appointment WHERE owanar_name='$ownar'";
          // $ownar_run = mysqli_query($con,$ownar_select);
          // if(mysqli_num_rows($ownar_run) == 1)
          // {
          //   echo "<script>alert('Your Appointment is Already Exist ')</script>";
          //       echo "<a href='view.php'>View Appointment</a>";
          // }
          // else
          // {
                 $link = 'view.php'; 
                 $appoinment_query = "INSERT INTO `appointment` (`u_id`, `owanar_name`, `address`, `phone`, `email`, `animal_id`, `c_animal_id`, `animalname`, `dease`, `symtoms`, `date`) 
                 VALUES ('$u_id', '$ownar', '$address', '$phone', '$email', '$animal', '$c_animal', '$animal_name', '$dease', '$syt', current_timestamp())";
                 $appoinment_query_run = mysqli_query($con,$appoinment_query);
                 
                 if($appoinment_query_run){

                  echo "<script>alert('Your Appointment is Ready')</script>";
                  echo "<a href='view.php'>View Appointment</a>";
                }
                else{
                 echo "<script>alert('Your Appointment is Not Ready ')</script>";
                }
               }
              
          }
         else
           {
              echo "<script>alert('Your Data is Empty')</script>";
          }
     }
     else
     {
      echo "<script>alert('You Are not Login In this WebSit || Now You Are Login')</script>";
     }
  }




?>