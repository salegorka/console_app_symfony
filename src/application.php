<?php
// application.php

require __DIR__.'/../vendor/autoload.php';

use Symfony\Component\Console\Application;
use \App\Command\TimesCommand;

$application = new Application();

$application->add(new TimesCommand());

$application->run();
