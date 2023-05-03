<?php 
$servername="localhost";
$username="root";
$password="";
$databasename= "my_db";
$connect=mysqli_connect($servername, $username, $password,$databasename);
 if(!$connect) {
    echo "no connection";
    exit();
 }
 
  ?>