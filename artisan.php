#!/usr/bin/env php
<?php

require_once __DIR__ . '/bootstrap/app.php';


$console = new App\Console\Console($app->getContainer());

$kernel = new \App\Console\Kernel();
$console->boot($kernel);

$console->run();
