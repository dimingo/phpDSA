<?php

class solution
{
    /**
     * @param string $key
     * @param string $message
     * @return string
     */
    public static function decodeMessage(string $key, string $message)
    {
        // Remove spaces and convert the key to an array of unique characters
        $uniqueKeyArray = array_unique(str_split(preg_replace('/\s+/', '', $key)));

        // Create a dictionary with characters from 'a' to 'z' mapped to the unique key characters
        $alphabet = range('a', 'z');
        $dictionary = array_combine($uniqueKeyArray, $alphabet);

        // Initialize the deciphered message
        $decipheredMessage = '';

        // Loop through each character in the message and decipher it
        foreach (str_split($message) as $character) {
            // Use the dictionary to decipher the character or keep it as is
            $decipheredMessage .= $dictionary[$character] ?? $character;
        }

        return $decipheredMessage;
    }
}

// Call the decodeMessage method
solution::decodeMessage("the quick brown fox jumps over the lazy dog", "vkbs bs t suepuv");
