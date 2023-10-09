# Boatrace Sakura Trimmer

[![Build Status](https://github.com/boatrace-sakura/trimmer/workflows/tests/badge.svg)](https://github.com/boatrace-sakura/trimmer/actions?query=workflow%3Atests)
[![Coverage Status](https://coveralls.io/repos/github/boatrace-sakura/trimmer/badge.svg?branch=main)](https://coveralls.io/github/boatrace-sakura/trimmer?branch=main)
[![Latest Stable Version](https://poser.pugx.org/boatrace-sakura/trimmer/v/stable)](https://packagist.org/packages/boatrace-sakura/trimmer)
[![Latest Unstable Version](https://poser.pugx.org/boatrace-sakura/trimmer/v/unstable)](https://packagist.org/packages/boatrace-sakura/trimmer)
[![License](https://poser.pugx.org/boatrace-sakura/trimmer/license)](https://packagist.org/packages/boatrace-sakura/trimmer)

## Installation
```
$ composer require boatrace-sakura/trimmer
```

## Usage
```php
<?php

require __DIR__ . '/vendor/autoload.php';

use Boatrace\Sakura\Trimmer;

var_dump(Trimmer::trim()); // NULL
var_dump(Trimmer::trim(null)); // NULL
var_dump(Trimmer::trim(' 競艇 ')); // string(6) "競艇"

var_dump(Trimmer::ltrim()); // NULL
var_dump(Trimmer::ltrim(null)); // NULL
var_dump(Trimmer::ltrim(' 競艇 ')); // string(7) "競艇 "

var_dump(Trimmer::rtrim()); // NULL
var_dump(Trimmer::rtrim(null)); // NULL
var_dump(Trimmer::rtrim(' 競艇 ')); // string(7) " 競艇"
```

## License
The Boatrace Sakura Trimmer is open source software licensed under the [MIT license](LICENSE).
