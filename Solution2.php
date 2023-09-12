<?php

class Solution2
{

    /**
     * @param String $allowed
     * @param String[] $words
     * @return Integer
     */
   public static function countConsistentStrings(string $allowed, array $words)
   {
       $allowedSet = array_flip(str_split(strtolower($allowed))); // Create a set of allowed characters
       $count = 0;

       foreach ($words as $word) {
           $isAllowed = true;
           $word = strtolower($word); // Convert the word to lowercase once

           for ($i = 0; $i < strlen($word); $i++) {
               $char = $word[$i];

               if (!isset($allowedSet[$char])) {
                   $isAllowed = false;
                   break;
               }
           }
           if ($isAllowed) {
               $count++;
           }
       }
       return $count;
   }
}

//Solution2::countConsistentStrings()

