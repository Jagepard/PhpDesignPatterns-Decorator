<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Structural\Decorator;

abstract class AbstractDecorator
{
    private AbstractComponent $component;

    /**
     * Installs a component
     * --------------------
     * Устанавливает компонент
     *
     * @param  AbstractComponent $component
     */
    public function __construct(AbstractComponent $component)
    {
        $this->component = $component;
    }

    /**
     * Gets a component
     * ----------------
     * Получает компонент
     *
     * @return AbstractComponent
     */
    public function getComponent(): AbstractComponent
    {
        return $this->component;
    }

    abstract public function getData(): string;
}
