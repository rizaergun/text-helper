# TextHelper

A simple PHP helper library for text.

```php
use RizaErgun\TextHelper\TextHelper;

require 'vendor/autoload.php';

$text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, quasi.";
$limit = 11;

$shorterText = TextHelper::shorter($text, $limit);

echo $shorterText;
```

## Installation

```
composer require rizaergun/text-helper
```