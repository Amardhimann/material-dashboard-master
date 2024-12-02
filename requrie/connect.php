<?php
//Establishment of conection...

$server = "localhost";
$username = "root";
$password = "";
$database = "db1";

$conn = mysqli_connect($server,$username,$password,$database);
if(!$conn){
  die("Connection Failed".mysqli_connect_error($conn));
  exit();

}

?>