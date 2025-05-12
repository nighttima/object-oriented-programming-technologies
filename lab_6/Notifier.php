<?php
class Notifier {
    public function send(string $message): void {
        echo "NOTIFY: $message\n";
    }
}
