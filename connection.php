<?php
$server = "sql208.infinityfree.com";
$username = "if0_35560800";
$password = "v7k2UQM2AZR6qLW";
$db = "if0_35560800_latest";

$conn = mysqli_connect($server, $username, $password, $db);
if(!$conn){
  die("Connection failed: " . mysqli_connect_error());
}
?>

