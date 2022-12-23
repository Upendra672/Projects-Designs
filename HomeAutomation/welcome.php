<?php

session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}

 ?>

<!-- new -->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome - <?php
                        echo $_SESSION['username'] ?> </title>
    <link rel="stylesheet" href="Styles/style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>

<body>
    <div class="wrapper">
        <!--Top menu -->
        <div class="section">
            <div class="top_navbar">
                <div class="hamburger">
                    <a href="#">
                        <!-- <i class="fas fa-bars"></i> -->
                    </a>
                </div>
                <span>
                    <button><a href="Home.html"><img src="./img/bell.png" height="30px" width="30px"></a></button>
                </span>
                <span>
                    <button><a href="logout.php"><img src="img/power.jpg" height="30px" width="30px"></a></button>
                </span>

            </div>
        </div>

        <!--Top menu -->

        <div class="sidebar">
            <!--profile image & text-->
            <div class="profile">
                <img src="./img/icon.jpg" alt="profile_picture" />
                <h3>HOME</h3>
                <p>Automation Controler</p>
            </div>
            <!--profile image & text-->

            <!--menu item-->
            <ul>
                <li>
                    <a href="./welcome.php" class="active">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Home</span>
                    </a>
                </li>
                <li>
                    <a href="./control.php">
                        <span class="icon"><i class="fas fa-desktop"></i></span>
                        <span class="item">Control</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-user-friends"></i></span>
                        <span class="item">Setup</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                        <span class="item">Config</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-database"></i></span>
                        <span class="item">Preferences</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-chart-line"></i></span>
                        <span class="item">Save settings</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-user-shield"></i></span>
                        <span class="item">Modity</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-cog"></i></span>
                        <span class="item">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-cog"></i></span>
                        <span class="item">Help</span>
                    </a>
                </li>
            </ul>
        </div>
        <!--menu item-->
    </div>
    <!-- Main component -->
    <div class="container my-5 mr-0 ">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading"> Welcome! - <?php echo $_SESSION['username'] ?></h4>
            <p>Hey how are you doing? Welcome to HomeAutomation. You are logged in as <?php echo $_SESSION['username'] ?></p>
            <hr>
        </div>
    </div>

    <div class="main">
        <div class="content">
            <div class="card">
                <h1 style="font-size: 30px">Welcome to home Automation System.</h1>
                <p style="font-size: 20px">
                    “Home automation” refers to the automatic and electronic control of household features, activity, and appliances. In simple terms, it means you can easily control the utilities and features of your home via the Internet to make life more convenient and secure, and even spend less on household bills.
                </p>
                <div class="card1">
                    <img src="./img/clear.jpg" alt="" height="540px" width="relative">
                    <img src="./img/clear.jpg" alt="" height="540px" width="relative">
                </div>
            </div>
        </div>
    </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->

    <script>
        var hamburger = document.querySelector(".hamburger");
        hamburger.addEventListener("click", function() {
            document.querySelector("body").classList.toggle("active");
        });
    </script>
</body>

</html>