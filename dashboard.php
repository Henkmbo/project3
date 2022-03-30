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
            <a href="index.php3"><img src="logo.png" alt="logo"></a>
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
                <li><a href="dashboard.php">Dashboard</a></li>
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

        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="my_image">
            <input type="submit" onclick="window.location.href = 'http://www.dagblad.nl/index3.php';" value="upload"/>
        </form>
    </div>
</body>

</html>




<!-- FOOTER -->
<div class="footer">
    <div id="button"></div>
    <div id="container">
        <div id="cont">
            <div class="footer_center">
                <h3></h3>
            </div>
        </div>
    </div>
</div>




<style>
.uploaden {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    min-height: 100vh;
}

.alb {
    width: 200px;
    height: 200px;
    padding: 5px;

}

.alb img {
    width: 50%;
    height: 100%;

}
</style>
<script>
var navList = document.getElementById("nav-lists");

function Show() {
    navList.classList.add("_Menus-show");
}

function Hide() {
    navList.classList.remove("_Menus-show");
}
</script>

</body>

</html>