<?php
require_once 'BookingComponent.php';

class SingleBooking implements BookingComponent {
    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function display(): void {
        echo "Окрема послуга: {$this->name}\n";
    }
}
