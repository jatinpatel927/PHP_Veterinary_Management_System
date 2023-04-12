<?php require 'database/connect.php'; ?>
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
    <h1>Appointment-Detial</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Owner Name</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Animal</th>
      <th scope="col">Animal Category</th>
      <th scope="col">Animal Name</th>
      <th scope="col">Dease</th>
      <th scope="col">Symtoms</th>
      <th scope="col">Treatment</th>
      <th scope="col">Date</th> 
    </tr>
  </thead>
  <tbody>
    <?php
         $app_query = "SELECT * FROM `appointment-success`";
         $app_run = mysqli_query($con,$app_query);
         if(mysqli_num_rows($app_run))
         {
            while($row = mysqli_fetch_assoc($app_run))
            {
                $id = $row['id'];
                $owner = $row['owner_name'];
                $address = $row['address'];
                $phone = $row['phone'];
                $email = $row['email'];
                $animal = $row['animal_id'];
                $animal_c = $row['c_animal_id'];
                $animal_name = $row['anima_name'];
                $dease = $row['dease'];
                $syt = $row['symtoms'];
                $tre = $row['treatment'];
                $date = $row['date'];
          
;    ?>
    <tr>
      <th scope="row"><?php echo $id; ?></th>
      <td><?php echo $owner; ?></td>
      <td><?php echo $address; ?></td>
      <td><?php echo $phone; ?></td>
      <td><?php echo $email; ?></td>
      <td><?php echo $animal; ?></td>
      <td><?php echo $animal_c; ?></td>
      <td><?php echo $animal_name; ?></td>
      <td><?php echo $dease; ?></td>
      <td><?php echo $syt; ?></td>
      <td><?php echo $tre; ?></td>
      <td><?php echo $date; ?></td>
    </tr>
    <?php
            }
        }
    ?>
  </tbody>
</table>

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