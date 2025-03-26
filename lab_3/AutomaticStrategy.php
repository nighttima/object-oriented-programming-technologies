<?php
require_once 'BookingStrategy.php';

class AutomaticStrategy implements BookingStrategy {
    public function process(): void {
        echo "Обробка замовлення автоматично.\n";
    }
}
