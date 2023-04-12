<?php session_start(); require 'database/connect.php'; ?>
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

  <!-- Optional JavaScript; choose one of the two! -->
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Owner Name</th>
        <th scope="col">Address</th>
        <th scope="col">Phone</th>
        <th scope="col">Email</th>
        <th scope="col">Animal</th>
        <th scope="col">Animal Categorys</th>
        <th scope="col">Animal Name</th>
        <th scope="col">Dease</th>
        <th scope="col">Sytmtoms</th>
        <th scope="col">Date</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php

        $app_query = "SELECT appointment.*,animal.animal_name,animal_category.c_animal_name,dease.dease_name,symptoms.syt_name FROM appointment,animal,animal_category,dease,symptoms WHERE (appointment.animal_id=animal.id AND appointment.c_animal_id=animal_category.id)"." AND (appointment.dease=dease.id AND appointment.symtoms=symptoms.id)";
        $app_run = mysqli_query($con, $app_query);

        if (mysqli_num_rows($app_run) > 0) {
          while ($app_row = mysqli_fetch_assoc($app_run)) {



        ?>
            <th scope="row"><?php echo $app_row['id']; ?></th>
            <td><?php echo $app_row['owanar_name']; ?></td>
            <td><?php echo $app_row['address']; ?></td>
            <td><?php echo $app_row['phone']; ?></td>
            <td><?php echo $app_row['email']; ?></td>
            <td><?php echo $app_row['animal_name']; ?></td>
            <td><?php echo $app_row['c_animal_name']; ?></td>
            <td><?php echo $app_row['animalname']; ?></td>
            <td><?php echo $app_row['dease_name']; ?></td>
            <td><?php echo $app_row['syt_name']; ?></td>
            <td><?php echo $app_row['date']; ?></td>
            <td><a href="tre-done.php?a_id=<?php echo $app_row['id']; ?>"><button class="btn btn-info">Tre-Done</button></a></td>
      </tr>
  <?php

          }
        }
  ?>
    </tbody>
  </table>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>