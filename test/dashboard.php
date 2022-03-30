<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dagblad | Editor/Bezoeker</title>
    <link rel="stylesheet" href="style.css" />
    
</head>
<body>
    <div class="form">
<form action="/action_page.php">
<input type="radio" id="html" name="fav_language" value="HTML" >
<label for="html">Bezoeker</label><br>
<input type="button" onclick="window.location.href = 'http://www.project3.nl/index1.php';" value="Submit"/>
<br> <br> <input  type="radio" id="css" name="fav_language" value="CSS"  required="required" >
 <label for="css">Editor</label><br>
 <input type="button" onclick="window.location.href = 'http://www.project3.nl/password.php';" value="Submit"/>
 <br>
 
</div>
</form>

</body>
<style>
    .form{
     padding: 3rem;  
    }
    label{
        font-size: 1.5rem;
    }
</style>
</html>