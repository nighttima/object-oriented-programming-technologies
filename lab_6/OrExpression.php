<?php
require_once 'Expression.php';

class OrExpression implements Expression {
    public function __construct(private Expression $expr1, private Expression $expr2) {}

    public function interpret(Booking $booking): bool {
        return $this->expr1->interpret($booking) || $this->expr2->interpret($booking);
    }
}
