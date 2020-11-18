<?php

namespace App\Commands;

use ManaPHP\Cli\Command;

class TestCommand extends Command
{
    /**
     * demo how to use command
     *
     * @param string $name
     */
    public function defaultAction($name = 'manaphp')
    {
        $this->console->writeLn(['Hello %s!', $name]);
    }
}