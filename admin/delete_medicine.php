<?php
 if(isset($_GET['id']))
 {
    require 'database/connect.php';
    $id = $_GET['id'];
    
    $a_delete_query = "DELETE FROM medicine WHERE `medicine`.`id` = $id";
    $a_delete_run = mysqli_query($con,$a_delete_query);
    if($a_delete_run)
    {
        echo "<script>alert('One Data Delete || Id Is $id')</script>";
        ?>
        <script>
            window.location.href='medicine.php';
            </script>
        <?php
    }
    else
    {
        echo "<script>alert(' Data not Delete || Id Is $id')</script>";
        ?>
        <script>
            window.location.href='medicine.php';
            </script>
            <?php
    }
 }

?>