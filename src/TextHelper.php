<?php

namespace RizaErgun\TextHelper;

class TextHelper
{
    /**
     * @param $text
     * @param $limit
     * @return string
     */
    public static function shorter($text, $limit)
    {
        if (strlen($text) > $limit) {
            $new_text = substr($text, 0, $limit);
            $new_text = trim($new_text);
            return $new_text . "..";
        }
        else {
            return $text;
        }
    }
}