<?php
require_once 'Command.php';

class CommandHistory {
    private array $history = [];

    public function executeCommand(Command $command): void {
        $command->execute();
        $this->history[] = $command;
    }

    public function undo(): void {
        $command = array_pop($this->history);
        if ($command) {
            $command->undo();
        }
    }
}
