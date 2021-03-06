<?php

/*
 * This file is part of the StateMachine package.
 *
 * (c) Alexandre Bacco
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SM\Factory;

use SM\SMException;
use SM\StateMachine\StateMachineInterface;

interface FactoryInterface
{
    /**
     * Returns the state machine match the couple object/graph
     *
     * @param object $object
     * @param string $graph
     *
     * @return StateMachineInterface
     *
     * @throws SMException
     */
    public function get($object, string $graph = 'default'): StateMachineInterface;
}
