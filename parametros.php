<?
include_once('Class.php');

if(isset($_POST['btn'])){
$user = $_POST['user'];
$pass = $_POST['pass'];
//instanciar el objeto
$log = new Log($user,$pass);
// llamado función de loguin
$log->login($user, $pass);
}

$response = $log->login($user, $pass);

 echo $response; 

 if ($response==="verdadero") {
    header("Location: home.php"); 
 }

 else{
    echo '<script language="javascript">alert("Error En Datos");window.location.href = "index.php";</script>';
    
}


if(isset($_POST['close'])){
   upset($log);
   header("Location: index.php"); 
}