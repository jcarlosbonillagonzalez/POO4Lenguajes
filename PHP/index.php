<?php 
    require_once("car.php");
    require_once("uberX.php");
    require_once("UberPool.php");
    require_once("account.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Programación Orientada a Objetos PHP</h1>
<?php
    $uberX = new UberX("CSC222", new Account("Andres Herrera", "93939393"), "Chevrolet", "Aveo");
    $uberX->printDataCar();
?>
<br>
<?php    
    $uberPool = new UberPool("LCH767", new Account("Lizeth Gutierrez", "568887"), "Mazda", "Sedan");
    $uberPool->printDataCar();
?>

</body>
</html>
