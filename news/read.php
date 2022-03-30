<?php
    include("./connect_db.php");

    $sql = "SELECT * FROM `images`";

    $result = mysqli_query($conn, $sql);

    $records = "";
    while ($record = mysqli_fetch_assoc($result)){
      $records .= "<tr>
                    <th scope='row'>" . $record["id"] . "</th>
                    <td> " . $record["titel"] . "</td>
                    <td> " . $record["tekst"] . "</td>
                    <td> " . $record["image_url"] . "</td>
                    <td>
                      <a href='./update.php?id=" . $record["id"] . "'>
                      <img src='./img/icons/b_edit.png' alt='pencil'>
                      </a>
                    </td>
                    <td>
                      <a href='./delete.php?id=" . $record["id"] . "'>
                      <img src='./img/icons/b_drop.png' alt='cross'>
                      </a>
                    </td>
                  </tr>"; 
    }

   

?>

<!doctype html>
<html lang="en">
  <head>
      <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
   
    <link rel="stylesheet" href="css/style.css">
    <title>dagblad</title>
  </head>
  <body>
  
  <div class="row">
    <div class="col 12">
    <a href="index.php" class="btn btn-primary" type="button">Terug naar het Formulier</a>
    </div>
  </div>

  

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

           <div class="cards">
    
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="js/app.js"></script>

  </body>
</html>