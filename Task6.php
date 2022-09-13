<?php

namespace src;

use InvalidArgumentException;

class Task6
{
    public static function main(
        int $year,
        int $lastYear,
        int $month,
        int $lastMonth,
        string $day = 'Monday'
    ): int {
        return self::validateInput($year, $lastYear, $month, $lastMonth) ?
            self::countDays($year, $lastYear, $month, $lastMonth, $day) :
            throw new InvalidArgumentException('Invalid Input');
    }

    private static function validateInput(
        int $year,
        int $lastYear,
        int $month,
        int $lastMonth
    ): bool {
        $startDate = strtotime("01-$month-$year");
        $endDate = strtotime("01-$lastMonth-$lastYear");

        return ($startDate && $endDate && $startDate < $endDate);
    }

    private static function countDays(
        int $year,
        int $lastYear,
        int $month,
        int $lastMonth,
        string $day = 'Monday'
    ): int {
        $result = 0;
        $startDate = strtotime("01-$month-$year");
        $endDate = strtotime("01-$lastMonth-$lastYear");
        while ($startDate <= $endDate) {
            if (date('l', $startDate) == $day) {
                $result++;
            }
            $startDate = strtotime('+1 month', $startDate);
        }

        return $result;
    }
}
