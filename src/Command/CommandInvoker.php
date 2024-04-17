<?php
// CommandInvoker.php

class CommandInvoker {
    private $commands = [];

    public function addCommand($commandName, $commandInstance) {
        $this->commands[$commandName] = $commandInstance;
    }

    public function runCommand($commandName) {
        if (isset($this->commands[$commandName])) {
            $commandInstance = $this->commands[$commandName];
            $commandInstance->execute();
        } else {
            echo "Comando não encontrado.\n";
        }
    }
}
