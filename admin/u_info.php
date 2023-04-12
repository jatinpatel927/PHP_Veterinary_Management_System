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
    <h1>Usre-Site</h1>
    <div>
      <a href="u_info_add.php"><button class="btn btn-primary">Add</button></a>
    </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $query = "SELECT * FROM `vet_info`";
      $run = mysqli_query($con,$query);
      $num = mysqli_num_rows($run);
      if($num > 0)
      {
        while($row= mysqli_fetch_assoc($run))
        {

       
    ?>
    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><img src="<?php echo $row['v_image']; ?>" width="100px"></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['description']; ?></td>
      <td><?php echo $row['date']; ?></td>
      <td><a href="u_info_delete.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
      <td><a href="u_info_update.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-primary">Update</button></a>
    </td>
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