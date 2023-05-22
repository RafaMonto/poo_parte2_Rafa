<?php
class MotorClass extends DatabasePDO{
    public $marca;
    public $modelo;
    public $año;
    public $color; 
    public $npuertas;
    public $tcarroceria;
    public $transmi;
    public $combus;
    public $kilo;
    public $cpasa;
    public $carga;
    public $frenos;
    public $segu;
    public $confort;
    public $potencia;
    public $precio;
    
    public function __construct($mar, $mod, $año, $col, $npu, $tca, $tra, $com, $kil, $cpa, $car, $fre, $seg, $con, $pot, $pre){
        $this->marca = $mar;
        $this->modelo = $mod;
        $this->año = $año;
        $this->color = $col;
        $this->npuertas = $npu;
        $this->tcarroceria = $tca;
        $this->transmi = $tra;
        $this->combus = $com;
        $this->kilo = $kil;
        $this->cpasa = $cpa;
        $this->carga = $car;
        $this->frenos = $fre;
        $this->segu = $seg;
        $this->confort = $con;
        $this->potencia = $pot;
        $this->precio = $pre;
    }

    public function agregar(){
        try {

            $cnn = $this->conn();
            // set the PDO error mode to exception
            $stmt = $cnn->prepare("INSERT INTO `carros`(`Marca`, `Modelo`, `Año`, `Color`, `Numero_Puertas`, `Tipo_Carroceria`, `Transmision`, `Combustible`, `Kilometraje`, `Capacidad_Pasajeros`, `Capacidad_Carga`, `Sistema_Frenos`, `Equipamento_Seguridad`, `Equipamento_Confort`, `Potencia`, `Precio`) VALUES (':marca',':modelo',':año',':color',':npuertas',':tcarroceria',':transmi',':combus',':kilo',':cpasa',':carga',':frenos',':segu',':confort',':potencia',':precio'");
            $stmt->bindParam("marca", $this->marca,PDO::PARAM_STR) ;
            $stmt->bindParam("modelo", $this->modelo,PDO::PARAM_STR) ;
            $stmt->bindParam("año", $this->año,PDO::PARAM_STR) ;
            $stmt->bindParam("color", $this->color,PDO::PARAM_STR) ;
            $stmt->bindParam("npuertas", $this->npuertas,PDO::PARAM_STR) ;
            $stmt->bindParam("tcarroceria", $this->tcarroceria,PDO::PARAM_STR) ;
            $stmt->bindParam("trasnmi", $this->transmi,PDO::PARAM_STR) ;
            $stmt->bindParam("combus", $this->combus,PDO::PARAM_STR) ;
            $stmt->bindParam("kilo", $this->kilo,PDO::PARAM_STR) ;
            $stmt->bindParam("cpasa", $this->cpasa,PDO::PARAM_STR) ;
            $stmt->bindParam("carga", $this->carga,PDO::PARAM_STR) ;
            $stmt->bindParam("frenos", $this->frenos,PDO::PARAM_STR) ;
            $stmt->bindParam("segu", $this->segu,PDO::PARAM_STR) ;
            $stmt->bindParam("confort", $this->confort,PDO::PARAM_STR) ;
            $stmt->bindParam("potencia", $this->potencia,PDO::PARAM_STR) ;
            $stmt->bindParam("precio", $this->precio,PDO::PARAM_STR) ;
            $stmt->execute();
            $count=$stmt->rowCount();
            $mesage= "";
            if($count){
                $mesage = "verdadero";
            }else{
                $mesage = "Falso";
            } 
            }catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
            }
        return $mesage;
    }   
}
