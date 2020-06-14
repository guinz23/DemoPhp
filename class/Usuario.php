<?php
include '../config/dbconection.php';
include '../http/client.php';

class Usuario {
    private $name;
    private $lastname;
    private $email;
    private $password;
    private $phone;
    public  $conexion;
    public  $client;

    function __construct() {
        $this->name = '';
        $this->lastname = '';
        $this->email = '';
        $this->password = '';
        $this->phone = 0;
        $this->conexion=new DB();
        $this->client=new  ClientHttp();
    }

    public function addUser() {
        $sql = "INSERT INTO users(name,lastname,email,password,phone) VALUES ('$this->name','$this->lastname','$this->email','$this->password','$this->phone')";
        $this->conexion->create($sql);
    }
    
    public function userExists() {
        $sql = "SELECT * FROM users WHERE name='$this->name'LIMIT 1";
        return $this->conexion->find($sql);
    }

    function setName($name) {
        $this->name = $name;
    }

    function setLastName($lastname) {
        $this->lastname = $lastname;
    }
    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password =md5($password);
    }
    function setPhone($phone) {
        $this->phone = $phone;
    }
}
?>