<?php
interface Expression {
    public function interpret(Booking $booking): bool;
}
