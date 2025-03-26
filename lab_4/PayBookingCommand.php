<?php
require_once 'Command.php';

/**
 * Команда оплати бронювання.
 */
class PayBookingCommand implements Command {
    public function execute(): void {
        echo "Оплата проведена.\n";
    }

    public function undo(): void {
        echo "Оплату скасовано.\n";
    }
}
