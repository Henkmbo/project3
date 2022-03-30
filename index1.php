<?php include "connect_db.php"; ?>
<!DOCTYPE html>
<html>
<head>


</head>
<body>
  
</body>
</html>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dagblad | Nieuws</title>
   <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="script.js">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./favicon (1).ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<!-- NAVBAR -->
  <div class="container">
    <div class="logo">
      <a href="index.php"><img src="logo.png" alt="logo"></a>
    </div>
    <div class="navbar">

      <div class="icon-bar" onclick="Show()">
        <i></i>
        <i></i>
        <i></i>
      </div>

      <ul id="nav-lists">
        <li class="close"><span onclick="Hide()">×</span></li>
        <li><a href="index1.php">Home</a></li>
        <li class="separator"><a> | </a></li>
        <li><a href="archief2.php">Archief</a></li>
        <li class="separator"><a> | </a></li>
        <li><a href="./test/logout.php">Uitloggen</a></li>
      
     
      </ul>

    </div>
  </div> 
<!-- CONTENT -->

    <?php
        $sql = "SELECT * FROM images ORDER BY id DESC LIMIT 3 OFFSET 5";
        $res = mysqli_query($conn,  $sql);
        if (mysqli_num_rows($res) > 0) {
            while ($images = mysqli_fetch_assoc($res)){  ?>

            

    $sql = "SELECT * FROM images ORDER BY id DESC LIMIT 4";
    $res = mysqli_query($conn,  $sql);
    if (mysqli_num_rows($res) > 0) {
        while ($images = mysqli_fetch_assoc($res)){  ?>

        

        <div class="containercard">
     <div class="card">
       
        <div class="top-text">
           <div class="name">
       <div class="alb">
          <?=$images['titel']?>
        </div>
           </div>
           <p>
           
           <img src="<?=$images['image_url']?>" width="250px">
           
            <div class="top-text">
               <div class="name">
           <div class="alb">
                <img src="uploads/<?=$images['image_url']?> ">
            </div>
               </div>
               <p>
                  Nieuws
                  <?php ?>
               </p>
            </div>
            <div class="bottom-text">
               <div class="text">
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem quaerat iusto adipisci reprehenderit quasi cum perspiciatis, minima reiciendis magni quam!
               </div>
               
            </div>
         </div>

           <?php } }?>
           <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="https://cdn.nos.nl/image/2022/03/29/846440/1920x1080a.jpg" style="width:100%">
  <a href="./archief2.php"><div class="text">Twintig boetes voor lockdownfeestjes van Britse regering</div></a>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="https://cdn.nos.nl/image/2022/03/29/846467/1920x1080a.jpg" style="width:100%">
  <div class="text">Topman P&O herhaalt: 800 man ontslaan of hele bedrijf gaat failliet</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="https://cdn.nos.nl/image/2022/03/29/846377/1920x1080a.jpg" style="width:100%">
  <div class="text">Erdogan wil als gastheer Oekraïne-overleg blazoen oppoetsen</div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>


</body>
</html>




<!-- FOOTER -->
  <div class="footer">
    <div id="button"></div>
  <div id="container">
  <div id="cont">
  <div class="footer_center">
       <h3></h3>
  </div>
  </div>
  </div>
  </div>




  <style>
* {box-sizing: border-box}

.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: white;
  font-size: 30px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
  font-family: 'Roboto Condensed', sans-serif;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
.alb img {
    width: 100%;
    height: 100%;
    
    
}
a{
    text-decoration: none;
    color: black;
    
}


@media screen and (max-width: 978px) {
  .containercard{
    flex-wrap: wrap;
    flex-direction: column;
  }
  .card{
    max-width: 700px;
    margin: 20px 0;
  }
}
</style>

<script>
  var navList = document.getElementById("nav-lists");
  function Show() {
  navList.classList.add("_Menus-show");
  }
  
  function Hide(){
  navList.classList.remove("_Menus-show");
  }
  
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
  let dots = document.getElementsByClassName("dot");
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
}
  </script>

</body>

</html>