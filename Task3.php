<?php

namespace src;

class Task3
{
    public static function main(int $number): int
    {
        return self::isNumberValid($number) ? self::addDigits($number) : throw new \InvalidArgumentException("$number is not a valid number");
    }

    private static function isNumberValid(int $number): bool
    {
        return is_int($number) && $number > 9;
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
