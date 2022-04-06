<?php
     include("./connect_db.php");

     $id = $_GET["id"];

     $sql = "DELETE FROM `images` WHERE `id` = $id";

     mysqli_query($conn, $sql);

     header("Location: ./archief3.php");
?>