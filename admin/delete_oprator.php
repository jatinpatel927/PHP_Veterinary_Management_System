<?php
 if(isset($_GET['id']))
 {
    require 'database/connect.php';
    $id = $_GET['id'];
    
    $a_delete_query = "DELETE FROM oprator WHERE `oprator`.`id` = $id";
    $a_delete_run = mysqli_query($con,$a_delete_query);
    if($a_delete_run)
    {
        echo "<script>alert('One Data Delete || Id Is $id')</script>";
        ?>
        <script>
            window.location.href='oprator.php';
            </script>
        <?php
    }
    else
    {
        echo "<script>alert(' Data not Delete || Id Is $id')</script>";
        ?>
        <script>
            window.location.href='oprator.php';
            </script>
            <?php
    }
 }

?>