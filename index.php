<?php 
include "connect_db.php"; 
include "./news/connect_db.php";
?>
<!DOCTYPE html>
<html>
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
                <li><a href="index.php">Home</a></li>
                <li class="separator"><a> | </a></li>
                <li><a href="archief.php">Archief</a></li>
                <li class="separator"><a> | </a></li>
                <li><a href="./test/login">inloggen</a></li>


            </ul>

        </div>
    </div>
    <!-- CONTENT -->

    <section class="intro">
      <div class="left">
        <div>
          <span>Dagblad</span>
          <h1></h1>
          <p>Zie het laatste nieuws! op onze geweldige en mooie website.</p>
          <a href="https://unsplash.com/" target="_blank">Gerwin de Heus<br>Henk van der Kooij</a>
        </div>
      </div>

      <div class="slider">
        <ul>
          <li style="background-image:url(https://media.istockphoto.com/vectors/breaking-news-isolated-vector-icon-sign-of-main-news-on-dark-world-vector-id1212012012?k=20&m=1212012012&s=612x612&w=0&h=RBUIgsYpO22XkNXTqqunalkcbpngnuCtZU7xSSgMk6c=)">
            <div class="center-y">
              
            </div>
          </li>
          <li style="background-image:url(https://www.internetmatters.org/wp-content/uploads/2020/11/MisInfo-PDF-1200x630-1-1024x538.jpg)" >
            <div class="center-y">
    	
            </div>
          </li>
          <li style="background-image:url(https://images.unsplash.com/photo-1456428199391-a3b1cb5e93ab?crop=entropy&fit=crop&fm=jpg&h=675&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=1375)">
            <div class="center-y">
             	
            </div>
          </li>
        </ul>

        <ul>
          <nav>
            <a href="#"></a>
            <a href="#"></a>
            <a href="#"></a>
          </nav>
        </ul>
      </div>
	</section>

    <div class="cards">

        <?php
       include("connect_db.php");
       $sql = "SELECT * FROM `images`  ORDER BY `id` DESC LIMIT 4";
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

</body>

</html>