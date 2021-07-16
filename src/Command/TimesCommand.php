<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class TimesCommand extends Command
{
    protected static $defaultName = "times";

    protected function configure() : void
    {
        $this->addArgument(
            'string',
            InputArgument::REQUIRED,
            "Input string"
        )->addOption(
            'times',
            null,
            InputOption::VALUE_REQUIRED,
            'How many times should the string be repeated?',
            2
        );
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $string = $input->getArgument('string');
        for ($i = 0; $i < $input->getOption('times'); $i++) {
            $output->writeln($string);
        }
        return Command::SUCCESS;
    }
}