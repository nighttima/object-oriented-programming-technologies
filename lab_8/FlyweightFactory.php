<?php
require_once 'HotelFlyweight.php';

class FlyweightFactory {
    private array $flyweights = [];

    public function getFlyweight(string $sharedState): Flyweight {
        if (!isset($this->flyweights[$sharedState])) {
            $this->flyweights[$sharedState] = new HotelFlyweight($sharedState);
        }
        return $this->flyweights[$sharedState];
    }
}
