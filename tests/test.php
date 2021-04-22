<?php

$autoloadPath1 = __DIR__ . '/../../../autoload.php';
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';
if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

use function Differ\Differ\genDiff;

$file1 = 'file1.json';
$file2 = 'file2.json';

$diff = genDiff($file1, $file2);
print_r($diff);