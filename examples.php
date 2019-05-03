<?php

use RizaErgun\TextHelper\TextHelper;

require 'vendor/autoload.php';

$text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, quasi.";
$limit = 5;

$character_shorter = TextHelper::character_shorter($text, $limit);
print_r($character_shorter);

$word_shorter = TextHelper::word_shorter($text, $limit);
print_r($word_shorter);

$censored_words = array('ipsum', 'sit');
$replacement = '***';
$word_censored = TextHelper::word_censored($text, $censored_words, $replacement);
print_r($word_censored);
