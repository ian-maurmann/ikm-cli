#!/usr/bin/env php
<?php declare(strict_types=1);

require '../vendor/autoload.php';

$writer = new \IKM\CLI\CommandLineWriter();
$format = new \IKM\CLI\CommandLineFormatter();
$console = new \IKM\CLI\CommandLineConsole();

// ===========================================

$writer->br();

$writer->hr();
$writer->br();

$width = $console->getWidth();
$height = $console->getHeight();

$writer->writeLine("Width = {$width} chars");
$writer->writeLine("Height = {$height} chars");

$writer->br();
$writer->hr();

