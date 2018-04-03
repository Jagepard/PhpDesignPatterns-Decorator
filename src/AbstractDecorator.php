<?php
/**
 * Date: 03.04.18
 * Time: 15:08
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Structural\Decorator;

/**
 * Class AbstractDecorator
 * @package Structural\Decorator
 */
abstract class AbstractDecorator
{

    /**
     * @var Component
     */
    protected $component;

    /**
     * AbstractDecorator constructor.
     * @param AbstractComponent $component
     */
    public function __construct(AbstractComponent $component)
    {
        $this->component = $component;
    }

    /**
     * @return string
     */
    abstract public function getData();
}