<?php
/**
 * Інтерфейс для клонування бронювань.
 */
interface BookingPrototype {
    /**
     * Клонує об'єкт бронювання.
     *
     * @return BookingPrototype
     */
    public function clone(): BookingPrototype;
}
