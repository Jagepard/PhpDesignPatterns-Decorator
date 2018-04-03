<?php
/**
 * Date: 03.04.18
 * Time: 15:17
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Structural\Decorator;

/**
 * Class JsonDecorator
 * @package Structural\Decorator
 */
class JsonDecorator extends AbstractDecorator
{

    /**
     * @return string
     */
    public function getData()
    {
        return json_encode($this->component->getData());
    }
}