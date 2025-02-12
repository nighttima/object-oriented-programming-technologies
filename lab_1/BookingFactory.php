<?php
require_once 'HotelBooking.php';
require_once 'FlightBooking.php';

/**
 * Абстрактна фабрика бронювань.
 */
abstract class BookingFactory {
    /**
     * Створює об'єкт бронювання.
     *
     * @return Booking
     */
    abstract public function createBooking(): Booking;
}

/**
 * Фабрика для створення бронювання готелю.
 */
class HotelBookingFactory extends BookingFactory {
    public function createBooking(): Booking {
        return new HotelBooking();
    }
}

/**
 * Фабрика для створення бронювання авіаперельоту.
 */
class FlightBookingFactory extends BookingFactory {
    public function createBooking(): Booking {
        return new FlightBooking();
    }
}
