 
 <?php include ('server.php');?>
 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>User Registration</title>
     
  </head>
  <body>
  
      
        <h2 style="fs-2; background: grey" class="text-center">Register With Us</h2>
     </div>
     <div class="container d-flex justify-content-center 
    align-items-center"
    style="min-height: 100vh">
     <form method="post" action="register.php" class="algin-items algin-items-center" style="background-color:purple; width:450px">
     <?php include('errors.php'); ?>
    
     <div class="col-sm-8">
    <div class="input-group mb-3 row">
    <label for="username">User name</label>
    <input type="text" class="form-control"  name="username"  class="box" required>
  </div>
  </div>
  <div class="col-sm-8">
    <div class="input_group">
    <label for="email" >Email</label>
    <input type="text" class="form-control"  name="email"  class="box" required>
  </div>
  </div>
  <div class="col-sm-8">
    <div class="input_group ">
    <label for="email">Password</label>
    <input type="text" class="form-control"  name="password_1" class="box" required>
  </div>
  </div>
  <div class="col-sm-8">
    <div class="input_group">
    <label for="password">Confirm Password</label>
    <input type="text" class="form-control"  name="password_2" class="box" required>
  </div>
  </div>
  <div class="input_group">
    <button type="submit" class="btn btn-primary mb-3" name="register">Register</button>
</div>
    <p>
        Already a member? <a href="form.php">Sign in</a>
    </p>
     </form>
     </div>
</body>
</html>
