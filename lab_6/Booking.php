<?php
require_once 'BookingMemento.php';

class Booking {
    private string $status;

    public function __construct(string $status) {
        $this->status = $status;
    }

    public function setStatus(string $status): void {
        $this->status = $status;
    }

    public function getStatus(): string {
        return $this->status;
    }

    public function save(): BookingMemento {
        return new BookingMemento($this->status);
    }

    public function restore(BookingMemento $memento): void {
        $this->status = $memento->getState();
    }
}
