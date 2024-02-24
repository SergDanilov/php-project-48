<?php 

/*
Greeting
*/

namespace Hexlet\Code\Cli;

use function Hexlet\Code\Differ\genDiff;
use function cli\line;
use function cli\prompt;

line('Welcome to the "Difference calculator"!');
line('"Difference calculator" is a program that determines the difference between two data structures.'); 
line('A similar mechanism is used when outputting tests or automatically tracking changes in configuration files');
$filePath1 = prompt('Please enter path to file#1');
line("ok it is:, %s!", $filePath1);
$filePath2 = prompt('Please enter path to file#2');
line("good!");

// $filePath1 = __DIR__ . '/../tests/file1.json';
// $filePath2 = __DIR__ . '/../tests/file2.json';

$filePath1 = __DIR__ . $filePath1;
$filePath2 = __DIR__ . $filePath2;
genDiff($filePath1, $filePath2);