<?php
include "models/user.php";
include "controllers/session.php";
session_start();
$user;
if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Freonfest : Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <link rel="stylesheet" href="particles.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <style>
        .signup{
            transition: all .3s ease;
        }
        .signup:hover{
            background: black;
            color: white;
        }
    </style>
</head>
<body>
    <!-- heading of the website -->
    <div id="particles-js" id="home">
        <nav id="nav">
            <ul>
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#social">Social Cause</a></li>
                <li><a href="#sponsors">Sponsors</a></li>
                <li><a href="#contact">Contact Us</a></li>
                
                <?php
                    if(Session::check("user")){
                        ?>
                        <li class="right" style="margin-right: 15px;"><a href="#">
                            <?php
                            echo $ob.fname;
                            ?>
                        </a></li>
                        <?php
                    }else{
                        ?>
                        <li class="right signup" style="border: 1px solid white;border-radius: 20px;padding: 0px 15px;"><a href="#">Register</a></li>
                <li class="right" style="margin-right: 15px;"><a href="#">Login</a></li>

                <?php
                    }
                ?>
            </ul>
        </nav>

        <div id="header" style="font-family: 'Lato', sans-serif">
            <h3>Amiempresia's</h3>
            <h1 style="color: orange;">FREONFEST</h1>
            <h1 style="color: orange;text-align: right;font-size: 80px;">2k19</h1>
            <h3 style="text-align: right">Ranchi's Biggest Fest</h3>
        </div>

    </div>
    
    <!-- about us -->
    <div class="height-100" id="about">

    </div>

    <!-- social cause -->
    <div class="height-100" id="social">

    </div>

    <!-- sponsors -->
    <div class="height-100" id="sponsors">

    </div>

    <!-- contact us -->
    <div class="height-100" id="contact">

    </div>

    <!-- sitemap -->
    <div class="height-100" id="sitemap">

    </div>


    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib --> <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
