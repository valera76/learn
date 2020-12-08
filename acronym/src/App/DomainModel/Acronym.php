<?php

declare(strict_types=1);

namespace App\DomainModel;

/**
 * Class Acronym
 * @package App\DomainModel
 */
class Acronym
{
    public function makeAcronym(string $phrase): string
    {
        $chars = [
        '.',
        '-',
        ':',
        ';',
        '!',
        '?',
        ',',
        '\''];
        $result = str_replace($chars, '', $phrase);

        $words = explode(" ", $result);

        $acronym = '';
            foreach($words as $word) {
                $acronym .= substr($word, 0, 1);
            }
        
        return strtoupper($acronym);
    }
}
