<?php

namespace App\Console;

use Interop\Container\ContainerInterface;
use Symfony\Component\Console\Application;

class Console extends Application
{
    
    /**
     * @var \Interop\Container\ContainerInterface
     */
    protected $c;
    
    /**
     * Console constructor.
     *
     * @param \Interop\Container\ContainerInterface $c
     *
     * @internal param $output
     */
    public function __construct(ContainerInterface $c)
    {
        parent::__construct();
        $this->c = $c;
    }
    
    
    public function boot(Kernel $kernel)
    {
        foreach ($kernel->getCommands() as $command) {
            $this->add(new $command($this->c));
        }
    }
}
