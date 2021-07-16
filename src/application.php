<?php
// application.php

require __DIR__.'/../vendor/autoload.php';

use Symfony\Component\Console\Application;
use \App\Command\QuestCommand;

$application = new Application();

$application->add(new QuestCommand());

$application->run();
