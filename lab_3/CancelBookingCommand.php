<?php
require_once 'Command.php';

class CancelBookingCommand implements Command {
    public function execute(): void {
        echo "Бронювання скасовано.\n";
    }

    public function undo(): void {
        echo "Відновлено скасоване бронювання.\n";
    }
}
