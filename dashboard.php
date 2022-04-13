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
                <li><a href="index3.php">Home</a></li>
                <li class="separator"><a> | </a></li>
                <li><a href="archief3.php">Archief</a></li>
                <li class="separator"><a> | </a></li>
                <li><a href="./dashboard.php">Dashboard</a></li>
                <li class="separator"><a> | </a></li>
                <li><a href="./test/logout.php">Uitloggen</a></li>




            </ul>

        </div>
    </div>





    <!-- CONTENT -->
    <div class="uploaden">



        <?php if (isset($_GET['error'])): ?>
        <p><?php echo $_GET['error'] ?></p>
        <?php endif ?>

        <form class="form artikel-add" action="" method="post">
        <h1 class="login-title">artikel bewerken</h1>
        <input type="text" class="login-input" name="img" placeholder="Img" value="" required />
        <input type="text" class="login-input" name="titel" placeholder="Titel" value="" required /> 
        <textarea type="text" class="login-input" name="text" placeholder="Text" required></textarea>
        <input type="hidden" value="<?php echo $id; ?>" name ="id">
        <input type="submit" name="submit" value="Bewerk" class="login-button">
    </form>

        </body>
        </html>

    <script>
    var navList = document.getElementById("nav-lists");

    function Show() {
        navList.classList.add("_Menus-show");
    }

    function Hide() {
        navList.classList.remove("_Menus-show");
    }
    </script>

    <style>
        <style>
.uploaden{
  display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    min-height: 100vh;
    font-size: 18px;
    box-sizing: border-box;
    border: 8px solid green;
    background-color: lightgrey;
  border: 6px solid green;
  padding: 50px;
  margin: 20px;

}
.button{
font-size: 16px;
    letter-spacing: 2px;
    font-weight: 400 !important;
    background-color: grey;
    color: black;
    padding: 15px 40px;
    margin: auto;
    text-align: center;
    display: inline-block !important;
    text-decoration: none;
    border: 0px;
    width: max-content;
    cursor: pointer;
    transition: all 0.3s 0s ease-in-out;
  }
  
  
.button:hover {
    transform: scale(1.04, 1);
    background-color: green;
    text-decoration: none;
}
    </style>

