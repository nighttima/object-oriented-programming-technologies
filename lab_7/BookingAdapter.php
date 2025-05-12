<?php
require_once 'BookingTarget.php';
require_once 'ThirdPartyBookingService.php';

class BookingAdapter implements BookingTarget {
    private ThirdPartyBookingService $service;

    public function __construct(ThirdPartyBookingService $service) {
        $this->service = $service;
    }

    public function makeBooking(): void {
        $this->service->externalBook();
    }
}
