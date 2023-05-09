<?php
class Log{
    public $user;
    public $pass;
    public function __construct($user, $pass){
        $this->user = $user;
        $this->pass = $pass;
    }

    public function login(){
        {
            try {
    
                # Conexión a MySQL
                // Instantiate database.
                $cnn = $this->conn();
            
                    //Preparamos la consulta sql
                    $stmt = $cnn->prepare("SELECT * FROM iniciar WHERE Usuario=:administrador AND Contraseña=:12345678"); 
                    $stmt->bindParam("administrator", $this->user,PDO::PARAM_STR) ;
                    $stmt->bindParam("12345678", $this->pass,PDO::PARAM_STR) ;
                    //Ejecutamos la consulta
                    $stmt->execute();
                    $count=$stmt->rowCount();
                    $data=$stmt->fetch(PDO::FETCH_OBJ);
                    $db = null;
                    $mesage= "";
                    if($count)
                    {
                    
                        $mesage = "verdadero";
                    }
                    else
                    {
                        $mesage = "Falso";
    
    
                    } 
                    }
                    catch(PDOException $e) {
                    echo '{"error":{"text":'. $e->getMessage() .'}}';
                    }
                    return $mesage;
        }
    }

    public function __destruct(){

    }
}
