## Table of contents
- [Structural\Decorator\AbstractComponent](#structural_decorator_abstractcomponent)
- [Structural\Decorator\AbstractDecorator](#structural_decorator_abstractdecorator)
- [Structural\Decorator\Component](#structural_decorator_component)
- [Structural\Decorator\JsonDecorator](#structural_decorator_jsondecorator)
- [Structural\Decorator\XmlDecorator](#structural_decorator_xmldecorator)
<hr>

<a id="structural_decorator_abstractcomponent"></a>

### Class: Structural\Decorator\AbstractComponent
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>__construct</strong>( string $key  string $value )</em><br>Sets data<br>Устанавливает данные|
|abstract public|<em><strong>getData</strong>(): array</em><br>|


<a id="structural_decorator_abstractdecorator"></a>

### Class: Structural\Decorator\AbstractDecorator
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>__construct</strong>( Structural\Decorator\AbstractComponent $component )</em><br>Installs a component<br>Устанавливает компонент|
|public|<em><strong>getComponent</strong>(): Structural\Decorator\AbstractComponent</em><br>Gets a component<br>Получает компонент|
|abstract public|<em><strong>getData</strong>(): string</em><br>|


<a id="structural_decorator_component"></a>

### Class: Structural\Decorator\Component
##### extends [Structural\Decorator\AbstractComponent](#structural_decorator_abstractcomponent)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>getData</strong>(): array</em><br>Receives data<br>Получает данные|
|public|<em><strong>__construct</strong>( string $key  string $value )</em><br>Sets data<br>Устанавливает данные|


<a id="structural_decorator_jsondecorator"></a>

### Class: Structural\Decorator\JsonDecorator
##### extends [Structural\Decorator\AbstractDecorator](#structural_decorator_abstractdecorator)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>getData</strong>(): string</em><br>Receives data<br>Получает данные|
|public|<em><strong>__construct</strong>( Structural\Decorator\AbstractComponent $component )</em><br>Installs a component<br>Устанавливает компонент|
|public|<em><strong>getComponent</strong>(): Structural\Decorator\AbstractComponent</em><br>Gets a component<br>Получает компонент|


<a id="structural_decorator_xmldecorator"></a>

### Class: Structural\Decorator\XmlDecorator
##### extends [Structural\Decorator\AbstractDecorator](#structural_decorator_abstractdecorator)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>getData</strong>(): string</em><br>Receives data<br>Получает данные|
|public|<em><strong>__construct</strong>( Structural\Decorator\AbstractComponent $component )</em><br>Installs a component<br>Устанавливает компонент|
|public|<em><strong>getComponent</strong>(): Structural\Decorator\AbstractComponent</em><br>Gets a component<br>Получает компонент|
<hr>

###### created with [Rudra-Documentation-Collector](#https://github.com/Jagepard/Rudra-Documentation-Collector)
