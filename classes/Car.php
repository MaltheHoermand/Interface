<?php
require_once('VehicleFeatures.php');
class Car implements VehicleFeatures
{

    public function soundhorn()
    {
        echo "Beep";
    }
}