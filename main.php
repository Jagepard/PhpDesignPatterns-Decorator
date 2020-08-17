<?php

namespace Structural\Decorator;

require_once "vendor/autoload.php";

$component = new Component("key", "value");
printf("%s\n%s\n", "Initial data:", print_r($component->getData(), true));

$xmlDecorator = new XmlDecorator($component);
printf("%s\n%s\n", "Decorate to xml data:", print_r($xmlDecorator->getData(), true));

$jsonDecorator = new JsonDecorator($component);
printf("%s\n%s\n", "Decorate to json data:", print_r($jsonDecorator->getData(), true));