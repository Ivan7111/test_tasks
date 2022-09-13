<?php

namespace src;

class Task1
{
    public static function main(int $inputNumber): string
    {
        return Task1::moreThanWhat($inputNumber);
    }

    private static function moreThanWhat(int $number, int $compareTo = 30): string
    {
        return $number > $compareTo ? 'More than ' . $compareTo :
            ($compareTo > 10 ? Task1::moreThanWhat($number, $compareTo - 10) : 'Equal or less than 10');
    }
}
