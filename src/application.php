<?php
// application.php

require __DIR__.'/../vendor/autoload.php';

use Symfony\Component\Console\Application;
use \App\Command\TimesCommand;
use \App\Command\SayHelloCommand;

$application = new Application();

$application->add(new SayHelloCommand());
$application->add(new TimesCommand());

$application->run();
