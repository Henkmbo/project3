<?php
    $id = $_GET["id"];

    include("./connect_db.php");

    $sql = "SELECT * FROM `images` WHERE `id` =  $id";

    $result = mysqli_query($conn, $sql);

    $record = mysqli_fetch_assoc($result);

   
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link rel="stylesheet" href="css/style.css">
    <title>CRUD met php en MySQL</title>
  </head>
  <body>
  <

  <div class="container">
    <div class="row">
      <div class="col-6">

      <form action="./update_script.php" method="post">

        <div class="mb-3">
        <label for="inputTitel">Titel:</label>
        <input class="form-control" placeholder="invoeren is verplicht...." type="text" name="titel" id="inputTitel" required value="<?php echo $record["titel"]; ?>"> </br>
        </div>
        
        <div class="mb-3">
        <label for="inputTekst">Tekst:</label>
        <input class="form-control" type="text" name="tekst" id="inputTekst" value="<?php echo $record["tekst"]; ?>"> </br>
        </div>

        <div class="mb-3">
        <label for="inputImage_url">Image:</label>
        <input class="form-control" type="text" name="image_url" id="inputImage_url" value="<?php echo $record["image_url"]; ?>"> </br>
        </div>

       


        <input type="hidden" value="<?php echo $id; ?>" name="id">
      





        <input class="btn btn-outline-danger" type="submit" value="Verstuur">

      </form>
      </div>
      
    </div>
  </div>

   
  </body>
</html>