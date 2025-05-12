<?php
require_once 'Iterator.php';
require_once 'Booking.php';

class BookingIterator implements Iterator {
    private array $bookings;
    private int $position = 0;

    public function __construct(array $bookings) {
        $this->bookings = $bookings;
    }

    public function current(): Booking {
        return $this->bookings[$this->position];
    }

    public function next(): void {
        $this->position++;
    }

    public function hasNext(): bool {
        return isset($this->bookings[$this->position]);
    }
}
