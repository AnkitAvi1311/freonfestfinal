<?php

include "models/user.php";
include "controllers/session.php";
session_start();

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
    <link rel="stylesheet" href="css/res.css">
    <style>
        .signup{
            transition: all .3s ease;
        }
        .signup:hover{
            background: black;
            color: white;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <!-- heading of the website -->
    <div id="particles-js" id="home">
        
        <?php
        navigation();
        ?>

        <div id="header" style="font-family: 'Lato', sans-serif">
            <h3>Amiempresia's</h3>
            <h1 style="color: orange;">FREONFEST</h1>
            <h1 style="color: orange;text-align: right;font-size: 80px;">2k19</h1>
            <h3 style="text-align: right">Ranchi's Biggest Festival</h3>
        </div>

    </div>
    
    <!-- about us -->
    <div class="height-100" id="about" style="background-color: lightgrey;">
        <div class="row">
            <div class="col-7">
                <h1 style="font-size:60px;color: black;text-align:center;font-family: Lato, 'sans-serif';margin-top:85px;">ABOUT US</h1>
            </div>
            <div class="col-4">
                <p style="font-size: 18px;margin-top: 100px;color:#414141;font-family: Lato, 'sans-serif';line-height:30px;">
                FREONFEST <br/>
                It was started by a group of friends. It's main aim is to unite college students and bring them together & cultivate academics,  sports, arts, music etc in them so that they may have opportunity to showcase therir extralent apart from studies & mingle with people from various other colleges. As college life is very different from school life & we don't get many opportunities & stage to showcase our talents. This time we are having "FREONFEST".
                </p>
            </div>
        </div>
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

    <a href="#">
        <div id="top" style="transform:scale(0)">
            <h1>Top</h1>
        </div>
    </a>

    <!-- CSS loader -->
    <div id="site-loader">
        <div class="lds-spinner" id="spinner">
            <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
            <h3 style="color:white;margin-top: 100px;">LOADING</h3>
        </div>
        
    </div>

    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib --> <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
    <script src="script.js"></script>

    <script>
        // code to add the move to top button when scrolled by 400px
        let up = document.getElementById("top");
        let nav = document.getElementById("nav");
        console.log(up);
        window.addEventListener('scroll', function(e){
            let y = window.scrollY;
            if(y>=400){
                up.style.transform="scale(.6)";
            }else{
                up.style.transform="scale(0)";
            }
        },false);

        window.onload = function() {
            setTimeout(() => {
                document.getElementById("site-loader").style.display="none";
            }, 000);
        }

    </script>
</body>
</html>
