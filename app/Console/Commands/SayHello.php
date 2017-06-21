<?php

namespace App\Console\Commands;

use App\Console\BaseCommand;
use Symfony\Component\Console\Input\InputArgument;

class SayHello extends BaseCommand
{
    
    protected $command = 'app:hello';
    
    protected function handle()
    {
        $this->output->writeln('hello');
        $this->info('info');
        $this->error('error');
        $this->question('question');
        $this->comment('comment');
        $this->fire('fire');
    }
    
    /**
     * @return array
     */
    protected function arguments()
    {
        return [
//            [$name, $mode = null, $description = '', $default = null],
        ];
    }
    
    /**
     * @return array
     */
    protected function options()
    {
        return [
//            [name, $shortcut = null, $mode = null, $description = '', $default = null],
        ];
    }
}