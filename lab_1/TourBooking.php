<?php
require_once 'Booking.php';

/**
 * Клас бронювання туру.
 */
class TourBooking implements Booking {
    /**
     * Виконує бронювання туру.
     *
     * @return void
     */
    public function book(): void {
        echo "Бронювання туру створено.\n";
    }
}
