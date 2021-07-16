<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Question\Question;

class QuestCommand extends Command
{
    protected static $defaultName = "quest";

    protected function configure() : void
    {

    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $helper = $this->getHelper('question');
        $question1 = new Question('Введите ваше имя: ', null);
        $username = $helper->ask($input, $output, $question1);
        $question2 = new Question('Введите ваш возраст: ', null);
        $age = $helper->ask($input, $output, $question2);
        $question3 = new ChoiceQuestion(
            'Ваш пол (м): ',
            ['м', 'ж'],
            0
        );
        $question3->setErrorMessage('Color %s is invalid.');
        $gender = $helper->ask($input, $output, $question3);

        $output->writeln("Здравствуйте, " . $username . ' Ваш возраст: '
            . $age . ' Ваш пол: ' . $gender);

        return Command::SUCCESS;
    }
}