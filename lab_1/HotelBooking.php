<?php
require_once 'Booking.php';

/**
 * Клас бронювання готелю.
 */
class HotelBooking implements Booking {
    /**
     * Виконує бронювання готелю.
     *
     * @return void
     */
    public function book(): void {
        echo "Бронювання готелю створено.\n";
    }
}
