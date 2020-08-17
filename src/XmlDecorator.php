<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Structural\Decorator;

use SimpleXMLElement;

class XmlDecorator extends AbstractDecorator
{
    public function getData(): string
    {
        $xml = new SimpleXMLElement('<root/>');
        $data = array_flip($this->getComponent()->getData());
        array_walk_recursive($data, [$xml, 'addChild']);

        return $xml->asXML();
    }
}
