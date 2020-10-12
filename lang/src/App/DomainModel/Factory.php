<?php

declare(strict_types=1);

namespace App\DomainModel;

use App\DomainModel\Greeting\BaseGreeting
use App\DomainModel\Greeting\RuGreeting

/**
 * Class FactoryGreeting
 * @package App\DomainModel
 */
class FactoryGreeting
{
   
     public function createGreeting(string $language): BaseGreeting
    {
        if ($language === 'ru') {
            return new RuGreeting();
        }
        
        throw new Exception('Unexpected language');        
    }
}
        $factory = new FactoryGreeting();
        $greeting = $factory->createGreeting($request->get('lang'));
        
        

