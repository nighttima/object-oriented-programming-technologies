<?php
interface Iterator {
    public function current(): Booking;
    public function next(): void;
    public function hasNext(): bool;
}
