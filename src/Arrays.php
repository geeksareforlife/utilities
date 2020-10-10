<?php

namespace GeeksAreForLife\Utilities;

/**
 * Arrays class.
 *
 * Some functions to help work with arrays
 */
class Arrays
{
    /**
     * Takes an array of associative arrays and returns a new array or arrays
     * each with only the fields provided in the field list.
     *
     * @param array $arraylist The input array
     * @param array $fieldlist a list of fields to keep
     *
     * @return array the output array
     */
    public static function sanitiseArrayList($arraylist, $fieldlist)
    {
        $newArray = [];

        foreach ($arraylist as $array) {
            $newArray[] = self::sanitiseArray($array, $fieldlist);
        }

        return $newArray;
    }

    /**
     * Takes an associative array and returns a new array with only the
     * fields provided in the field list.
     *
     * @param array $array     The input array
     * @param array $fieldlist a list of fields to keep
     *
     * @return array the output array
     */
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
