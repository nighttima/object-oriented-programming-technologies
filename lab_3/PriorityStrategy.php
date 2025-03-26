<?php
require_once 'BookingStrategy.php';

class PriorityStrategy implements BookingStrategy {
    public function process(): void {
        echo "Пріоритетна обробка замовлення.\n";
    }
}
