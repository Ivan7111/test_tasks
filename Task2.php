<?php

namespace src;

use DateTimeImmutable;
use InvalidArgumentException;

class Task2
{
    public static function main(string $date): string
    {
        return self::checkInput($date) ? self::countDays($date) : throw new InvalidArgumentException("$date is not a valid date");
    }

    private static function checkInput(string $input): bool
    {
        $dateRegex = '/^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[13-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/';

        return preg_match($dateRegex, $input);
    }

    private static function countDays(string $date): string
    {
        $birthday = new DateTimeImmutable($date);
        return $birthday->diff(new DateTimeImmutable())->format('%a day(s) remaining');
    }
}
