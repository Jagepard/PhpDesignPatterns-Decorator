## Table of contents

- [\Structural\Decorator\AbstractComponent (abstract)](#class-structuraldecoratorabstractcomponent-abstract)
- [\Structural\Decorator\Component](#class-structuraldecoratorcomponent)
- [\Structural\Decorator\XmlDecorator](#class-structuraldecoratorxmldecorator)
- [\Structural\Decorator\AbstractDecorator (abstract)](#class-structuraldecoratorabstractdecorator-abstract)
- [\Structural\Decorator\JsonDecorator](#class-structuraldecoratorjsondecorator)

<hr />

### Class: \Structural\Decorator\AbstractComponent (abstract)

> Class AbstractComponent

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>\string</em> <strong>$key</strong>, <em>\string</em> <strong>$value</strong>)</strong> : <em>void</em><br /><em>AbstractComponent constructor.</em> |
| public | <strong>abstract getData()</strong> : <em>array</em> |

<hr />

### Class: \Structural\Decorator\Component

> Class Component

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getData()</strong> : <em>array</em> |

*This class extends [\Structural\Decorator\AbstractComponent](#class-structuraldecoratorabstractcomponent-abstract)*

<hr />

### Class: \Structural\Decorator\XmlDecorator

> Class XmlDecorator

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getData()</strong> : <em>mixed/string</em> |

*This class extends [\Structural\Decorator\AbstractDecorator](#class-structuraldecoratorabstractdecorator-abstract)*

<hr />

### Class: \Structural\Decorator\AbstractDecorator (abstract)

> Class AbstractDecorator

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>[\Structural\Decorator\AbstractComponent](#class-structuraldecoratorabstractcomponent-abstract)</em> <strong>$component</strong>)</strong> : <em>void</em><br /><em>AbstractDecorator constructor.</em> |
| public | <strong>getComponent()</strong> : <em>[\Structural\Decorator\Component](#class-structuraldecoratorcomponent)</em> |
| public | <strong>abstract getData()</strong> : <em>string</em> |

<hr />

### Class: \Structural\Decorator\JsonDecorator

> Class JsonDecorator

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getData()</strong> : <em>string</em> |

*This class extends [\Structural\Decorator\AbstractDecorator](#class-structuraldecoratorabstractdecorator-abstract)*

