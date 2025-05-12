<?php
require_once 'BookingState.php';

class NewState implements BookingState {
    public function proceed(Booking $booking): void {
        echo "Статус: обробляється\n";
    }
    public function cancel(Booking $booking): void {
        echo "Статус: скасовано\n";
    }
}
