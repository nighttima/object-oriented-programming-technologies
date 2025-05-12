<?php
require_once 'BookingElement.php';

class HotelBooking implements BookingElement {
    public function accept(Visitor $visitor): void {
        $visitor->visitHotel($this);
    }
}
