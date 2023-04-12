<?php
// function conectar(){
  //  $host="localhost";
   // $user="root";
  //  $pass="";
 //   $bd="php_login";
 //   $conn=mysqli_connect($host,$user,$pass);
 //   mysqli_select_db($conn,$bd);
  //  return $conn;
//}

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'php_login'
  ) or die(mysqli_erro($mysqli));

?>