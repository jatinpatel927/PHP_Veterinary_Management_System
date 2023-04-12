<?php
// database folder
 require 'database/connect.php';
// delete produts..
// print_r($_GET);
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $delete = "DELETE FROM op_ve_info WHERE `op_ve_info`.`id` = '$id'";

    $run = mysqli_query($con,$delete);
    if($run)
    {
        echo "<script>alert('Delete Record')</script>";
        ?>
        <script>window.location.href='oprator-site.php';</script>
        <?php
    }
    else
    {
        echo "<script>alert('Not Delete Record')</script>";

    }
}

?>