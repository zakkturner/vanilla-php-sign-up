<?php

namespace Core;

class Validator
{
    public static function string($value, $min = 1, $max = INF)
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }
    public static function email($value)
    {
        // Validator::email('joe@example.com');
        return  filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    public static function agreement($value)
    {
        return $value;
    }
}
