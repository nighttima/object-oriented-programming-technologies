<?php
/**
 * Інтерфейс для бронювань.
 */
interface Booking {
    /**
     * Виконує бронювання.
     *
     * @return void
     */
    public function book(): void;
}
