<?php
/**
 * Date: 03.04.18
 * Time: 15:06
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
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
    public function getData()
    {
        return $this->data;
    }
}