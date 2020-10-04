<?php

namespace GeeksAreForLife\Utilities;

/**
 * Strings class.
 *
 * Some functions to help work with string
 */
class Strings
{
    /**
     * Tests a string to see if it starts with a particular string
     * @param  string $string The full string
     * @param  string $search The string we want to look for
     * @return boolean
     */
    public static function startsWith($string, $search) {
        $len = strlen($search);
        $test = substr($string, 0, $len);

        if ($test === $search) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Tests a string to see if it ends with a particular string
     * @param  string $string The full string
     * @param  string $search The string we want to look for
     * @return boolean
     */
    public static function endsWith($string, $search) {
        if ($search == '') {
            // all strings end in nothing!
            return true;
        }

        $len = strlen($search);
        $test = substr($string, -1 * $len);

        if ($test === $search) {
            return true;
        } else {
            return false;
        }
    }
}