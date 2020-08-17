<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Structural\Decorator\Tests;

use Structural\Decorator\{AbstractComponent, Component, XmlDecorator, JsonDecorator};
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class DecoratorTest extends PHPUnit_Framework_TestCase
{
    private AbstractComponent $component;

    protected function setUp(): void
    {
        $this->component = new Component('key', 'value');
    }

    public function testComponent()
    {
        $this->assertCount(1, $this->component->getData());
    }

    public function testXmlDecorator()
    {
        $xmlDecorator = new XmlDecorator($this->component);
        $this->assertEquals("<?xml version=\"1.0\"?>\n<root><key>value</key></root>\n", $xmlDecorator->getData());
    }

    public function testJsonDecorator()
    {
        $jsonDecorator = new JsonDecorator($this->component);
        $this->assertEquals('{"key":"value"}', $jsonDecorator->getData());
    }
}
