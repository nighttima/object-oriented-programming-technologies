<?php
require_once 'BookingMemento.php';

class BookingHistory {
    private array $history = [];

    public function addMemento(BookingMemento $memento): void {
        $this->history[] = $memento;
    }

    public function getMemento(int $index): BookingMemento {
        return $this->history[$index];
    }
}
