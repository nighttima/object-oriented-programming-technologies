<?php
require_once 'Observer.php';

class User implements Observer {
    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function update(string $status): void {
        echo "Користувач {$this->name} отримав сповіщення: статус змінено на '{$status}'\n";
    }
}
