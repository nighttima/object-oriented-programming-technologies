<?php
require_once 'BookingState.php';

class BookingContext {
    private BookingState $state;

    public function setState(BookingState $state): void {
        $this->state = $state;
    }

    public function proceed(Booking $booking): void {
        $this->state->proceed($booking);
    }

    public function cancel(Booking $booking): void {
        $this->state->cancel($booking);
    }
}
