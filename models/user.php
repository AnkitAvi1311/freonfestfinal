<?php 

class User {
    private $fname;
    private $email;
    private $mobile;
    private $userid;

    public function __construct($fname, $email, $mobile, $userid) {
        $this->fname = $fname;
        $this->email = $email;
        $this->mobile = $mobile;
        $this->userid = $userid;
    }

    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }
}