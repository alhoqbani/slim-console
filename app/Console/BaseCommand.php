<?php

namespace App\Console;

use Interop\Container\ContainerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

abstract class BaseCommand extends Command
{
    
    /**
     * @var \Symfony\Component\Console\Output\OutputInterface
     */
    protected $output;
    
    /**
     * @var \Symfony\Component\Console\Input\InputInterface
     */
    protected $input;
    
    /**
     * @var \Interop\Container\ContainerInterface
     */
    protected $c;
    
    /**
     * @var string Command Name
     */
    protected $command;
    
    /**
     * @var string Command Name
     */
    protected $description;
    
    /**
     * @var string Command Name
     */
    protected $help;
    
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
    
    
    /**
     *
     */
    protected function configure()
    {
        $this->setName($this->command);
        $this->setDescription($this->description);
        $this->setHelp($this->help);
    }
    
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->input = $input;
        $this->output = $output;
        
        return $this->handle();
    }
    
    protected function handle()
    {
        throw new \Exception('Command must override handle method');
    }
}
