<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\Decorator;

class JsonDecorator extends AbstractDecorator
{
    /**
     * @return string
     */
    public function getData()
    {
        return json_encode($this->getComponent()->getData());
    }
}
