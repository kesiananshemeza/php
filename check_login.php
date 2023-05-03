<?php
 session_start();
include "./db_connect.php";
if (isset($_POST['login'])){
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      
     $username= $_POST['username'];
     $password= $_POST['password'];
     $role= $_POST['role'];
  
    if(empty($username)){
        header("location: form.php?error= user Name is required");

    }else if (empty($password)){
        header("location: form.php?error= Password is required");

    } else {
        $password=md5("$password");

      $sql="SELECT * FROM register WHERE username='$username'AND password='$password'";
          $result=mysqli_query($connect,$sql);

          if (mysqli_num_rows($result)===1) {
            //username must be unique
            $row=mysqli_fetch_assoc($result);
             if ($row['password']=== $password && $row['role']==$role){
                $_SESSION['name']= $row['name'];
                $_SESSION['id']= $row['id'];
                $_SESSION['role']= $row['role'];
                $_SESSION['username']= $row['username'];
                header("location: ./home.php");
             }else{
                header("location: form.php?error= Incorrect user Name or Password");

             }
            
          }else{
            header("location: form.php?error= Incorrect user Name or Password");

          }
    }

}else{
    header("location: form.php");
}
?>
 <?php if (isset ($_GET['error'])){ ?>
    <div class="alert alert-danger" role="alert">
    <?=$_GET['error'] ?>
  </div>
 <?php }
  ?>