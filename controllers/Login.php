<?php
include '../class/Session.php';
 if(isset($_REQUEST['email'])&&isset($_REQUEST['password'])){
   $session = new Session();
   $session->setEmail($_POST['email']);
   $session->setPassword($_POST['password']);
   $session->login();
   print "<script>alert(\"*****Session Iniciada Correctamente *******\");window.location='../main.php';</script>";
   return;
 }

 if(isset($_REQUEST['logout'])){
  $session = new Session();
  $session->logout();
  print "<script>alert(\"*****Session Cerrada Correctamente *******\");window.location='../index.php';</script>";
  return;
 }
?>