<?php

namespace PragmaPHP\Uuid;

/**
* PHP UUID Generator
*/
class Uuid {

    /**
    * @param    int     Time in milliseconds (optional). E.g. round(microtime(true) * 1000)
    * @return   string  Unique ID
    */
    public static function generate($millis = 0): string {
        $data = random_bytes(16);
        assert(strlen($data) == 16);
        // Set version to 0100
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
        // Set bits 6-7 to 10
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);
        // Output the 36 character UUID.
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }

}