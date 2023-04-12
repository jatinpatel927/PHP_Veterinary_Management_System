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
    <h1>User Data</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">FullName</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Address</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    
        <?php
         $query = "SELECT * FROM `users`";
         $run = mysqli_query($con,$query);
         while($row = mysqli_fetch_assoc($run))
         {
            echo '
            <tr>
            <th scope="row">'.$row['id'].'</th>
            <td>'.$row['fullname'].'</td>
            <td>'.$row['email'].'</td>
            <td>'.$row['phone'].'</td>
            <td>'.$row['username'].'</th>
            <td>'.$row['password'].'</td>
            <td>'.$row['address'].'</td>
            <td>'.$row['date'].'</td>
            <td><button class="btn btn-primary"><a href="u_info_delete.php?id='.$row['id'].'">DELETE</a></button></td>
          </tr>
            ';
            
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