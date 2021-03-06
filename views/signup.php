<?php 

include "../controllers/session.php";
session_start();
if(Session::check("user")){
    header("location: ../?error=you are already logged in");
    exit();
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Signup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../style.css" />
    <link rel="stylesheet" href="../css/res.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="icon" href="../log.png">
    <style>
    body{
        font-family: "lato"
    }
        .myform{
            position: absolute;
            left: 50%;
            width: 375px;
            background: white;
            top: 50%;
            transform: translate(-50%,-50%);
            padding: 20px;
        }
        .myform .title{
            margin: 10px 0px;
        }
        .myform label{
            display: block;
        }
        .myform input[type="text"],.myform input[type="password"],.myform input[type="email"],.myform input[type="number"]{
            width: 100%;
            margin-top: 10px;
            background: white;
            border: 1px solid grey;
            padding: 10px 15px;
        }
        .myform select {
            width: 100%;
            margin-top: 10px;
            padding: 10px 15px;
        }
        .btn{
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background: dodgerblue;
            color: white;
            border:none;
            cursor: pointer;
        }
        .logo{
            display: none;
        }
        #particles-js{
            background:linear-gradient(330deg,orange,purple);
        }
        #myhead{
            display:block;
        }
        
        @media screen and (max-width: 680px) {
            #paricles-js{
                position: absolute;
                height: 100%;
                width: 100%;
                left: 0;
                top: 0;
            }
            .myform{
                position: absolute;
                height: 100%;
                width: 100%;
                left: 0;
                top: 0;
                transform: translate(0,0);
                background: transparent;
            }
            .register .myform img{
                display: block;
            }
            .logo{
                display: block;
                height: 80px;
            }
            .logo img{
                width: 70px;
                height: auto;
                float: right;
            }
            .logo::after{
                content: "";
                displaY: block;
                clear: both;
            }
            #particles-js{
                background: linear-gradient(330deg, lightgreen, dodgerblue);
            }
            .myform label{
                color : black;
                font-weight: bold;
            }
            #myhead{
                display:none;
            }
            #nav{
                display: none;
            }
        }
    </style>
</head>
<body>

    <div id="particles-js">
    <nav id="nav">
            <ul>
                <li><a href="../">Home</a></li>
                <li><a href="../index.php#about">About</a></li>
                <li><a href="../views/events.php">Events</a></li>
                <li><a href="../index.php#social">Social Cause</a></li>
                <li><a href="../index.php#sponsors">Sponsors</a></li>
            </ul>
        </nav>
        <!-- Registeration form  -->
        <div class="register" id="signupform">
            <form action="../controllers/signup.ini.php" method="POST" class="myform" id="form">
                <div class="logo">
                <h3 style="font-size:25px;margin:45px 0px 20px;color: White;float:left;">Register</h3>
                    <img src="../log.png" class="logo">
                </div>
                <h3 style="font-size:25px;margin:0px 0px 20px;color: pureple;" id="myhead">Register</h3>
                <div class="title" style="margin-top:25px;">
                    <label for="fname">Full Name</label>
                    <input type="text" name="fname" id="fname" required="required">
                </div>
                <div class="title">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" id="email" required="required">
                </div>
                <div class="title">
                    <label for="phone">Mobile Number</label>
                    <input type="number" name="phone" id="phone" required="required">
                </div>
                <div class="title">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required="required">
                </div>
                
                <div class="title">
                    <label for="college">College Name</label>
                    <select name="college" id="college" required="required">
                        <option value="Birla Institute of Technology, Ranchi">BIT Mesra, Ranchi</option>
                        <option value="St. Xavier's Ranchi">St. Xavier's Ranchi</option>
                        <option value="Gossner College, Ranchi">Gossner College</option>
                        <option value="BIT Mesra, Mesra">BIT Mesra, Main Cmapus </option>
                        <option value="other">Other</option>
                    </select>
                    <input type="text" id="college1" style="display:none;" name="college1" placeholder="college name ">
                    <div style="margin-top:15px;font-size: 14px;">
                        Already have an account? <a href="" id="click1">Login here</a>
                    </div>
                </div>
                <p style="color:red;">
                    <?php
                    if(isset($_GET['error'])){
                        echo $_GET['error'];
                    }
                    ?>
                </p>
                <div class="title">
                    <input type="submit" value="Register" name="submit" class="btn">
                </div>
                
            </form>
        </div>


        <div class="register" id="loginform" style="display:none">
            <form action="../controllers/login.php" method="POST" class="myform" id="form1">
                <div class="logo">
                <h3 style="font-size:25px;margin:45px 0px 20px;color: White;float:left;">Login</h3>
                    <img src="../log.png" class="logo">
                </div>
                <h3 style="font-size:25px;margin:0px 0px 20px;color: pureple;" id="myhead">Login</h3>
                
                <div class="title" style="margin-top:30px;">
                    <label for="email1">Email Address</label>
                    <input type="email" name="email" id="email1" required="required">
                </div>
                
                <div class="title">
                    <label for="password1">Password</label>
                    <input type="password" name="password" id="password1" required="required">
                </div>
                
                <div style="margin-top:15px;font-size: 14px;font-weight: bold;">
                        Don't have an account? <a href="" id="click2">Signup here</a>
                    </div>
                
                <div style="margin-top:15px;font-size: 14px;text-align:right">
                    Forgot Password? <a href="../views/forgot.php">Reset Password</a>
                </div>
                <p style="color:red;">
                    <?php
                    if(isset($_GET['error'])){
                        echo $_GET['error'];
                    }
                    ?>
                </p>
                <div class="title">
                    <input type="submit" value="Login" name="submit" class="btn">
                </div>
                
            </form>
        </div>            

    </div>
    
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib --> <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
    <script src="../script.js"></script>
    <script>
        // internal script codes (if any down here) 
        function getId(name){
            return document.getElementById(name);
        }
        
        let form = getId("college");
        let other = getId("college1");
        form.addEventListener('change', function(e){
            let value = college.value;
            value = value.toLowerCase();
            if(value.match("other")){
                other.style.display="block";
            }else{
                other.style.display="none";
            }
        });

        let click1 = document.getElementById('click1');
        click1.onclick = function(e) {
            e.preventDefault();
            document.getElementById('signupform').style.display = "block";
            document.getElementById('loginform').style.display = "none";
        }

        let click2 = document.getElementById('click1');
        click2.onclick = function(e) {
            e.preventDefault();
            document.getElementById('signupform').style.display = "none";
            document.getElementById('loginform').style.display = "block";
            console.log("aasd");
        }
    </script>
</body>
</html>