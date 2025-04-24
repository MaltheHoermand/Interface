<?php
require_once('VehicleFeatures.php');
class Truck implements VehicleFeatures
{
    public function soundhorn()
    {
        echo "Honk!";
    }
}