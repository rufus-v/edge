<?php

/**
* Rufus
*
* @package     Edge
* @author      Drizzy <hola@drizzy.dev>
* @license     http://opensource.org/licenses/MIT The MIT License (MIT)
*/

// Simple fix for Blade escape
if (!function_exists('e')) {
    function e($string, $doubleEncode = true)
    {
        return htmlspecialchars((string) $string, ENT_QUOTES, 'UTF-8', $doubleEncode);
    }
}
