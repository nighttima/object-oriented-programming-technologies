<?php
require_once 'BookingTemplate.php';

/**
 * Стандартне бронювання.
 */
class StandardBooking extends BookingTemplate {
    protected function selectHotel(): void {
        echo "Готель вибрано (стандарт).\n";
    }

    protected function chooseFlight(): void {
        echo "Рейс вибрано (економ).\n";
    }

    protected function makePayment(): void {
        echo "Оплата здійснена (звичайна процедура).\n";
    }

    protected function sendConfirmation(): void {
        echo "Підтвердження надіслано клієнту.\n";
    }
}
