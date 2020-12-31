<?php
    include ("Account.php");
    include ("Car.php");

        $car = new Car("DDD222", new Account("Juanchito", "lll222"));
        $car->PrintDataCar();
?>
