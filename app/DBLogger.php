<?php

namespace App;

use App\interfaces\LoggerInterface;

class DBLogger implements LoggerInterface
{

    public function writeToLog()
    {
        echo 'function writeToLog from DBLogger' . '<br>';
    }

    public function readFromLog()
    {
        echo 'function readFromLog from DBLogger' . '<br>';
    }
}
