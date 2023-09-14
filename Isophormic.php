<?php

class Isophormic
{

    public static function isIsomorphic($s, $t)
    {
        if (strlen($s) !== strlen($t)) {
            return false;
        }


        $charMapS = []; // Dictionary to store character mappings from $s to $t
        $charMapT = []; // Dictionary to store character mappings from $t to $s

        for ($i = 0; $i < strlen($s); $i++) {
            $charS = $s[$i];
            $charT = $t[$i];

            if (isset($charMapS[$charS])) {
                if ($charMapS[$charS] !== $charT) {
                    return false;
                }
            } else {
                $charMapS[$charS] = $charT;
            }

            if (isset($charMapT[$charT])) {
                if ($charMapT[$charT] !== $charS) {
                    return false;
                }
            } else {
                $charMapT[$charT] = $charS;
            }
        }



        return true;
    }
}

var_dump(Isophormic::isIsomorphic("badc", "baba"));