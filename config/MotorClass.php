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
    }
}