<?php
/**
 * Date: 03.04.18
 * Time: 15:11
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Structural\Decorator;

use SimpleXMLElement;

/**
 * Class XmlDecorator
 * @package Structural\Decorator
 */
class XmlDecorator extends AbstractDecorator
{

    /**
     * @return mixed|string
     */
    public function getData()
    {
        $xml = new SimpleXMLElement('<root/>');
        $data = array_flip($this->component->getData());
        array_walk_recursive($data, [$xml, 'addChild']);

        return $xml->asXML();
    }
}