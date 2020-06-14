<?php
include '../class/Usuario.php';
 if(isset($_POST['name'])&&isset($_POST['lastname'])&&isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['phone'])){
   $usuario = new Usuario();
   $usuario->setName($_POST['name']);
   $usuario->setLastName($_POST['lastname']);
   $usuario->setEmail($_POST['email']);
   $usuario->setPassword($_POST['password']);
   $usuario->setPhone($_POST['phone']);
   if($usuario->userExists()==true){
    print "<script>alert(\"*****El usuario ya existe*******\");window.location='../index.php';</script>";
   }else{
    $usuario->addUser();
   } print "<script>alert(\"*****Usuario agregado correctamente *******\");window.location='../index.php';</script>";
   return;
 }
?>