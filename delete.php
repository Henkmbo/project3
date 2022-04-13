<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <!-- wordt alleen gebruikt voor incons in footer -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Voetbal | Nieuws</title>
</head>

<body class="addnews">

    <?php
    require('connect_db.php');
    // When form submitted, insert values into the database.
    if (isset($_GET['choose'])) {
        if (!empty($_GET["choose"]) ){
            if ($_GET['choose'] == 'nee'){
                header("Location: http://www.project3.nl/archief3.php");
            } elseif ($_GET['choose'] == 'ja'){
                if (!empty($_GET["id"]) ){
$GETid = $_GET['id'];
                    $query    = "DELETE FROM `images` WHERE `id` = $GETid";
        $result   = mysqli_query($conn, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Het artikel is verwijderd</h3><br/>
                  <p class='link'>klik <a href='archief3.php'>hier</a> om naar het archief te gaan </p>
                  <p class='link'>klik <a href='index3.php'>hier</a> om naar de homepage te gaan</p>
                  </div>";
        }
    }
            }

        }
        
    } else {
        
?>
   
    </nav>
<div class="middle-2">
    <?php
   include("connect_db.php");
   $id = $_GET["id"];
   $sql = "SELECT * FROM `images`  WHERE `id` = $id";
   $result = $conn->query($sql);

   
   if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '
        
            <div class="card">
                <div class="card-header">
                    <img src="'. $row["image_url"] .'" alt="city" width="200px" />
                </div>
                <div class="card-body">
                    <h4>
                        '. $row["titel"] .'
                    </h4>
                    <p>
                        '. $row["tekst"] .'
                    </p>
                </div>
            </div>
            <div class="form" >
            <form action="delete.php" method="GET">
                  <h3>Weet u zeker dat u het linksstaande artikel wilt verwijderen</h3><br/>
                  <input id="submit" type="submit" name="choose" value="ja" class="delete-button">
                  <input type="submit" name="choose" value="nee" class="delete-button">
                  <input type="hidden" value="'. $row["id"] .'" name ="id">
                  <p class="link">klik <a href="archief3.php">hier</a> om naar het archief te gaan </p>
                  <p class="link">klik <a href="index3.php">hier</a> om naar de homepage te gaan</p>
                  
                  </form></div>
                  
                  ';
        }
  } else {
    echo "Bericht is al verwijderd of bestaat niet";
  }
   ?>
</div>


    <?php
    }
    ?>



</body>

</html>