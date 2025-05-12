<?php
require_once 'BookingImplementor.php';

class APIv2Booking implements BookingImplementor {
    public function implementBooking(): void {
        echo "Бронювання через API v2.\n";
    }
}
