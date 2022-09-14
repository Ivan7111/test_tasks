<?php

namespace src;

class Task9
{
    public static function main(array $arr, int $number): array
    {
        if (self::validateArray($arr)) {
            $results = self::findThreeNumbers($arr, $number);

            return $results != null ? $results : throw new \InvalidArgumentException("No consecutive numbers in given array sum up to $number");
        } else {
            throw new \InvalidArgumentException('Given array is invalid');
        }
    }

    private static function validateArray(array $arr): bool
    {
        foreach ($arr as $key => $value) {
            if (!is_int($key) || !is_int($value)) {
                return false;
            }
        }

        return sizeof($arr) >= 3;
    }

    private static function findThreeNumbers(array $arr, int $number): array
    {
        $result = [];
        for ($i = 0; $i < sizeof($arr) - 2; $i++) {
            $first = intval($arr[$i]);
            $second = intval($arr[$i + 1]);
            $third = intval($arr[$i + 2]);
            if (($first + $second + $third) == $number) {
                $result[] = "$first + $second + $third = $number";
            }
        }

        return $result;
    }
}
