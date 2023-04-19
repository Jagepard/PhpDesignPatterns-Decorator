<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Structural\Decorator;

class JsonDecorator extends AbstractDecorator
{
    /**
     * Receives data
     * -------------
     * Получает данные
     *
     * @return string
     */
    public function getData(): string
    {
        return json_encode($this->getComponent()->getData());
    }
}
