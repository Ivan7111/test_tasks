<?php

namespace src;

class Task3
{
    public static function main(int $number): int
    {
        return self::addDigits($number);
    }

    private static function addDigits(int $number): int
    {
        $result = 0;
        $digits = preg_split('//', $number);
        foreach ($digits as $digit) {
            $result += intval($digit);
        }

        return strlen($result) == 1 ? $result : self::addDigits($result);
    }
}
