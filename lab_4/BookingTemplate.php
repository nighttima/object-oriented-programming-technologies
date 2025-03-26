<?php
/**
 * Абстрактний клас, що описує шаблон процесу бронювання.
 */
abstract class BookingTemplate {
    /**
     * Основний алгоритм.
     */
    public function processBooking(): void {
        $this->selectHotel();
        $this->chooseFlight();
        $this->makePayment();
        $this->sendConfirmation();
    }

    abstract protected function selectHotel(): void;
    abstract protected function chooseFlight(): void;
    abstract protected function makePayment(): void;
    abstract protected function sendConfirmation(): void;
}
