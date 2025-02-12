<?php
require_once 'Booking.php';

/**
 * Клас бронювання екскурсії.
 */
class ExcursionBooking implements Booking {
    /**
     * Виконує бронювання екскурсії.
     *
     * @return void
     */
    public function book(): void {
        echo "Бронювання екскурсії створено.\n";
    }
}
