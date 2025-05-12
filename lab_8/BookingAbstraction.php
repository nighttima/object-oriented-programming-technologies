<?php
require_once 'BookingImplementor.php';

abstract class BookingAbstraction {
    protected BookingImplementor $implementor;

    public function __construct(BookingImplementor $implementor) {
        $this->implementor = $implementor;
    }

    abstract public function book(): void;
}
