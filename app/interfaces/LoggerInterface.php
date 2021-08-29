<?php

namespace App\interfaces;

interface LoggerInterface
{
    public function writeToLog();

    public function readFromLog();
}
