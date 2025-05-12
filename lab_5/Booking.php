<?php
/**
 * Модель бронювання.
 */
class Booking {
    public function __construct(
        public int $id,
        public string $status
    ) {}
}
