<?php
# =======================================
# Copyright (c) 2024-2026 Ian K Maurmann.
# Released under the MIT License.
# =======================================

/**
 * Command-Line Console
 * --------------------
 *
 * Background:
 * Based on the CLI Format utility that I made for Pith Framework, but this one will be more general-use and MIT Licensed.
 *
 * @noinspection PhpPropertyNamingConventionInspection - Short property names are ok.
 * @noinspection PhpMethodNamingConventionInspection   - Long method names are ok.
 */


declare(strict_types=1);


namespace IKM\CLI;


/**
 * Class CommandLineConsole
 */
class CommandLineConsole
{
    private \IKM\CLI\TerminalUtility $terminal_utility;

    public function __construct()
    {
        // Set object dependencies:
        $this->terminal_utility = new TerminalUtility();
    }

    public function getWidth(): int
    {
        return $this->terminal_utility->getTerminalWidth();
    }

    public function getHeight(): int
    {
        return $this->terminal_utility->getTerminalHeight();
    }
}