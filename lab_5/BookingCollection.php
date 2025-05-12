<?php
require_once 'BookingIterator.php';

class BookingCollection {
    private array $bookings = [];

    public function addBooking(Booking $booking): void {
        $this->bookings[] = $booking;
    }

    public function getIterator(): BookingIterator {
        return new BookingIterator($this->bookings);
    }
}
