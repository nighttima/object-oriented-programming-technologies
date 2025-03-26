<?php
require_once 'Command.php';

/**
 * Команда відправлення підтвердження.
 */
class SendConfirmationCommand implements Command {
    public function execute(): void {
        echo "Підтвердження надіслано.\n";
    }

    public function undo(): void {
        echo "Надсилання підтвердження скасовано.\n";
    }
}
