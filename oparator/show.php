<?php
require 'database/connect.php';
if(isset($_GET['id']))
{
    $id = $_GET['id'];
  $query = "SELECT * FROM `vet-info` WHERE id='$id'";
  $run = mysqli_query($con,$query);
  while($row = mysqli_fetch_assoc($run))
  {
    $image = $row['v_image'];
    $name = $row['name'];
    $desc = $row['description'];
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>
<body>
<?php require 'header.php'; ?>
<div class="col-md-5 offset-md-1 border rounded mt-5 bg-white h-25">
        <img src="<?php echo $image; ?>" alt="" class="mx-2">
        <div class="pt-4">
            <h6>Description</h6>
            <hr>
            <h6><?php echo $name; ?></h6>
            <div class="price-details">
                <div>
                    <?php echo $desc; ?>
                </div>
                <!-- <div class="col-md-6">
                    <h6>Product Name:</h6>
                    <h6>Delivery Charges</h6>
                    <hr>
                    <h6>Amount Payable</h6>
                </div>
                <div class="col-md-6">
                    <h6><?php //echo $name; ?></h6>
                    <h6 class="text-success">FREE</h6>
                    <hr>
                    <h6><?php //echo $price; ?></h6>
                </div> -->
            </div>
        </div>
    </div>
</body>
</html>