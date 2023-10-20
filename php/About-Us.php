



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/main.css">
  <script src="../js/main.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


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




<div class="container-fluid">
  <div class="row">

    <div class="col-lg-4 col-md-4 col-sm-12">
              <h3 class="feature-title">our mission</h3>
            
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
    </div>

     
    <div class="col-lg-4 col-md-4 col-sm-12">
      <h3 class="feature-title">contact us</h3>
      <img src="../assets/image8.jpg" class="img-fluid" id="contact-img">

    </div>


    <div class="col-lg-4 col-md-4 col-sm-12">
      <h3 class="feature-title">Get in Touch!</h3>
      <div class="form-group" style="padding: 10px;">
        <form action="message.php" method="POST">
          <input type="text" class="form-control" placeholder="Name" name="Name"><br>
          <input type="email" class="form-control" placeholder="Email Address" name="email"><br>
          <textarea class="form-control" rows="4" name="message"></textarea><br>
          <input type="submit" class="btn btn-primary " value="Send" name="submit-btn" id="contact-id">

        </form>
      </div>
      
    </div>
  </div>





</div>
      
<footer class="page-footer position-absolute bottom-0">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-6">
        <h6 class="text-uppercase ">Additional Information</h6>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
        
      </div>

      <div class="col-2">

      </div>




      <div class="col-4">
            <h6 class="text-uppercase font-weight-bold text-end ">Contact</h6>
            <p class="text-end">kadawatha,sri lanka
            <br/>mywebsite.com
            <br/>011789921111
            <br/>0987765534</p>
        </div>
    </div>
  </div>
  <div class="footer-copyright text-center ">© 2023 Copyright: myWebsite.com</div>

  

</footer>






</body>
</html>
