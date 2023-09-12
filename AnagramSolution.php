<?php

class AnagramSolution
{

    /**
     * @param  String[]  $strs
     * @return String[][]
     */
    public static function groupAnagrams($strs)
    {

        $dict = [];

        foreach( $strs as $key)
        {
            $temp = str_split($key);
             sort($temp);
             var_dump($temp);
            $newKey = implode( "",$temp);
            if (isset($newKey, $dict)){
                array_push($dict[$newKey], $key);
            }else{
                $dict[$newKey] = [$key];
            }

        }
        return  $dict;

    }

}


print_r(AnagramSolution::groupAnagrams(["eat","tea","tan","ate","nat","bat"]));