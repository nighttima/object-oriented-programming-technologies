<?php
require_once 'Visitor.php';

class ReportVisitor implements Visitor {
    public function visitFlight(FlightBooking $flight): void {
        echo "Звіт по авіабронюванню.\n";
    }

    public function visitHotel(HotelBooking $hotel): void {
        echo "Звіт по готельному бронюванню.\n";
    }
}
