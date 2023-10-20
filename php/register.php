<?php
 //connect the conn.php file to check the validations
//database connect in 'config.php' file

//formconnect to the conn.phpfile
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title> Register form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/main.css">
  <script src="../js/main.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/style.css">


  <style>
    body{
      font-family: Arial;
      margin: 0;
    }
  </style>

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
          <a class="nav-link text-light" href="Login.php">Log In</a>
        </li>
      
        
      </ul>
    </div>
  </div>
</nav>
  


<div class="container-reg">
		<div class="row justify-content-center" >   
      <div class="col-lg-3">
        <p class="text-center h2 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

				<form action="conn.php" method="POST" >


					<div class="d-flex flex-row align-items-center mb-4">
          <i class="fas fa-user fa-lg me-3 fa-fw"></i>
            <div class="form-outline flex-fill mb-0">
              <label for="username" class="form-label">Username:</label>
              <input type="text" class="form-control" name="username" id="reg" required>
        
            </div>
					</div>


					<div class="d-flex flex-row align-items-center mb-4">
            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
            <div class="form-outline flex-fill mb-0">
           
						<label for="email" class="form-label">Email:    </label>
						<input type="email" class="form-control" name="email" id="reg"  required>
            </div>
					</div>

          <div class="d-flex flex-row align-items-center mb-4">
            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
            <div class="form-outline flex-fill mb-0">
						<label for="number" class="form-label">Mobile Number:</label>
						<input type="number" class="form-control" name="number" id="reg" required>
            </div>
					</div>


          <div class="d-flex flex-row align-items-center mb-4">
            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
            <div class="form-outline flex-fill mb-0">
						<label for="address" class="form-label">Address:</label>
						<input type="address" class="form-control" name="address" id="reg" required>
            </div>
					</div>

					<div class="d-flex flex-row align-items-center mb-4">
            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
            <div class="form-outline flex-fill mb-0">
              <label for="password" class="form-label">Password:(At least 8 characters)</label>
          
              <input type="password" class="form-control" name="password" id="reg" required>
              <?php
              if(isset($_SESSION['error'])){
                echo "<p class='text-danger'>{$_SESSION['error']}</p>";
                $_SESSION['error'] =null;
              }
              ?>
             
            </div>
            
					</div>

					<div class="d-flex flex-row align-items-center mb-4">
            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
            <div class="form-outline flex-fill mb-0">
						<label for="confirm_password" class="form-label">Confirm Password:</label>
						<input type="password" class="form-control" name="confirm_password" id="reg" required>
            </div>

					</div>

          <div class="form-check d-flex justify-content-center mb-4">
            <input type="checkbox" class="form-check-input" value=" " id="form2eample">
            <label for="formeample" class="form-check-label">
             I agree all statements in <a href="#!">Terms of service</a>

            </label><br>

            <input type="submit" value="Register here" name="submit_btn" id="reg-btn" class="btn btn-primary">

  
          </div>
         

      
				
				</form>
			</div>

      <div class="col-lg-6 justify-conntent-center">
      

        <img src="../assets/register.jpg"  class="img-fluid" alt="Sample image" id="reg-img" >

      </div>
      
      </div>
      
</div>
</body>
</html>











