<?php
session_start(); 
include "koneksi.php";
$username = $_POST['username']; 
$password = $_POST['password']; 
$password = ($password); 
$sql = $pdo->prepare("SELECT * FROM user WHERE username=:a AND password=:b");
$sql->bindParam(':a', $username);
$sql->bindParam(':b', $password);
$sql->execute(); 
$data = $sql->fetch(); 

if( ! empty($data)){ 
  $_SESSION['username'] = $data['username']; 
  $_SESSION['nama'] = $data['nama']; 
  $cookie_name = "user";
  $cookie_value = "indah";
  setcookie($cookie_name,$cookie_value,time()+ 86400* 30), "/");
  setcookie("message","delete",time()-1); 
  
  header("location: awal.php"); 
}else{ 

  setcookie("message", "Maaf, Username atau Password salah", time()+3600);
  
  header("location: index.php"); 
}
?>