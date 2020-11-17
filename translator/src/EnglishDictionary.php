<?php

class EnglishDictionary
{
    private const DICT = [
        'собака' => 'dog',
        'кошка' => 'cat',
        'обезьяна' => 'monkey',
        'слон' => 'elephant',
    ];

    /**
     * @param string $word
     * 
     * @return string
     * $throw RuntimeException
     */
    public function translate(string $word): string 
    {
        if (isset(self::DICT[$word])) {
            return self::DICT[$word];
        }

        throw new RuntimeException(sprintf('The word %s not found in the dictionary.', $word));
    }
}