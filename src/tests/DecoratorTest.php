<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;
use Structural\Decorator\Component;
use Structural\Decorator\XmlDecorator;
use Structural\Decorator\JsonDecorator;


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
        $this->assertCount(1, $this->getComponent()->getData());
    }

    public function testXmlDecorator()
    {
        $xmlDecorator = new XmlDecorator($this->getComponent());
        $this->assertEquals("<?xml version=\"1.0\"?>\n<root><key>value</key></root>\n", $xmlDecorator->getData());
    }

    public function testJsonDecorator()
    {
        $jsonDecorator = new JsonDecorator($this->getComponent());
        $this->assertEquals('{"key":"value"}', $jsonDecorator->getData());
    }

    /**
     * @return mixed
     */
    public function getComponent()
    {
        return $this->component;
    }
}
