<?php
require_once "Account.php";
class Car {
    public $id;
    public $license;
    public $driver;
    public $passegenger;

    public function __construct($license, $driver){
        $this->license = $license;
        $this->driver = $driver;
    }

    public function PrintDataCar(){ 
        echo "License: " .$this->license ."<br>" . "Driver: " .$this->driver->name;

    }
}

?>