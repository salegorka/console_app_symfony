<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class SayHelloCommand extends Command
{
    protected static $defaultName = 'say_hello';

    protected function configure(): void
    {
        $this
            ->addArgument('greeting', InputArgument::REQUIRED, 'Greeting message')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln($input->getArgument('greeting'));

        return Command::SUCCESS;
    }
}