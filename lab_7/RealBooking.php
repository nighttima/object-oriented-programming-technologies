<?php
require_once 'BookingInterface.php';

class RealBooking implements BookingInterface {
    public function cancel(): void {
        echo "Бронювання успішно скасовано.\n";
    }
}
