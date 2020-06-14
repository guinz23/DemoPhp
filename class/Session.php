<?php
include '../config/dbconection.php';
class Session {

    private $password;
    private $email;
    public $conexion;

    function __construct() {
        $this->password="";
        $this->email="";
        $this->conexion=new DB();
    }

    public function login() {
        $sql = "select * from users where email='$this->email' and password='$this->password'";
        $user = $this->conexion->get( $sql );
        session_start();
        $_SESSION['ID'] = $user[0]; 
        $_SESSION['EMAIL'] = $user[1];
        $_SESSION['LASTNAME'] = $user[2];
    }

    public function logout() {
        session_start();
        session_destroy();
    }

    public function resetPassword() {

    }

    function setPassword( $password ) {
        $this->password = md5($password);
    }

    function setEmail($email) {
        $this->email = $email;
    }
}
?>