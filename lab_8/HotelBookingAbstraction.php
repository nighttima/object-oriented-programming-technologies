<?php
require_once 'BookingAbstraction.php';

class HotelBookingAbstraction extends BookingAbstraction {
    public function book(): void {
        echo "Запуск бронювання готелю...\n";
        $this->implementor->implementBooking();
    }
}
