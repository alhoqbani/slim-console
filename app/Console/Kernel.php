<?php

namespace App\Console;

use App\Console\Commands\SayHello;
use App\Console\Generators\ConsoleGeneratorCommand;

class Kernel
{
    
    protected $commands = [
        SayHello::class,
    ];
    
    protected $defaultCommands = [
        ConsoleGeneratorCommand::class,
    ];
    
    public function getCommands()
    {
        return array_merge(
            $this->commands,
            $this->defaultCommands
        );
    }
}