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
        <li><a href="index.php">Home</a></li>
        <li class="separator"><a> | </a></li>
        <li><a href="archief.php">Archief</a></li>
        <li class="separator"><a> | </a></li>
        <li><a href="./test/login.php">Inloggen</a></li>
      </ul>
    </div>
  </div> 
<!-- CONTENT -->

<div class="cards">
        
        <?php
       include("connect_db.php");
       $sql = "SELECT * FROM `images`  ORDER BY `id` DESC LIMIT 100";
       $result = $conn->query($sql);
    
       
       if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo '
                <div class="card">
                    <div class="card-header">
                        <img src="'. $row["image_url"] .'" alt="img" width="200px" />
                    </div>
                    <div class="card-body">
                        <h4>
                            '. $row["titel"] .'
                        </h4>
                        <p>
                            '. $row["tekst"] .'
                        </p>
                    </div>
                </div>';
            }
      } else {
        echo "0 results";
      }
    ?>
</div>

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