<?php

use RizaErgun\TextHelper\TextHelper;

require 'vendor/autoload.php';

echo "<pre>";

$text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, quasi.";
$limit = 11;
$shorterText = TextHelper::shorter($text, $limit);
print_r($shorterText);

echo "</pre>";