<?php 

class Session {

    public static function check($name) {
        if(isset($_SESSION['$name'])){
            return true;
        }else{
            return false;
        }
    }
    
} 