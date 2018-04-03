<?php
/**
 * Date: 03.04.18
 * Time: 14:58
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Structural\Decorator;

/**
 * Class AbstractComponent
 * @package Structural\Decorator
 */
abstract class AbstractComponent
{

    /**
     * @var array
     */
    protected $data = [];

    /**
     * AbstractComponent constructor.
     * @param string $key
     * @param string $value
     */
    public function __construct(string $key, string $value)
    {
        $this->data[$key] = $value;
    }

    /**
     * @return string
     */
    abstract public function getData();
}