<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
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
