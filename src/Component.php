<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Structural\Decorator;

class Component extends AbstractComponent
{
    /**
     * Receives data
     * -------------
     * Получает данные
     *
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }
}
