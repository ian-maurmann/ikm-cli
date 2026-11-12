#!/usr/bin/env php
<?php declare(strict_types=1);

require '../vendor/autoload.php';

$writer = new \IKM\CLI\CommandLineWriter();
$format = new \IKM\CLI\CommandLineFormatter();
$console = new \IKM\CLI\CommandLineConsole();

// ===========================================

$reset = $format->reset;

$writer->hr();

$at_color = 16;
while ($at_color < 256) {
    $writer->writeLine($format->getEightBitForegroundColor($at_color) . "⠿⠿⠿⠿ {$at_color} ⠿⠿⠿⠿ {$reset}");
    $at_color++;
}

$writer->hr();