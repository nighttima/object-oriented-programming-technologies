<?php
require_once 'Expression.php';

class GreaterThanExpression implements Expression {
    public function __construct(private string $field, private int $value) {}

    public function interpret(Booking $booking): bool {
        return $booking->{$this->field} > $this->value;
    }
}
