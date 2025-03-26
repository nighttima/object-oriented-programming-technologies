<?php
require_once 'BookingStrategy.php';

class BookingProcessor {
    private BookingStrategy $strategy;

    public function setStrategy(BookingStrategy $strategy): void {
        $this->strategy = $strategy;
    }

    public function processBooking(): void {
        $this->strategy->process();
    }
}
