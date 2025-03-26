<?php
require_once 'Command.php';

/**
 * Макрокоманда, що містить інші команди.
 */
class MacroCommand implements Command {
    /** @var Command[] */
    private array $commands = [];

    public function addCommand(Command $command): void {
        $this->commands[] = $command;
    }

    public function execute(): void {
        foreach ($this->commands as $command) {
            $command->execute();
        }
    }

    public function undo(): void {
        foreach (array_reverse($this->commands) as $command) {
            $command->undo();
        }
    }
}
