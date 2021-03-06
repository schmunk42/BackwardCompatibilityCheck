<?php

declare(strict_types=1);

namespace Roave\BackwardCompatibility\Formatter;

use Roave\BackwardCompatibility\Change;
use Roave\BackwardCompatibility\Changes;
use Symfony\Component\Console\Output\OutputInterface;

final class SymfonyConsoleTextFormatter implements OutputFormatter
{
    /** @var OutputInterface */
    private $output;

    public function __construct(OutputInterface $output)
    {
        $this->output = $output;
    }

    public function write(Changes $changes) : void
    {
        /** @var Change $change */
        foreach ($changes as $change) {
            $this->output->writeln($change->__toString());
        }
    }
}
