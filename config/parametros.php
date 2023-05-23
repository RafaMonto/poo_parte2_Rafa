<?php
include_once('Class.php');
include_once('MotorClass.php');
require '../modal.php';


if(isset($_POST['btn'])){
   $user = $_POST['user'];
   $pass = $_POST['pass'];

   //instanciar el objeto
   $log = new Log($user,$pass);

   $log->login();

   // llamado función de loguin
   $response = $log->login();

   echo $response; 

   if ($response=="verdadero") {
      header("Location: ../home.php?user=" . urlencode($user). "&pass=" . urldecode($pass)); 
   }else{
   echo '<script language="javascript">alert("Error En Datos");window.location.href = "../index.php";</script>';
   }
}


if(isset($_POST['close'])){
   $user = $_POST['user'];
   $pass = $_POST['pass'];
   $userclose = new Log($user, $pass);
   
   unset($userclose);
   $url = "../index.php";
   $tiempo = 2;

   header("refresh: $tiempo; url= $url");
}

if(isset($_POST['regis'])){
   $marca = $_POST['marca'];
   $modelo = $_POST['modelo'];
   $año = $_POST['año'];
   $color = $_POST['color'];
   $npuertas = $_POST['npuertas'];
   $tcarroceria = $_POST['carroceria'];
   $transmi = $_POST['transmi'];
   $combus = $_POST['combus'];
   $kilo = $_POST['kilo'];
   $cpasa = $_POST['cpasa'];
   $carga = $_POST['carga'];
   $frenos = $_POST['frenos'];
   $segu = $_POST['segu'];
   $placa = $_POST['placa'];
   $potencia = $_POST['potencia'];
   $precio = $_POST['precio'];

   $carro = new MotorClass($marca, $modelo, $año, $color, $npuertas, $tcarroceria, $transmi, $combus, $kilo, $cpasa, $carga, $frenos, $segu, $placa, $potencia, $precio);

   $carro->agregar();
}