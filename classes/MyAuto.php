<?php
require_once('VehicleFeatures.php');
class MyAuto {
    public function pushHorn(VehicleFeatures $hornType) {
        $hornType->soundhorn();
    }
}
