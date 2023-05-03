<?php
session_start();
include "db_connect.php";
if (isset($_SESSION['username']) && isset($_SESSION['id']))
{?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Home</title>
  </head>
  <body>
   
    <div class="container d-flex justify-content-center 
    align-items-center"
    style="min-height: 100vh">
    <?php if ($_SESSION['role']== 'admin'){?>
        <!-- for admin -->
        <div 
           class="card" style="width: 18rem;">
            <img src="images/team-1.jpg"  class="card-img-top"  
             alt="admin image">
            <div class="card-body text-center">
                <h5 class="card-title">
                  <?=$_SESSION['name']?>
                </h5>
                <a href="logout.php" class="btn btn-dark">logout</a>
             </div>
          </div>
           <div class="p-3">
            <?php include 'users.php';
            if (mysqli_num_rows($res)> 0) {?>
           
            <h1 class="display-4 fs-1">Users</h1>
            <table class="table" style="width:32rem">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">User name</th>
      <th scope="col">Role</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i=1;
    while($rows=mysqli_fetch_assoc($res)){?>
    <tr>
      <th scope="row"><?=$i?></th>
      <td><?=$rows['name']?></td>
      <td><?=$rows['username']?></td>
      <td><?=$rows['role']?></td>
    </tr>
    <?php $i++;}?>
  </tbody>
</table>
   <?php } ?>
   </div>
   
  <?php } else  {?>
   
    <!-- FOR USERS -->
 <div class="card" style="width: 18rem;">
    <img src="images/KLN.png" class="card-img-top"  
    alt="admin image">
      <div class="card-body text-center">
      <h5 class="card-title">
         <?=$_SESSION['name']?>
       </h5>
     <a href="logout.php" class="btn btn-dark">logout</a>
    </div>
 </div>
<?php } ?>
  </div>
   
  </body>
</html>
<?php } else {
     header("location: form.php");
}?>
 