<?php
/**
 * @package Guzzle PHP <http://www.guzzlephp.org>
 * @license See the LICENSE file that was distributed with this source code.
 */

namespace Guzzle\Service\Description;

/**
 * Interface for building Guzzle commands.
 *
 * @author Michael Dowling <michael@guzzlephp.org>
 */
interface CommandFactoryInterface
{
    /**
     * Build a webservice command by name based on a service description
     *
     * @param ApiCommand $command Description of the command to create
     * @param array $args (optional) Arguments to pass to the command
     *
     * @return Guzzle\Service\Command\CommandInterface
     * @throws InvalidArgumentException if the command was not found
     */
    public function createCommand(ApiCommand $command, array $args);
}