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
    <h1>Animal Table</h1>
    <div>
    <a href="add_dease.php"><button type="button" class="btn btn-primary">Add</button></a>
    </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Dease Name</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
     $a_query = "SELECT * FROM `dease`";
     $a_run = mysqli_query($con,$a_query);

     if(mysqli_num_rows($a_run))
     {
        while($row = mysqli_fetch_assoc($a_run))
        {
            $id = $row['id'];
            $animal = $row['dease_name'];
            $date = $row['date'];
     
     ?>
    <tr>
      <th scope="row"><?php echo $id; ?></th>
      <td><?php echo $animal; ?></td>
      <td><?php echo $date; ?></td>
      <td><a href="update_dease.php?a_id=<?php echo $id; ?>"><button type="button" class="btn btn-primary">UPDATE</button></a>
      <a href="delete_dease.php?id=<?php echo $id; ?>"><button type="button" class="btn  btn-danger">DELETE</button></a>
    </td>
    </tr>
    <?php
         }}
         else
         {
            echo "Data Not Found";
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