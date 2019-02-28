<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\Decorator;

/**
 * Class Component
 * @package Structural\Decorator
 */
class Component extends AbstractComponent
{
    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }
}
