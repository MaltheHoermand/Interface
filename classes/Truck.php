<?php
require_once('VehicleFeatures.php');
class Truck implements VehicleFeatures
{
    /**
     * prints truck horn sound
     * @return void
     */
    public function soundhorn()
    {
        echo "Honk!";
    }
}