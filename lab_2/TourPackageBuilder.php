<?php
require_once 'TourPackage.php';

/**
 * Інтерфейс для створення турпакетів.
 */
interface TourPackageBuilder {
    public function addHotel(): void;
    public function addFlight(): void;
    public function addExcursion(): void;
    public function getTourPackage(): TourPackage;
}
