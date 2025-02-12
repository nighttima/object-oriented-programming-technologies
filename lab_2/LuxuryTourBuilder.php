<?php
require_once 'TourPackageBuilder.php';

/**
 * Будівельник для створення розкішних турів.
 */
class LuxuryTourBuilder implements TourPackageBuilder {
    private TourPackage $package;

    public function __construct() {
        $this->package = new TourPackage();
    }

    public function addHotel(): void {
        $this->package->hotel = "5-зірковий готель";
    }

    public function addFlight(): void {
        $this->package->flight = "Бізнес-клас авіапереліт";
    }

    public function addExcursion(): void {
        $this->package->excursion = "Екскурсія з гідом";
    }

    public function getTourPackage(): TourPackage {
        return $this->package;
    }
}
