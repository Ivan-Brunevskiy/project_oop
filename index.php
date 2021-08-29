<?php
include_once __DIR__.'/vendor/autoload.php';

use App\FileLogger;
use App\DBLogger;

$ivan = new FileLogger();
$student = new DBLogger();

$ivan->writeToLog();
$ivan->readFromLog();

$student->writeToLog();
$student->readFromLog();
