<?php

namespace App;

use App\interfaces\LoggerInterface;

class FileLogger implements LoggerInterface
{

    public function writeToLog()
    {
        echo 'function writeToLog from FileLogger' . '<br>';
    }

    public function readFromLog()
    {
        echo 'function readFromLog from FileLogger' . '<br>';
    }
}
