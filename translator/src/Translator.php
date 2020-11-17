<?php

class Translator
{
    private EnglishDictionary $dictionary;

    public function __construct(EnglishDictionary $dictionary)
    {
        $this->dictionary = new EnglishDictionary();
    }

    /**
     * @param array $words
     * 
     * @return string
     * @throws RuntimeException
     */
    public function translate(array $words): string
    {
        $translatedPhrase = [];

        foreach ($words as $word) {
            $translatedPhrase[] = $this->dictionary->translate($word);
        }

        return implode(' ', $translatedPhrase);
    }
}
