<?php
require_once 'BookingInterface.php';
require_once 'RealBooking.php';

class BookingProxy implements BookingInterface {
    private RealBooking $realBooking;
    private string $userRole;

    public function __construct(string $userRole) {
        $this->realBooking = new RealBooking();
        $this->userRole = $userRole;
    }

    public function cancel(): void {
        if ($this->userRole === 'admin') {
            $this->realBooking->cancel();
        } else {
            echo "У вас немає прав для скасування бронювання.\n";
        }
    }
}
