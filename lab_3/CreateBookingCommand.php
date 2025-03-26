<?php
require_once 'Command.php';

class CreateBookingCommand implements Command {
    public function execute(): void {
        echo "Бронювання створено.\n";
    }

    public function undo(): void {
        echo "Скасовано створення бронювання.\n";
    }
}
