<?php
   
   require 'database/connect.php';

   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
          $name = $_POST['name'];
          $desc = $_POST['desc'];
          $image = $_FILES['image']['name'];
          // echo $image;
          $img_tmp = $_FILES['image']['tmp_name'];
          $img_folder = 'C:/xampp/htdocs/v-managament/oparator/img/';
       if(isset($_POST['submit'])){
          $query = "INSERT INTO `op_ve_info` (`name`, `image`, `description`, `date`) VALUES
          ('$name', '/v-managament/oparator/img/$image', '$desc', current_timestamp())
          ";
          $run = mysqli_query($con,$query);
          if($run){
          echo "<script>alert('Information Add')</script>";
          move_uploaded_file($img_tmp, $img_folder . $image);
          ?>
          <script>window.location.href='opratoe-site.php';</script>
          <?php
          header('location:oprator-site.php');
        }
          else
          {
            echo "<script>alert('Information NoT Add')</script>";
          }}
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
    <h1>Add</h1>
     <form action="" method="post" enctype="multipart/form-data">
     <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Name</label>
  <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Name">
</div>
<div class="input-group mb-3">
  <input type="file" class="form-control" name="image" id="inputGroupFile02">
  <label class="input-group-text" for="inputGroupFile02">Upload</label>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Description</label>
  <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3" placeholder="Description"></textarea>
</div>
<div class="mb-3">
<button type="submit" name="submit" class="btn btn-warning">Add</button>
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
</html>