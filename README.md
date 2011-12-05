kohana-phpresque module
=======================

Simple module for [Kohana 3](https://github.com/kohana/kohana) to load [php-resque](https://github.com/chrisboulton/php-resque) into your project.

Usage
-----

``` bash
    $ cd modules
    $ git clone https://github.com/apankov/kohana-phpresque php-resque
    $ cd php-resque
    $ git submodule init
    $ git submodule update
```

Add this module to Kohana::modules in your bootstrap.php

``` php
    Kohana::modules(array(
        ...
        'php-resque' => MODPATH . 'php-resque',
        ...
    ));
```
