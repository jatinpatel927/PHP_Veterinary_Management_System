<?php require 'database/connect.php';
 if (isset($_GET['a_id'])):
  $id = $_GET['a_id'];
  $query  = "SELECT * FROM appointment WHERE  id='$id'";
  // $app_query = "SELECT appointment.*,animal.animal_name,animal_category.c_animal_name,dease.dease_name,symptoms.syt_name FROM appointment,animal,animal_category,dease,symptoms WHERE (appointment.animal_id=animal.id AND appointment.c_animal_id=animal_category.id)"." AND (appointment.dease=dease.id AND appointment.symtoms=symptoms.id) (AND id='$id')";
  $run = mysqli_query($con, $query);
  if (mysqli_num_rows($run) > 0) {
    while ($row = mysqli_fetch_assoc($run)) {
      $owanar_name = $row['owanar_name'];
      $address   = $row['address'];
      $phone = $row['phone'];
      $email = $row['email'];
      $animal_id = $row['animal_id'];
      $anima_query = "SELECT animal_name FROM `animal` WHERE id='$animal_id'";
      $animal_run = mysqli_query($con,$anima_query);
      $animal_row = mysqli_fetch_assoc($animal_run);
           $animal = $animal_row['animal_name'];
          //  echo $animal;
          $c_animal_id = $row['c_animal_id'];
      $c_anima_query = "SELECT c_animal_name FROM `animal_category` WHERE id='$c_animal_id'";
      $c_animal_run = mysqli_query($con,$c_anima_query);
      $c_animal_row = mysqli_fetch_assoc($c_animal_run);
           $c_animal = $c_animal_row['c_animal_name'];
          //  echo $animal;
      $animalname = $row['animalname'];
      $dease_id = $row['dease'];
      $dease_query = "SELECT dease_name FROM `dease` WHERE id='$dease_id'";
      $dease_run = mysqli_query($con,$dease_query);
      $dease_row = mysqli_fetch_assoc($dease_run);
           $dease = $dease_row['dease_name'];
          //  echo $animal;
      $symtoms_id = $row['symtoms'];
      $syt_query = "SELECT syt_name FROM `symptoms` WHERE id='$symtoms_id'";
      $syt_run = mysqli_query($con,$syt_query);
      $syt_row = mysqli_fetch_assoc($syt_run);
           $symptoms = $syt_row['syt_name'];
      $date = $row['date'];
      $user = $row['u_id'];
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
        <!-- header -->
        <?php require 'header.php'; ?>
        <center>
          <div class="col-md-5 offset-md-1 border rounded mt-5 bg-white h-25">
            <div class="pt-4">
              <form action="" method="post">
              <h6>Appointment Details</h6>
              <hr>
              <div class="row price-details">
                <div class="col-md-6">
                  <h6>Owner Name:</h6>
                  <h6>Address</h6>
                  <h6>Email</h6>
                  <h6>Animal</h6>
                  <h6>Animal Category</h6>
                  <h6>Animal Name</h6>
                  <h6>Dease</h6>
                  <h6>Sytmtoms</h6>
                  <h6>Date</h6>
                  <hr>
                  <h6>Treatment</h6>
                </div>
                <div class="col-md-6">
                  <h6><?php echo $owanar_name; ?></h6>
                  <h6><?php echo $address; ?></h6>
                  <h6><?php echo $phone; ?></h6>
                  <h6><?php echo $email; ?></h6>
                  <h6><?php echo $animal; ?></h6>
                  <h6><?php echo $c_animal; ?></h6>
                  <h6><?php echo $animalname; ?></h6>
                  <h6><?php echo $dease; ?></h6>
                  <h6><?php echo  $symptoms; ?></h6>
                  <h6><?php echo $date; ?></h6>
                  <hr>
                <select class="form-select" name="tre_id" aria-label="Default select example">
                      <option selected>Open this select menu</option>
                      <?php
                         $tre_query = "SELECT id,treatment_name FROM treatment WHERE d_id='$dease_id'";
                        //  echo $tre_query;
                         $tre_run = mysqli_query($con,$tre_query);
                         while($tre_row = mysqli_fetch_assoc($tre_run))
                         {
                                echo '<option value='.$tre_row['treatment_name'].'>'.$tre_row['treatment_name'].'</option>';
                         }
                      ?>
                      
                      <!-- <option value="2">Two</option>
                      <option value="3">Three</option> -->
                    </select>
                </div>
                  <button type="submit" name="submit">Treatment-Success</button>
                </form>
              </div>
            </div>
          </div>
        </center>
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
<?php

    }
  }
endif;
   if(isset($_POST['submit']))
   {
   
    $tre = $_POST['tre_id'];

    $main_query = "INSERT INTO `appointment-success` (`u_id`, `owner_name`, `address`, `phone`, `email`, `animal_id`, `c_animal_id`, `anima_name`, `dease`, `symtoms`, `treatment`, `date`)
     VALUES ('$user', '$owanar_name', '$address', '$phone', '$email', '$animal', '$c_animal', '$animalname', '$dease', '$symptoms', '$tre', current_timestamp());
    ";
    $main_run = mysqli_query($con,$main_query);
    if($main_run)
    {
      $app_remove_query = "DELETE FROM `appointment` WHERE `appointment`.`id` = $id";
      $app_remove_run = mysqli_query($con,$app_remove_query);
      echo "<script>alert('Treatment successfully')</script>";
    ?>
     <script>
      window.location.href='appointment-details.php';
      </script>
    <?php
      
    }
    else
    {
      echo "not insert";
    }
   }
?>