<?php

declare(strict_types=1);

namespace App\DomainModel;

/**
 * Class Acronym
 * @package App\DomainModel
 */
class Acronym
{
    public function makeAcronymRegexp(string $phrase): string 
    {
        if ($phrase == '') {
            throw new Exception('Incoming text must be not empty');
        }

        $expr = '/(?<=\s|^)[a-z]/i';
        
        if (preg_match_all($expr, $phrase, $matches) === false) {
            
        }

        $result = implode('', $matches[0]);
        return strtoupper($result);
        
    }
    
}
