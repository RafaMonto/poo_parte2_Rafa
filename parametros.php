<?
include_once('Class.php');

if(isset($_POST['btn'])){
$user = $_POST['user'];
$pass = $_POST['pass'];
//instanciar el objeto
$user = new Log();
// llamado función de loguin
$user->login($user,$pass);

$response = $user->login($user,$pass);

 echo $response; 

 if ($response==="verdadero") {
    header("Location: ../home.php"); 
 }

 else{
    echo '<script language="javascript">alert("Error En Datos");window.location.href = "../index.php";</script>';
    
}
}