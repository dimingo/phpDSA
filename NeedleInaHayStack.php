<?php

class NeedleInaHayStack
{
    /*
* @param String $haystack
* @param String $needle
* @return Integer
*/
   public static function strStr(string $haystack, string $needle) {

       return strpos($haystack, $needle) !== false ? strpos($haystack, $needle) : -1;
    }
}

printf(NeedleInaHayStack::strStr("sadbutsad", "sad"));