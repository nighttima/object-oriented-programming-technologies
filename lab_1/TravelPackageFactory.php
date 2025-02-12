<?php
require_once 'HotelBooking.php';
require_once 'FlightBooking.php';

/**
 * Інтерфейс для створення туристичних пакетів.
 */
interface TravelPackageFactory {
    /**
     * Створює бронювання готелю.
     *
     * @return Booking
     */
    public function createHotelBooking(): Booking;

    /**
     * Створює бронювання авіаквитка.
     *
     * @return Booking
     */
    public function createFlightBooking(): Booking;
}

/**
 * Фабрика для розкішних турпакетів.
 */
class LuxuryPackageFactory implements TravelPackageFactory {
    public function createHotelBooking(): Booking {
        return new HotelBooking();
    }

    public function createFlightBooking(): Booking {
        return new FlightBooking();
    }
}

/**
 * Фабрика для економних турпакетів.
 */
class EconomyPackageFactory implements TravelPackageFactory {
    public function createHotelBooking(): Booking {
        return new HotelBooking();
    }

    public function createFlightBooking(): Booking {
        return new FlightBooking();
    }
}
