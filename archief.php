<?php

?>

<!DOCTYPE html>
<html lang="en">

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
      <a href="index.html"><img src="logo.png" alt="logo"></a>
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
        <li><a href="archief.php">Archief</a></li>
        <li class="separator"><a> | </a></li>
    
      
      
      </ul>

    </div>
  </div> 
<!-- CONTENT -->

<?php
    

    $sql = "SELECT * FROM images ORDER BY id DESC LIMIT 4 OFFSET 4";
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