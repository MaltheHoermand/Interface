<?php
require_once('VehicleFeatures.php');
class Car implements VehicleFeatures
{

    /**
     * prints car horn sound
     * @return void
     */
    public function soundhorn()
    {
        echo "Beep";
    }
}