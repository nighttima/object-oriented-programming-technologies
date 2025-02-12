<?php
require_once 'BookingPrototype.php';

/**
 * Клас бронювання авіаквитка з підтримкою клонування.
 */
class FlightBookingPrototype implements BookingPrototype {
    /**
     * Клонує бронювання авіаквитка.
     *
     * @return BookingPrototype
     */
    public function clone(): BookingPrototype {
        return clone $this;
    }
}
