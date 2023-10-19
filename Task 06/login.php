<?php require"data.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
      .space{
        margin:100px;
      }
    </style>
  </head>
<body>
  <div class="container space">
    <div class="row">
      <div class="col"></div>
      <div class="col">
            <form action="login.php" method="POST">
        <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <button type="submit" name="submit" class="btn btn-primary">Login</button>
            </form>

          </div>
      <div class="col"></div>
    </div>
  </div>
</body>
</html>


<?php

  print_r($admins);
  echo "<br>";
 
  if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password'])){
    $email    = $_POST['email'];
    $password = $_POST['password'];   

    //echo $admins['email']."<br>";
    //echo $admins['password']."<br>";

    if(in_array($email, $admins)){
      if(in_array($password, $admins)){
        header("location:homePage.php");
      }
    }else {
      header("location:page404.php");
    }

    

  }
  
  
?>


