<?php

function get_ve()
{
         //connectiom database file
         require('database/connect.php');
     
         //products showing database table 
        
         $query = "SELECT * FROM `op_ve_info`";
    
         $run = mysqli_query($con, $query);
    
         if(mysqli_num_rows($run) > 0)
         {
             return $run;
         }
    
}