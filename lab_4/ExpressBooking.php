<?php
require_once 'BookingTemplate.php';

/**
 * Швидке бронювання.
 */
class ExpressBooking extends BookingTemplate {
    protected function selectHotel(): void {
        echo "Автоматичний вибір готелю.\n";
    }

    protected function chooseFlight(): void {
        echo "Автоматичний вибір рейсу.\n";
    }

    protected function makePayment(): void {
        echo "Миттєва оплата.\n";
    }

    protected function sendConfirmation(): void {
        echo "Автоматичне підтвердження відправлено.\n";
    }
}
