<?php

namespace src;

class Task10
{
    public static function main(int $input): array
    {
        return self::isPositive($input) ? self::doCollatzConjecture($input) : throw new \InvalidArgumentException("$input is not a positive number");
    }

    private static function doCollatzConjecture(int $input, array $result = []): array
    {
        $result[] = $input;
        if ($input != 1) {
            switch ($input % 2) {
                case 0: {
                    return self::doCollatzConjecture($input / 2, $result);
                }
                case 1: {
                    return self::doCollatzConjecture($input * 3 + 1, $result);
                }
                default: {
                    throw new \RuntimeException('Something went wrong');
                }
            }
        } else {
            return $result;
        }
    }

    private static function isPositive(int $input): bool
    {
        return $input > 0;
    }
}
