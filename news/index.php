<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="news/css/style.css">
    <title>CRUD met php en MySQL</title>
  </head>
  <body>
  
  

  <div class="uploaden">



 <?php if (isset($_GET['error'])): ?>
    <p><?php echo $_GET['error'] ?></p>
    <?php endif ?>

    <div class="container">
    <div class="row">
      <div class="col-6">

      <form action="create.php" method="post">

        <div class="mb-3">
        <label for="inputTitel">Titel:</label>
        <input class="form-control" placeholder="invoeren is verplicht...." type="text" name="titel" id="inputTitel" required> </br>
        </div>
        
        <div class="mb-3">
        <label for="inputTekst">Tekst:</label>
        <input class="form-control" type="text" name="tekst" id="inputTekst"> </br>
        </div>

        <div class="mb-3">
        <label for="inputImage_url">image_url:</label>
        <input class="form-control" type="text" name="image_url" id="inputImage_url"> </br>
        </div>

        
        
            <input type="submit" name="submit" value="Upload">

        

      </form>
      
  </div>

        

  </div>
    
  </body>

  
</html>