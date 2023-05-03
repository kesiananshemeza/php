<?php
if (isset($_SESSION['username']) && isset($_SESSION['id'])){
  
    $sql="SELECT * FROM register ORDER BY id ASC";
    $res= mysqli_query($connect,$sql);
}else {
    header("location: form.php");
}




