<?php 

include "../models/user.php";
include "../controllers/session.php";
session_start();
if(Session::check("user")){
    header("location: ../?error=you are already logged in");
    exit();
}

class Signup {
    private $fname;
    private $email;
    private $password;
    private $phone;
    private $colleg;
    private $conn;

    // constructor function to setup the connection
    public function __construct() {
        $this->conn = new mysqli("localhost","root","","freonfest");
        if(!$this->conn->connect_error){
            return true;
        }else{
            header("location: ../views/signup.php?error=Connection Error");
        }
    }

    // function to get the values
    private function getVal() {
        if(isset($_POST['submit'])){
            $this->fname = $_POST['fname'];
            $this->email = $_POST['email'];
            $this->password = htmlspecialchars(password_hash($_POST['password'],PASSWORD_DEFAULT));
            $this->phone = $_POST['phone'];
            $this->college = $_POST['college'];
            if(strcasecmp($this->college,"other")===0){
                $this->college = $_POST['college1'];
            }
        }
    }

    function sendEmail() {
        $to = $this->email;
        $subject = "Registeration Succesful";
        $txt = "<h2>Registeration Succesful</h2>";
        $txt.= "<h3>Our team at Freonfest welcomes you the Ranchi's BIggest Festival in which all colleges of Ranchi will be coming </h3>";
        $txt.="<br/><br/><h4>This is a system generated Email. Please do not reply to this email</h4>";
        $headers = "From: kumar.ankit383@gmail.com";

        mail($to,$subject,$txt,$headers);
    }

    public function signup() {
        $this->getVal();
        $reg = '/^[a-zA-Z0-9\.\-_]+\@[a-zA-Z0-9\-\._]+\.([a-zA-Z]{2,4})+$/';
        if(preg_match($reg, $this->email)===0){
            header("location: ../views/signup.php?error=Ivalid email address");
        }else{
            $sql = "INSERT INTO userinfo (fname, email, phone, pwd, college) VALUES ('$this->fname', '$this->email','$this->phone','$this->password','$this->college') ";
            if($this->conn->query($sql)){
                $user = new User($this->fname, $this->email, $this->phone, $this->conn->insert_id);
                $_SESSION['user'] = $user;
                echo "Registeration Successful";
                $this->sendEmail();
                echo "An email has been sent to your registered Email address for verification";
            }else{
                header("location: ../views/signup.php?error=User already exists");
            }
        }        
    }
}

$ob = new Signup();
$ob->signup();