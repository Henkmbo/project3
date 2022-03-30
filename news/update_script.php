<?php
    include("./connect_db.php");

    $id = $_POST["id"];
    $titel = $_POST["titel"];
    $tekst = $_POST["tekst"];
    $image_url = $_POST["image_url"];
    
   

    $sql = "UPDATE `images` 
            SET `titel` = '$titel', 
                `tekst` = '$tekst', 
                `iamge_url` = '$image_url', 
            WHERE `id` = $id;";

mysqli_query($conn, $sql);

header("Location: ./read.php");
?>