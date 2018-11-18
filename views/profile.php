<?php

session_start();
include "../controllers/session.php";
if(Session::check("user")){
    header("location: ../?error=you have been logged out due to session timeout");
    exit;
}

