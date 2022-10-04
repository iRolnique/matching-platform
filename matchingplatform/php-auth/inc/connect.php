<?php
//mysqli_connect 
$host='localhost';
$user='root';
$password='';
$database='matchingplatform';
$connect = new mysqli($host, $user, $password, $database);
if (!$connect) {  
  die ('Error to database');
}
?>