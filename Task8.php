<?php

namespace src;

class Task8
{
    public static function main(string $json): string
    {
        return self::validateJson($json) ? self::decodeJson($json) :
            throw new \InvalidArgumentException('Provided JSON is invalid');
    }

    private static function validateJson(string $json): bool
    {
        if (!empty($json)) {
            return is_array(json_decode($json, true));
        }

        return false;
    }

    private static function decodeJson(string $json): string
    {
        $elements = json_decode($json, true);

        return self::parseElementsArray($elements);
    }

    private static function parseElementsArray(array $elements): string
    {
        $result = '';
        foreach ($elements as $key => $value) {
            if (!is_array($value)) {
                $result .= $key . ': ' . $value . "\r\n";
            } else {
                $result .= self::parseElementsArray($value);
            }
        }

        return $result;
    }
}
