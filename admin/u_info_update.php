<?php require 'database/connect.php';
// print_r($_GET['a_id']);
if (isset($_GET['id'])) {
    $id  = $_GET['id'];
   echo $select_a_query = "SELECT * FROM vet_info WHERE id='$id'";
    $select_run = mysqli_query($con, $select_a_query);
    while($row = mysqli_fetch_assoc($select_run)){
        $name = $row['name'];
        $image = $row['v_image'];
        $description = $row['description'];
    
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
    <h1>Update info For Users</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="" class="form-label">Image</label>
            <input type="file" class="form-control" name="new_image" id="image">
            <input type="text" name="old_image" id="" value="<?php
                                                                        echo $image;
                                                                        
                                                                        ?>">
                <!-- <input type="submit" name="upload" value="Upload"> -->
                <img src="<?php 
                                echo $image;
                                ?>" width="100px" height="100px" alt="" srcset="" name="p_img">

</div> 
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" value="<?php echo $name; ?>" id="exampleFormControlInput1" placeholder="Name">
</div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" rows="3"><?php echo $description; ?></textarea>
            </div>
            <div class="mb-3">
                <button type="submit" name="submit" class="btn btn-info">Update</button>
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
<?php
}}
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
    
    if($image != "")
    {
        echo "hi";
       $main_img = '/v-managament/img/'.$_FILES['new_image']['name'];
    }
    else
    {
        // echo "no";
        $main_img = $old;
    }
     
        $up_query = "UPDATE `vet_info` SET `v_image` = '$main_img', `name` = '$name', `description` = '$desc' WHERE `vet_info`.`id` = $id";
        $up_run = mysqli_query($con,$up_query);
        move_uploaded_file($tmp_img,$folder.$image);
        echo "<script>alert('Upadte')</script>";
        echo $main_img;
        ?>
        <script>window.location.href='u_info.php';</script>
        <?php
    
     
}}
?>