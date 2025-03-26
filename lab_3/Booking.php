<?php
require_once 'Observer.php';

class Booking {
    private array $observers = [];
    private string $status;

    public function attach(Observer $observer): void {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer): void {
        $this->observers = array_filter($this->observers, fn($obs) => $obs !== $observer);
    }

    public function notifyObservers(): void {
        foreach ($this->observers as $observer) {
            $observer->update($this->status);
        }
    }

    public function setStatus(string $status): void {
        $this->status = $status;
        $this->notifyObservers();
    }
}
