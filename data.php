<?php
require 'database/connect.php';
if(isset($_POST['id'])){
$id = $_POST['id'];
$c_animal_query = "select id,c_animal_name from animal_category where a_id='$id'";
$c_animal_query_run = mysqli_query($con,$c_animal_query);
// echo $c_animal_query_run;
$html='';
while($c_animal_row = mysqli_fetch_assoc($c_animal_query_run))
{
  $html.='<option value='.$c_animal_row['id'].'>'.$c_animal_row['c_animal_name'].'</option>';
}
 
echo $html;
}

if(isset($_POST['d_id']))
{
  $d_id = $_POST['d_id'];
  $d_syt_query = "SELECT id,syt_name FROM symptoms WHERE d_id='$d_id'";
  $d_syt_query_run = mysqli_query($con,$d_syt_query);
  $html='';
  while($d_syt_row = mysqli_fetch_assoc($d_syt_query_run))
  {
    $html.='<option value='.$d_syt_row['id'].'>'.$d_syt_row['syt_name'].'</option>';
  }

  echo $html;
}

?>