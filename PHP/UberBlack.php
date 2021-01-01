<?php 
require_once('car.php');
class UberBlack extends Car {
    //Definir variables de la clase hijo en este caso UberBlack
    public $typeCarAccepted;
    public $seatsMaterial;


    public function __construct($license, $driver, $typeCarAccepted, $seatsMaterial){ //Clase padre
        parent::__construct($license, $driver); // Se pasan estos datos a la clase padre
        $this->brand = $typeCarAccepted;
        $this->model = $seatsMaterial;
    }
}
?>