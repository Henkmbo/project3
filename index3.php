<?php 
include "connect_db.php"; 
include "./news/connect_db.php";
?>
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
        <li><a href="index3.php">Home</a></li>
        <li class="separator"><a> | </a></li>
        <li><a href="archief3.php">Archief</a></li>
        <li class="separator"><a> | </a></li>
        <li><a href="./news/index.php">Dashboard</a></li>
        <li class="separator"><a> | </a></li>
       <li><a href="./test/logout.php">Uitloggen</a></li>
        
     
      </ul>

    </div>
  </div> 
<!-- CONTENT -->

<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="news1.jpg" style="width:100%">
    <div class="text1">Rusland komt terug van eis gasbetalingen in roebel. 4 miljoen mensen weg uit Oekraine</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="news2.jpg" style="width:100%">
    <div class="text1">Willem Engel voorlopig vrij, maar mag niet op sociale media</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="news3.jpg" style="width:100%">
    <div class="text1">Kabinet: legale verkoop van wiet niet voor tweede kwartaal 2023</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
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

<hr>
<br>
<br>
<br>


<?php
    

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
               
               <img src="<?=$images['image_url']?>" width="250px" height="200px">
               
               </p>
            </div>
            <div class="bottom-text">
               <div class="text">
                 <div class="alb">
                  
                   <?=$images['tekst']?>
            </div>
               </div>
               <div class="btn">
                  <a href="./archief.html">Lees meer</a>
               </div>
            </div>
         </div>

           <?php } }?>

           <div class="cards">
    
    </div>       
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
  </script>

</body>

</html>