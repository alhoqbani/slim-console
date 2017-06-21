<?php

namespace App\Console\Commands;

use App\Console\BaseCommand;

class SayHello extends BaseCommand
{
    
    protected $command = 'app:hello';
    
    protected function handle()
    {
        $this->output->writeln('hello');
    }
}