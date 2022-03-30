<?php
    include("./news/connect_db.php");
    
    //We zetten de $_POST-array waarden in afzonderlijke variabelen
    include("./functions.php");
    
    $titel = sanitize($_POST["titel"]);
    $tekst = sanitize($_POST["tekst"]);
    $image_url = sanitize($_POST["image_url"]);

    // hier worden de gegevens die nodig zijnvoor verbindding met de 
    // mysql-server in de variabelen gezet
    $dbserver = "localhost";
    $dbuser = "root";
    $password = "";
    $dbname = "test_db";

    // De mysqli_connect() functie maakt verbinding met de mysql-server enn database
    $conn = mysqli_connect($dbserver, $dbuser, $password, $dbname);

    // De sql voert het invoeren van een record uit in de tabel 'users'
    $sql= "INSERT INTO `images` (`id`, `titel`, `tekst`, `image_url`) 
           VALUES (NULL, '$titel', '$tekst', '$image_url');";

    // de functie mysqli_query voert de insert-query uit op de database
    $result = mysqli_query($conn, $sql);

   if ($result) {
        header("Location: index.php3");
    }

    
?>