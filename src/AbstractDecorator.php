<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\Decorator;

abstract class AbstractDecorator
{
    /**
     * @var Component
     */
    private $component;

    /**
     * AbstractDecorator constructor.
     * @param AbstractComponent $component
     */
    public function __construct(AbstractComponent $component)
    {
        $this->component = $component;
    }

    /**
     * @return Component
     */
    public function getComponent(): Component
    {
        return $this->component;
    }

    /**
     * @return string
     */
    abstract public function getData();
}
