<?php
interface BookingState {
    public function proceed(Booking $booking): void;
    public function cancel(Booking $booking): void;
}
