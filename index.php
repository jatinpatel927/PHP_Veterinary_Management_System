<?php
 session_start();
 require 'function.php';

 require 'get.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
  
    <link rel="icon" href="admin/img/logo.png"/>
  <!-- css -->
<link rel="stylesheet" type="text/css" href="/v-managament/css/style.css">

    <link rel="stylesheet" type="text/css" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">

</head>
<body>
    <?php include 'header.php'; ?>

    <section class="home">
    <h1 class="h-primary">Welcome to V-management System</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt</p>
    <p>
      whenever you need to be sure to logout.<a href="/project/logout.php">using this link.</a>
                                                </p>
  </section>
  <?php 
             $run = get_ve();
             while ($row = mysqli_fetch_assoc($run)) {
               image($row['v_image'],$row['name'], $row['description'], $row['id']);
             }
     
  ?>
    <?php require 'footer.php'; ?>
</body>
</html>