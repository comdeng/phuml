<?php
/**
 * PHP version 7.1
 *
 * This source file is subject to the license that is bundled with this package in the file LICENSE.
 */

namespace PhUml\Processors;

/**
 * It creates a `png` class diagram using the `neato` command
 */
class NeatoProcessor extends ImageProcessor
{
    public function command(): string
    {
        return 'neato';
    }

    public function name(): string
    {
        return 'Neato';
    }
}
