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
    <h1>Treatment</h1>
    <div>
    <!-- <a href="add_treatment.php"><button type="button" class="btn btn-primary">Add</button></a> -->
    </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Dease</th>
      <th scope="col">Symptoms</th>
      <th scope="col">Treatment</th>
      <!-- <th scope="col">Action</th> -->
    </tr>
  </thead>
  <tbody>
    <?php
       $c_animal = "SELECT treatment.*,dease.dease_name,symptoms.syt_name FROM treatment,symptoms,dease WHERE treatment.d_id=dease.id AND treatment.syt_id=symptoms.id";
       $c_animal;
       $c_animal_run = mysqli_query($con,$c_animal);
       if(mysqli_num_rows($c_animal_run) > 0){
          while($row = mysqli_fetch_assoc($c_animal_run))
          {
                // echo $row['dease_name'];
         
    ?>
    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><?php echo $row['dease_name']; ?></td>
      <td><?php echo $row['syt_name']; ?></td>
      <td><?php echo $row['treatment_name']; ?></td>
    </tr>
    <?php
       }
       }
       else
       {
         echo "Table is Empty";
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