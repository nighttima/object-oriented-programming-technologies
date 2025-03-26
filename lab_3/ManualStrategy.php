<?php
require_once 'BookingStrategy.php';

class ManualStrategy implements BookingStrategy {
    public function process(): void {
        echo "Обробка замовлення вручну.\n";
    }
}
