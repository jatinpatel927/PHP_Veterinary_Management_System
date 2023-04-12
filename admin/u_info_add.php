<?php
require('database/connect.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $image = $_FILES['new_image']['name'];
    // echo $image;
    $tmp_img = $_FILES['new_image']['tmp_name'];
    $old = $_POST['old_image'];
    $desc = $_POST['desc'];
    $folder = 'C:/xampp/htdocs/v-managament/img/';
if(isset($_POST['submit']))
{
     
    $up_query="INSERT INTO `vet_info` (`v_image`, `name`, `description`, `date`) VALUES ('/v-managament/img/$image', '$name', '$desc', current_timestamp())";    $up_run = mysqli_query($con,$up_query);
        move_uploaded_file($tmp_img,$folder.$image);
        echo "<script>alert('Add')</script>";
        echo $main_img;
        ?>
        <script>window.location.href='u_info.php';</script>
        <?php
    
     
}}
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
    <h1>Add User Info</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="" class="form-label">Image</label>
            <input type="file" class="form-control" name="new_image" id="image">

</div> 
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Name</label>
    <input type="text" class="form-control" name="name"  id="exampleFormControlInput1" placeholder="Name">
</div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <button type="submit" name="submit" class="btn btn-info">Add</button>
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