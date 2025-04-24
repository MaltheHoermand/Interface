<?php
require_once('VehicleFeatures.php');
class MyAuto {

    /**
     * prints runs the soundhorn method of a vehicle
     * @param VehicleFeatures $hornType
     * @return void
     */
    public function pushHorn(VehicleFeatures $hornType) {
        $hornType->soundhorn();
    }
}
