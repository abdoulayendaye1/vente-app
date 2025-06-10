<?php

class Lang
{
    private static $lang = [];

    public static function load($langCode = 'fr')
    {
        $file = __DIR__ . "/../lang/{$langCode}.php";
        if (file_exists($file)) {
            self::$lang = require $file;
        }
    }

    public static function get($key)
    {
        $keys = explode('.', $key);
        $value = self::$lang;

        foreach ($keys as $part) {
            if (is_array($value) && isset($value[$part])) {
                $value = $value[$part];
            } else {
                return $key; // Clé introuvable
            }
        }

        return $value;
    }
}
