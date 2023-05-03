
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>login system</title>
  </head>
  <body>
    <h1  class="badge bg-success text-wrap fs-4" class="text-center">REGISTER NOW</h1>
    <div class="container d-flex justify-content-center 
    align-items-center"
    style="min-height: 100vh">
 <form class="border shadow p-3 rounded" style=" background-color:grey; width:450px" action="check_login.php" method="post">
 <h1 class="text-center p-3">LOGIN</h1>
 <?php 
 if (isset($_GET['error'])){?>
  <div class="alert alert-danger" role="alert">
  <?=$_GET['error']?>
</div>
 <?php } ?>
  
 <div class="col-sm-12">
    <div class="mb-3 row">
    <label for="username" class="visually-hidden">User name</label>
    <input type="text" class="form-control"  name="username" id="username" placeholder="enter your username" class="box" required>
  </div>
  </div>
  
  <div class="col-sm-12">
   <div class="mb-3 row">
    <label for="inputPassword2" class="visually-hidden" >Password</label>
    <input type="text" class="form-control" name="password" id="password" placeholder="enter Password" class="box" required>
   </div>
</div>
   <div class="mb-1 row">
    <label class="form-label">Selected User Type:</label>
   </div>
   <select class="form-select mb-3" aria-label="Default select example"
   name="role">
        <option selected value="user">User</option>
        <option value="admin">Admin</option>
       
</select>
  
    <button type="submit" class="btn btn-primary mb-3" name="login">Submit</button>
  </div>
  <p>
    Not yet amember? <a href="register.php">Sign up</a>
  </p>
</form>  
  </div>
  </body>
</html>