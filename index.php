
<?php
include 'php/conn.php' ;
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="../css/main.css">
  <script src="../js/main.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
 
  

  <style>
  
body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container-gallery {
  position: relative;
}
.container-gallery .row{
  max-width: 100%;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 30%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}



/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}


</style>



</head>

<body>
 
    
<nav class="navbar navbar-expand-lg bg-body-tertiary  py-0 my-0" style="margin: 0 !important;" >
  <div class="container-fluid " style="background-color: blue;">
    <a  class="navbar-brand text-light" href="#">Fruit~store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
        
          <a class="nav-link active text-light" aria-current="page" href="index.php">Home</a>
      
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="./php/Menu.php">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="./php/About-Us.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="./php/register.php">sign In</a>
        </li>
        <li class="nav-item">
          <i class="bi bi-person"></i>
          <a class="nav-link text-light" href="./php/Login.php">Log In</a>
        </li>
      
        
      </ul>
    </div>
  </div>
</nav>





<div class="container-gallery">
  <div class="mySlides">
    
    <img src="./assets/ff.jpg" style="width:100%" height="100%">
  </div>

  <div class="mySlides">
   
    <img src="./assets/ss.jpg" style="width:100%">
  </div>

  <div class="mySlides">
   
    <img src="./assets/image12.jpeg" style="width:100%">
  </div>
    
  <div class="mySlides">
  
    <img src="./assets/image13.jpeg" style="width:100%">
  </div>

  <div class="mySlides">
   
    <img src="./assets/oo.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
   
    <img src="./assets/image.6.jpg" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="./assets/ff.jpg" style="width:100%" onclick="currentSlide(1)" alt="NEW THINGS">
    </div>
    <div class="column">
      <img class="demo cursor" src="./assets/ss.jpg" style="width:100%" onclick="currentSlide(2)" alt="GIVE UP FRESHER DAY">
    </div>
    <div class="column">
      <img class="demo cursor" src="./assets/image12.jpeg" style="width:100%" onclick="currentSlide(3)" alt="BETTER CHOICE">
    </div>
    <div class="column">
      <img class="demo cursor" src="./assets/image13.jpeg" style="width:100%" onclick="currentSlide(4)" alt="EVERYTHINGIN ONE PLACE">
    </div>
    <div class="column">
      <img class="demo cursor" src="./assets/oo.jpg" style="width:100%" onclick="currentSlide(5)" alt="WELCOME ALL">
    </div>    
    <div class="column">
      <img class="demo cursor" src="./assets/image.6.jpg" style="width:100%" onclick="currentSlide(6)" alt="HAPPY DAY!!!!">
    </div>
  </div>
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
</body>
</html>
