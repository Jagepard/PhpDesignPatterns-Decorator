<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\Decorator;

use SimpleXMLElement;

class XmlDecorator extends AbstractDecorator
{
    /**
     * @return mixed|string
     */
    public function getData()
    {
        $xml = new SimpleXMLElement('<root/>');
        $data = array_flip($this->getComponent()->getData());
        array_walk_recursive($data, [$xml, 'addChild']);

        return $xml->asXML();
    }
}
