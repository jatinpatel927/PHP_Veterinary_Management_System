<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'vet_manage';

$con = mysqli_connect("$host", "$user", "$password", "$database");
if(!$con)
{
    die("database connection error".mysqli_connect_errno());
}

?>