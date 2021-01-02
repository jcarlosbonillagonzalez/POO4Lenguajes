<?php
require_once("Payment.php");

class efectivo extends Payment {

    public function __construct($id){
        parent::__construct($id);
    }
}

?>