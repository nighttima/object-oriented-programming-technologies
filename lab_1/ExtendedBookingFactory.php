<?php
require_once 'TourBooking.php';
require_once 'ExcursionBooking.php';

/**
 * Фабрика для створення бронювання туру.
 */
class TourBookingFactory extends BookingFactory {
    public function createBooking(): Booking {
        return new TourBooking();
    }
}

/**
 * Фабрика для створення бронювання екскурсії.
 */
class ExcursionBookingFactory extends BookingFactory {
    public function createBooking(): Booking {
        return new ExcursionBooking();
    }
}
