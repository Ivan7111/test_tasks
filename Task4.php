<?php

namespace src;

use InvalidArgumentException;

class Task4
{
    private static function validateString(string $input): bool
    {
        $validStringRegex = '/^[a-zA-Z]+[\s|\_|\-][a-zA-Z]+([\s|\_|\-][a-zA-Z]+)*$/';

        return preg_match($validStringRegex, $input);
    }

    private static function format(string $input): string
    {
        $words = preg_split('/[\s|\_|\-]/', $input);
        $result = '';
        foreach ($words as $word) {
            $letters = preg_split('//', $word);
            $letters[1] = strtoupper($letters[1]);
            $result .= implode($letters);
        }

        return $result;
    }

    public static function main(string $input): string
    {
        return self::validateString($input) ? self::format($input) :
            throw new InvalidArgumentException("\"$input\" is not a valid string");
    }
}
