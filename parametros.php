<?php
include_once('Class.php');



if(isset($_POST['btn'])){
   $user = $_POST['user'];
   $pass = $_POST['pass'];
   //instanciar el objeto
   $log = new Log($user,$pass);
   // llamado función de loguin


   $response = $log->login();

   echo $response; 

   if ($response=="verdadero") {
      header("Location: home.php?user=" . urlencode($user). "&pass=" . urldecode($pass)); 
   }else{
   echo '<script language="javascript">alert("Error En Datos");window.location.href = "index.php";</script>';
   }
}


if(isset($_POST['close'])){
   $user = $_POST['user'];
   $pass = $_POST['pass'];
   $userclose = new Log($user, $pass);
   
   unset($userclose);
   $url = "./index.php";
   $tiempo = 2;

   header("refresh: $tiempo; url= $url");
}