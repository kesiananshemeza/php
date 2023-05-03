<?php 
$servername="localhost";
$username="root";
$password="";
$databasename= "my_db";
$errors=array();
$connect=mysqli_connect($servername, $username, $password,$databasename);
 if(!$connect) {
    echo "no connection";
    exit();
 }
  
 if (isset($_POST['register'])){
  
    $username=$_POST['username'];
    $email= $_POST['email'];
    $password_1= $_POST['password_1'];
    $password_2= $_POST['password_2'];
 
   if(empty($username)){
    array_push($errors, "user Name is required");
   }
   if(empty($email)){
    array_push($errors, "Email is required");
}
if(empty($password_1)){
    array_push($errors, "password is required");
}
if(empty($password_1 != $password_2)){
    array_push($errors,"The two passwords do not match");
}
 if (count($errors)==0){
    $password= md5($password_1);

    $sql="INSERT INTO login_now(`username`,`email`,`password`) 
        VALUES ('$username''$email''$password')";
    mysqli_query($connect,$sql);
 }
 }
?>
  
  