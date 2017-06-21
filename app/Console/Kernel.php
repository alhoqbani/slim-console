<?php

namespace App\Console;

use App\Console\Commands\SayHello;

class Kernel
{
    protected $commands = [
        SayHello::class,
    ];
    
    public function getCommands()
    {
        return $this->commands;
    }
}