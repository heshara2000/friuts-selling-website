<?php
session_start();
  include 'config.php';  //to connect the database
// check log php file
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>login page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/main.css">
  <script src="../js/main.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary  py-0 my-0">
  <div class="container-fluid" style="background-color: blue;">
    <a class="navbar-brand text-light" href="#">Fruit~store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="Menu.php">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="About-Us.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="register.php">sign In</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light " href="Login.php">Log In</a>
        </li>
      
        
      </ul>
    </div>
  </div>
</nav>
  
  <div class="row">
      <div class="col-6">
        
        <img src="../assets/welcome.png" class="loginImage" alt="login backgrnd">
    
      </div>

      <div class="col-4 ">
        
        
          <form action="checkLog.php" method="POST">
            <!-- Email input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="form1Example13">Email address</label>
              <input type="email" id="form1Example13" name="email" class="form-control " />
              <?php
              if(isset($_SESSION['check'])){
                echo "<p class='text-danger'>{$_SESSION['check']}</p>";
                $_SESSION['check']=null;
              }
              ?>
            
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="form1Example23">Password</label>
              <input type="password" id="form1Example23" name="password" class="form-control" />
              <?php
              if(isset($_SESSION['check'])){
                echo "<p class='text-danger'>{$_SESSION['check']}</p>"; //to check the password and display the alert
                $_SESSION['check']=null; //tend the alert
              }
              ?>
           
            </div>

            <div class="d-flex justify-content-around align-items-center mb-4">
              <!-- Checkbox -->
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                <label class="form-check-label" for="form1Example3"> Remember me </label>
              </div>
              <a href="register.php">Forgot password?</a>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary" name="log_btn">Log in</button><br>


            <div class="divider d-flex align-items-center my-4">
              
              <p> OR create a new account    <a href="register.php">Register here</a></p>
            </div>

          </form> 
        
      </div>
  </div>
<script src="../js/main.js"></script>
</body>
</html>
