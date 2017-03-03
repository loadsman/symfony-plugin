# Symfony plugin for Loadsman

[![Chat][gitter-badge]][gitter-url]

## Installation

1) Require this package with composer:
``` 
composer require loadsman/symfony-plugin
```

2) Add `LoadsmanSymfonyBundle` to `AppKernel` as dev bundle. Like this:
```
if (in_array($this->getEnvironment(), ['dev', 'test'], true)) {
    // ...
    new \Loadsman\SymfonyPlugin\LoadsmanSymfonyBundle(),
}
```

3) Then add routes to `routing_dev.yml`:
```
loadsman-symfony:
    resource: "@LoadsmanSymfonyBundle/Controller/"
    type:     annotation
```

## Licence
MIT

[gitter-badge]: https://img.shields.io/gitter/room/loadsman-chat/Lobby.svg?style=flat-square
[gitter-url]: https://gitter.im/loadsman-chat/Lobby?utm_source=share-link&utm_medium=link&utm_campaign=share-link