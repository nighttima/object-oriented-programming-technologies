<?php
require_once 'Expression.php';

class EqualsExpression implements Expression {
    public function __construct(private string $field, private string $value) {}

    public function interpret(Booking $booking): bool {
        return $booking->{$this->field} === $this->value;
    }
}
