<?php
require_once 'BookingPrototype.php';

/**
 * Клас бронювання готелю з підтримкою клонування.
 */
class HotelBookingPrototype implements BookingPrototype {
    /**
     * Клонує бронювання готелю.
     *
     * @return BookingPrototype
     */
    public function clone(): BookingPrototype {
        return clone $this;
    }
}
