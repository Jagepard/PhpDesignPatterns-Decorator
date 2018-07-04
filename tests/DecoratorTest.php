<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\Decorator\Tests;

use Structural\Decorator\Component;
use Structural\Decorator\XmlDecorator;
use Structural\Decorator\JsonDecorator;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

/**
 * Class DecoratorTest
 */
class DecoratorTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var Component
     */
    protected $component;

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
