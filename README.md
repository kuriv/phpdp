# phpdp

<a href="https://github.com/kuriv/phpdp">
	<img src="phpdp.png" width="80" height="80" align="right">
</a>

> Sample code for several design patterns in PHP.

[![build][build-image]][build-url]
[![version][version-image]][version-url]
[![license][license-image]][license-url]

## Installation

**Composer**

```
composer require kuriv/phpdp
```

## Contents

### [Behavioral](src/Behavioral)

* [ChainOfResponsibilities](src/Behavioral/ChainOfResponsibilities)
* [Command](src/Behavioral/Command)
* [Iterator](src/Behavioral/Iterator)
* [Mediator](src/Behavioral/Mediator)
* [Memento](src/Behavioral/Memento)
* [NullObject](src/Behavioral/NullObject)
* [Observer](src/Behavioral/Observer)
* [Specification](src/Behavioral/Specification)
* [State](src/Behavioral/State)
* [Strategy](src/Behavioral/Strategy)
* [TemplateMethod](src/Behavioral/TemplateMethod)
* [Visitor](src/Behavioral/Visitor)

### [Creational](src/Creational)

* [AbstractFactory](src/Creational/AbstractFactory)
* [Builder](src/Creational/Builder)
* [FactoryMethod](src/Creational/FactoryMethod)
* [Multiton](src/Creational/Multiton)
* [Pool](src/Creational/Pool)
* [Prototype](src/Creational/Prototype)
* [SimpleFactory](src/Creational/SimpleFactory)
* [Singleton](src/Creational/Singleton)
* [StaticFactory](src/Creational/StaticFactory)

### [More](src/More)

* [EAV](src/More/EAV)
* [Repository](src/More/Repository)
* [ServiceLocator](src/More/ServiceLocator)

### [Structural](src/Structural)

* [Adapter](src/Structural/Adapter)
* [Bridge](src/Structural/Bridge)
* [Composite](src/Structural/Composite)
* [DataMapper](src/Structural/DataMapper)
* [Decorator](src/Structural/Decorator)
* [DependencyInjection](src/Structural/DependencyInjection)
* [Facade](src/Structural/Facade)
* [FluentInterface](src/Structural/FluentInterface)
* [Flyweight](src/Structural/Flyweight)
* [Proxy](src/Structural/Proxy)
* [Registry](src/Structural/Registry)

## License

`phpdp` is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).



[build-image]: https://img.shields.io/badge/build-passing-brightgreen	"build"
[build-url]: https://github.com/kuriv/phpdp	"build"
[version-image]: https://img.shields.io/badge/version-v1.0.1-blue	"version"
[version-url]: https://github.com/kuriv/phpdp	"version"
[license-image]: https://img.shields.io/badge/license-MIT-green	"license"
[license-url]: https://github.com/kuriv/phpdp	"license"