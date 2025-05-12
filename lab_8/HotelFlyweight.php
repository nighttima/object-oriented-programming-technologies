<?php
require_once 'Flyweight.php';

class HotelFlyweight implements Flyweight {
    private string $sharedState;

    public function __construct(string $sharedState) {
        $this->sharedState = $sharedState;
    }

    public function render(string $uniqueData): void {
        echo "Готель: {$this->sharedState}, Кімната: {$uniqueData}\n";
    }
}
