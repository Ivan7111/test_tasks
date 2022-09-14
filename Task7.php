<?php

namespace src;

class Task7
{
    public static function main(array $arr, int $position): array
    {
        return self::validatePosition($arr, $position) ? self::deleteAndNormalizeKeys($arr, $position) :
            throw new \InvalidArgumentException("Array does not contain \"$position\" key");
    }

    private static function validatePosition(array $arr, int $position): bool
    {
        return array_key_exists($position, $arr);
    }

    private static function deleteAndNormalizeKeys(array $arr, int $position): array
    {
        $result = [];

        unset($arr[$position]);
        foreach ($arr as $element) {
            $result[] = $element;
        }

        return $result;
    }
}
