<?php

require_once 'Car.php';



// CAR
$car = new Car('color', 5, 'fuel');



$car->setParkBrake(false);
echo $car->changePark();
echo '<br/>';
$car->setParkBrake(true);
echo $car->changePark();