<?php

namespace RizaErgun\TextHelper;

class TextHelper
{
    /**
     * @param $text
     * @param $limit
     * @return string
     */
    public static function character_shorter($text, $limit)
    {
        if (strlen($text) > $limit) {
            $new_text = substr($text, 0, $limit);
            $new_text = trim($new_text);
            return $new_text . "..";
        } else {
            return $text;
        }
    }

    /**
     * @param $text
     * @param $limit
     * @return string
     */
    public static function word_shorter($text, $limit)
    {
        preg_match('/^\s*+(?:\S++\s*+){1,' . (int)$limit . '}/', $text, $matches);

        return rtrim($matches[0]);
    }

    /**
     * @param $text
     * @param $censored_words
     * @param string $replacement
     * @return string
     */
    public static function word_censored($text, $censored_words, $replacement = '')
    {
        $text = str_replace($censored_words, $replacement, $text);

        return trim($text);
    }
}