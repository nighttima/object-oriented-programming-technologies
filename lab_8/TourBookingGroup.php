<?php
require_once 'BookingComponent.php';

class TourBookingGroup implements BookingComponent {
    private array $children = [];

    public function add(BookingComponent $component): void {
        $this->children[] = $component;
    }

    public function display(): void {
        echo "Група послуг:\n";
        foreach ($this->children as $child) {
            $child->display();
        }
    }
}
