<?php
require_once 'BookingElement.php';

class FlightBooking implements BookingElement {
    public function accept(Visitor $visitor): void {
        $visitor->visitFlight($this);
    }
}
