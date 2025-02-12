<?php
require_once 'LuxuryTourBuilder.php';

/**
 * Директор, що управляє процесом створення турпакетів.
 */
class Director {
    private TourPackageBuilder $builder;

    public function setBuilder(TourPackageBuilder $builder): void {
        $this->builder = $builder;
    }

    public function constructLuxuryTour(): TourPackage {
        $this->builder->addHotel();
        $this->builder->addFlight();
        $this->builder->addExcursion();
        return $this->builder->getTourPackage();
    }
}
