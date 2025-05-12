<?php
class BookingMemento {
    public function __construct(private string $state) {}

    public function getState(): string {
        return $this->state;
    }
}
