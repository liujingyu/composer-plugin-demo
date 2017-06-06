<?php

namespace phpDocumentor\Composer;

use Composer\Plugin\Capability\CommandProvider as CommandProviderCapability;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Composer\Command\BaseCommand;

class Command extends BaseCommand
{
    protected function configure()
    {
        $this->setName('hello');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Executing hello...');
    }
}
