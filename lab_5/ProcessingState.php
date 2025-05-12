<?php
require_once 'BookingState.php';

class ProcessingState implements BookingState {
    public function proceed(Booking $booking): void {
        echo "Статус: завершено\n";
    }
    public function cancel(Booking $booking): void {
        echo "Скасування під час обробки\n";
    }
}
