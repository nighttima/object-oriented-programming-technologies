<?php
require_once 'Booking.php';

/**
 * Клас бронювання авіаперельоту.
 */
class FlightBooking implements Booking {
    /**
     * Виконує бронювання авіаквитка.
     *
     * @return void
     */
    public function book(): void {
        echo "Бронювання авіаквитка створено.\n";
    }
}
