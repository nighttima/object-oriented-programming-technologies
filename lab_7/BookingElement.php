<?php
interface BookingElement {
    public function accept(Visitor $visitor): void;
}
