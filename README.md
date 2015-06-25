ZF Events Chart
=============

[![Build Status](https://travis-ci.org/corentin-larose/zf-events-chart.png)](https://travis-ci.org/corentin-larose/zf-events-chart)

Introduction
------------

BETA!!!

`zf-events-chart` is a ZF2 module for logging events triggered within a Zend Framework 2
application.

Installation
------------

Run the following `composer` command:

```console
$ composer require "corentin-larose/zf-events-chart:~1.0-dev@dev"
```

Alternately, manually add the following to your `composer.json`, in the `require` section:

```javascript
"require": {
    "corentin-larose/zf-events-chart": "~1.0-dev@dev"
}
```

And then run `composer update` to ensure the module is installed.

Finally, add the module name to your project's `config/application.config.php` under the `modules`
key:


```php
return array(
    /* ... */
    'modules' => array(
        /* ... */
        'ZF\EventsChart',
    ),
    /* ... */
);
```

Configuration
-------------

### User Configuration

**As a rule of thumb, avoid as much as possible using anonymous functions since it prevents you from caching your configuration.** 

The top-level configuration key for user configuration of this module is `zf-events-chart`.

The `config/module.config.php` file contains a self-explanative example of configuration.

### System Configuration

The following configuration is provided in `config/module.config.php`:

```php
'service_manager' => array(
    'factories' => array(
        'ZF\EventsChart\EventsChartListener' => 'ZF\EventsChart\EventsChartListenerFactory',
    )
),
```

ZF2 Events
----------

### Listeners

#### `ZF\EventsChart\EventsChartListener`

This listener is attached to each event through a shared event manager with the very hight priority of `10000`.
