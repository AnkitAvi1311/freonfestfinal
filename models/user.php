<?php 

// function to create the navigation bar
function navigation() {
    ?>
    <nav id="nav">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="views/events.php">Events</a></li>
                <li><a href="#social">Social Cause</a></li>
                <li><a href="#sponsors">Sponsors</a></li>
                <li class="more dropdown">
                    <a href="#">More</a>
                    <div class="drop-content">
                        <div><a href="#contact">Contact us</a></div>
                        <div><a href="#sitemap">Sitemap</a></div>
                    </div>
                </li>
                
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
                        <li class="right signup" style="border: 1px solid white;border-radius: 30px;padding: 0px 15px;"><a href="#">Register</a></li>
                <li class="right" style="margin-right: 15px;"><a href="#">Login</a></li>

                <?php
                    }
                ?>
            </ul>
        </nav>
        <?php
}