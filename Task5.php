<?php

namespace src;

class Task5
{
    public static function main(int $n): float
    {
        return self::isPositive($n) ? ($n == 1 ? 0 : self::findFibonacciLengthOf($n)) :
            throw new \InvalidArgumentException("$n is not a valid length");
    }

    private static function findFibonacciLengthOf(int $n, float $first = 0, float $second = 1): float
    {
        return self::lengthOf($first) == $n ? $first : self::findFibonacciLengthOf($n, $second, $second + $first);
    }

    private static function lengthOf(float $n): int
    {
        if (str_contains($n, 'E+')) {
            $chunks = preg_split('/E\+/', $n);
            return intval($chunks[1]) + 1;
        } else {
            return strlen($n - 2);
        }
    }

    private static function isPositive(int $n): bool
    {
        return $n > 0;
    }
}
