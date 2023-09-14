<?php

class DNA
{
    public static function findRepeatedDnaSequences($s): array
    {
        $result = [];

        $lookup = [];
        if (strlen($s) < 10) {
            return $result;
        }
        for ($i = 0; $i < strlen($s) - 10; $i++) {
            $new_substring = substr($s, $i, 10);

            if (isset($lookup[$new_substring])) {
                if ($lookup[$new_substring] == 1) {
                    array_push($result, $new_substring);
                }
                $lookup[$new_substring]++;
            } else {
                $lookup[$new_substring] = 1;
            }
        }
        return $result;
    }
}


var_dump(DNA::findRepeatedDnaSequences("AAAAAAAAAAA"));

