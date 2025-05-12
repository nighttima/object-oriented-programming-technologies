<?php
require_once 'BookingImplementor.php';

class APIv1Booking implements BookingImplementor {
    public function implementBooking(): void {
        echo "Бронювання через API v1.\n";
    }
}
