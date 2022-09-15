<?php

namespace src;

use InvalidArgumentException;

class Task4
{
    public static function main(string $input): string
    {
        return self::isStringValid($input) ? self::format($input) :
            throw new InvalidArgumentException("\"$input\" is not a valid string");
    }

    private static function isStringValid(string $input): bool
    {
        $validStringRegex = '/^[\s|\_|\-]?[a-zA-Z]+[\s|\_|\-][a-zA-Z]+([\s|\_|\-][a-zA-Z]+)*$/';

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
}
