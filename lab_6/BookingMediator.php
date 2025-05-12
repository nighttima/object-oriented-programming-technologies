<?php
require_once 'Mediator.php';

class BookingMediator implements Mediator {
    public Booking $booking;
    public Logger $logger;
    public Notifier $notifier;

    public function notify(object $sender, string $event): void {
        if ($event === 'status_changed') {
            $this->logger->log("Booking status was changed.");
            $this->notifier->send("User was notified about status change.");
        }
    }
}
