<?php
interface Visitor {
    public function visitFlight(FlightBooking $flight): void;
    public function visitHotel(HotelBooking $hotel): void;
}
