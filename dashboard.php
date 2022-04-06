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

        <div class="container1 ">
            <div class="row">
                <div class="col-6">

                    <form action="index3.php" method="post">

                        <div class="mb-3">
                            <label for="inputTitel">Titel:</label>
                            <input class="form-control" placeholder="invoeren is verplicht...." type="text" name="titel"
                                id="inputTitel" required> </br>
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
            </form>
        </div>
    </div>
        </div>

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

