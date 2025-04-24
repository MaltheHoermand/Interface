<?php
require_once('classes/VehicleFeatures.php');
require_once('classes/Car.php');
require_once('classes/MyAuto.php');
require_once('classes/Truck.php');


$mitHorn = new Car();
$opelKadet = new MyAuto();
$opelKadet->pushHorn($mitHorn);