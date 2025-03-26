<?php
require_once 'Command.php';

/**
 * Команда створення бронювання.
 */
class CreateBookingCommand implements Command {
    public function execute(): void {
        echo "Створено бронювання.\n";
    }

    public function undo(): void {
        echo "Скасовано створення бронювання.\n";
    }
}
