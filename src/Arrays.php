<?php

namespace GeeksAreForLife\Utilities;

class Arrays
{
    public static function sanitiseArrayList($array, $fieldlist)
    {
        $newArray = [];

        for ($i = 0; $i < count($array); $i++) {
            $newArray[] = self::sanitiseArray($array[$i], $fieldlist);
        }

        return $newArray;
    }

    public static function sanitiseArray($array, $fieldlist)
    {
        $newArray = [];

        foreach ($array as $name => $value) {
            if (in_array($name, $fieldlist)) {
                $newArray[$name] = $array[$name];
            }
        }

        return $newArray;
    }
}
