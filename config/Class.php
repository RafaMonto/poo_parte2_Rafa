<?php

include_once('db.php');

class Log extends DatabasePDO{

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
                    $stmt = $cnn->prepare("SELECT * FROM iniciar WHERE Usuario=:armando AND Contraseña=:maradona"); 
                    $stmt->bindParam("armando", $this->user,PDO::PARAM_STR) ;
                    $stmt->bindParam("maradona", $this->pass,PDO::PARAM_STR) ;
                    //Ejecutamos la consulta
                    $stmt->execute();
                    $count=$stmt->rowCount();
                    $mesage= "";
                    if($count){
                    
                        $mesage = "verdadero";

                    }else{

                        $mesage = "Falso";

                    } 
            }catch(PDOException $e){
                echo '{"error":{"text":'. $e->getMessage() .'}}';
            }
            return $mesage;
        }
    }

    public function __destruct(){
        unset($this->user);
        unset($this->pass);
        echo "<script>alert('Se ha borrado la clase');</script>";
    }
}
