<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Structural\Decorator;

abstract class AbstractComponent
{
    protected array $data = [];

    /**
     * Sets data
     * ---------
     * Устанавливает данные
     *
     * @param  string $key
     * @param  string $value
     */
    public function __construct(string $key, string $value)
    {
        $this->data[$key] = $value;
    }

    abstract public function getData(): array;
}
